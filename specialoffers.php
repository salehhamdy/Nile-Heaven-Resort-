<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="icon" type="image/x-icon" href="images/nile.ico">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Special Offers</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="CSS/specialoffersstyle.css">
</head>
<body>

   <!-- header -->

   <header class="header">

      <?php include 'navbar.php'?>

      <?php include 'connection.php';

      if ($dbcon){
        echo "connected";
      }
      else {
        echo "offline";
      }
      
      ?>

   </header>

   <!-- end -->


   <!-- home -->

   <section class="home" id="home">


      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/spaaa.webp) no-repeat;">
               <div class="content">
               </div>
            </div>
      </div>

   </section>

   <!-- end -->


<section>
   <div class="special">
      <center><h1>SPECIAL OFFERS</h1></center>
      <center>
         <p>
            We’ve put together a treasure-trove of inclusive offers for you to enjoy.
            More than just exceptional value, many of these also feature thoughtful little extras sure to raise a smile
             - and complimentary Wi-Fi comes with every stay.
         </p>
         <p>
            Take a look at our full collection of seasonal offers.
            Each one designed to give you a little more of Grand Nile Tower.
         </p>
      </center>
   </div>
</section>


   <!-- about -->

   <section class="about" id="about">

      <div class="row">

         <div class="image">
            <img src="images/beaut.jpg" alt="" id="about">
         </div>

         <div class="content">
            <h3>Heaven Life 15% off</h3>
            <hr class="solid">
            <p>Enjoy 15% off our room rate when you stay one night up to 5 nights. Relax and Bask in
               glorious sunshine with stunning views of the legendary Ocean from your room.</p>
               <ul>
                  <li>All offers are subject to availability at time of reservation. Offers are not valid in conjunction
                      with any other offer or contract and do not apply to groups. Rates are per room, per night, vary by arrival
                      date and/ or length of stay, and
                     do not include applicable taxes and service charge.</li>
                     <li>15% discount in all resort restaurants including the asian restaurant.</li>
                        <br>
                        <li>Flexibility in your hands: flexible cancellation available when you book with us.</li>
                        <li>Nile Heaven Resort reserves the right to change the terms and conditions without prior notice.</li>
               </ul>
               <br>
               <span style="    font-size: 1.6rem;
               color: #666;
               font-weight: bold;
               padding: 1rem 0;
               line-height: 1.8;">For more information or to make a reservation, please </span>
               <br>
               <span style="    font-size: 1.6rem;
               color: #666;
               font-weight: bold;
               padding: 1rem 0;
               line-height: 1.8;">contact us:</span>
               <br>
               <span style="    font-size: 1.6rem;
               color: #666;
               font-weight: bold;
               padding: 1rem 0;
               line-height: 1.8;">Tel: <span style="color: #4d84e2;"> +1 (291) 911 9231</span></span>
               <br>
               <span style="    font-size: 1.6rem;
               color: #666;
               font-weight: bold;
               padding: 1rem 0;
               line-height: 1.8;">Email: <span style="color: #4d84e2;">reservations@NileHeaven.com</span></span>
               <br>
               <br>
               <a href="main.php#reservation" class="btn"><center>book now</center></a>
         </div>

      </div>

   </section>

   <!-- end -->

      <!-- about -->

      <section class="about" id="about" style="background-color: #4d84e2;">

         <div class="row">

            <div class="iimage">
               <img src="images/shoot.jpg" alt="" id="about">
            </div>

            <div class="content">
               <h3>Stay longer and save more 20% off</h3>
               <hr class="solid">
               <p style="color: #fff;">With 20% off our room rate when staying 6 nights and more at Nile heaven resort,
                  there is more time to indulge in our magnificent facilities, extraordinary cuisine and renowned service. </p>
                  <ul>
                     <li style="color: #fff;">Minimum stay is 6 nights to get the offer.</li>
                     <li style="color: #fff;">All offers are subject to availability at time of reservation. Offers are not valid in conjunction with any other offer or contract and do not apply to groups.
                        Rates are per room, per night, vary by arrival date and/ or length of stay, and do not include applicable taxes and service charge.</li>
                     <li style="color: #fff;">15% discount in all hotel restaurants including the renowned Revolving restaurant,
                         the highest revolving restaurant in the Middle East with 360-degree panoramic views of the cosmopolitan city of Cairo & the Nile river.</li>
                     <li style="color: #fff;">Flexibility in your hands: flexible cancellation available when you book with us.</li>
                     <li style="color: #fff;">Grand Nile Tower hotel reserves the right to change the terms and conditions without prior notice.</li>
                  </ul>
                  <br>
                  <span style="    font-size: 1.6rem;
                  color: #fff;
                  font-weight: bold;
                  padding: 1rem 0;
                  line-height: 1.8;">For more information or to make a reservation, please </span>
                  <br>
                  <span style="    font-size: 1.6rem;
                  color: #fff;
                  font-weight: bold;
                  padding: 1rem 0;
                  line-height: 1.8;">contact us:</span>
                  <br>
                  <span style="    font-size: 1.6rem;
                  color: #fff;
                  font-weight: bold;
                  padding: 1rem 0;
                  line-height: 1.8;">Tel: <span style="color: #25d2d5;"> +1 (291) 911 9231</span></span>
                  <br>
                  <span style="    font-size: 1.6rem;
                  color: #fff;
                  font-weight: bold;
                  padding: 1rem 0;
                  line-height: 1.8;">Email: <span style="color: #25d2d5;">reservations@NileHeaven.com</span></span>
                  <br>
                  <br>
                  <a href="main.html#reservation" class="bttn"><center>book now</center></a>
            </div>

         </div>

      </section>

      <!-- end -->

   <?php include 'newsletter.php'?>

   <!-- end -->

   <!-- footer -->

   <?php include 'footer.php'?>

   <!-- end -->

   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script src="JS/script.js"></script>

</body>
</html>
