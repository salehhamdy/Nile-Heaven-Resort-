<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkIn = $_POST['check_in'];
    $checkOut = $_POST['check_out'];
    $adults = $_POST['adults'];
    $children = $_POST['child'];
    $rooms = $_POST['rooms'];
    $roomType = $_POST['type'];

    // Check room availability
    $availabilityQuery = "SELECT available_rooms FROM room_amount WHERE room_type = '$roomType'";
    $availabilityResult = $dbcon->query($availabilityQuery);

    if ($availabilityResult->num_rows > 0) {
        $row = $availabilityResult->fetch_assoc();
        $availableRooms = $row['available_rooms'];

        if ($availableRooms >= $rooms) {
            // Sufficient rooms available, proceed with the reservation
            $emailCheckQueryA = "SELECT * FROM reservations WHERE email = '$email'";
            $emailCheckQueryB = "SELECT * FROM user WHERE email = '$email'";
            $resultA = $dbcon->query($emailCheckQueryA);
            $resultB = $dbcon->query($emailCheckQueryB);

            if ($resultB->num_rows > 0) {
                if ($resultA->num_rows > 0) {
                    echo "Error: Email already exists. Please use a different email.";
                } else {
                    $sql = "INSERT INTO reservations (username, email, check_in, check_out, adults, children, rooms, room_type)
                            VALUES ('$name', '$email', '$checkIn', '$checkOut', $adults, $children, $rooms, '$roomType')";

                    // Update available rooms in the room_amount table
                    $updateAvailabilityQuery = "UPDATE room_amount SET available_rooms = available_rooms - $rooms WHERE room_type = '$roomType'";
                    $dbcon->query($updateAvailabilityQuery);

                    if ($dbcon->query($sql) === TRUE) {
                        header("Location: main.php");
                        exit();
                    } else {
                        echo "Error: " . $sql . "<br>" . $dbcon->error;
                    }
                }
            } else {
                echo "Error: Not a user email. Please create an account.";
            }
        } else {
            echo "Error: Insufficient rooms available for the selected room type.";
        }
    } else {
        echo "Error: Room availability information not found for the selected room type.";
    }
    $dbcon->close();
}
?>
