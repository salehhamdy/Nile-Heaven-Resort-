<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $emailCheckQuery = "SELECT * FROM user WHERE email = '$email'";
    $result = $dbcon->query($emailCheckQuery);


    if($result->num_rows > 0){
        $sql = "INSERT INTO contactus (first_name, last_name, email, phone, message)
                VALUES ('$firstname', '$lastname', '$email','$phone','$message')";

        if ($dbcon->query($sql) === TRUE) {
            header("Location: Contact.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $dbcon->error;
        }
}else{
  echo "Error: Email doesn't exist";
  
}
}

?>
