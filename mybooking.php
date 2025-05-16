<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Booking</title>
<link rel="icon" type="image/x-icon" href="images/nile.ico">
<link rel="stylesheet" href="CSS/mybookingstyle.css">

</head>
<body>
  <?php

  include 'connection.php';

  $my_query = "select * from booking";
  $result = mysqli_query($dbcon,$my_query);
  
  echo '<h1>My Booking</h1>';
  echo '<p>Here you can view and edit your bookings. To do so, simply enter your last name and reservation number.</p>';
  echo '<form action="#">';
  echo '<label for="last-name">Last Name:</label>';
  echo  '<input type="text" id="last-name" name="last-name" required>';
  echo  '<label for="reservation-number">Reservation Number:</label>';
  echo  '<input type="text" id="reservation-number" name="reservation-number" required>';
  echo  '<button type="submit">View Booking</button>';
  echo  '</form>';
  echo  '<div class="booking-info">';
  echo  '<button type="button">Cancel Booking</button>';
  echo  '</div>';
  echo  '<div class="review-form">';
  echo  '<h3>How was your stay? Please leave a review.</h3>';
  echo  '<textarea name="review" id="review" cols="30" rows="10"></textarea>';
  echo  '<button type="submit">Submit Review</button>';
  echo  '</div>';

  ?>
</body>
</html>
