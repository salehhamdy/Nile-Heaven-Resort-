<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="icon" type="image/x-icon" href="images/nile.ico">

   <title>Luxury 5 Star Resort in Pacefic | Nile Heaven Resort</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="mainstyle.css">
</head>
<body>

   <!-- header -->

   <header class="header">

     <?php include 'navbar.php'?>

   </header>

   <!-- end -->


   <!-- home -->

   <section class="home" id="home">


      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-slide1.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offers</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide2.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide3.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide4.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- end -->

   <!-- availability -->

   <section class="availability">

      <form action="">

         <div class="box">
            <p>check in <span>*</span></p>
            <input type="date" class="input">
         </div>

         <div class="box">
            <p>check out <span>*</span></p>
            <input type="date" class="input">
         </div>

         <div class="box">
            <p>adults <span>*</span></p>
            <select name="adults" id="" class="input">
               <option value="1">1 adults</option>
               <option value="2">2 adults</option>
               <option value="3">3 adults</option>
               <option value="4">4 adults</option>
               <option value="5">5 adults</option>
               <option value="6">6 adults</option>
            </select>
         </div>

         <div class="box">
            <p>children <span>*</span></p>
            <select name="child" id="" class="input">
               <option value="1">1 child</option>
               <option value="2">2 child</option>
               <option value="3">3 child</option>
               <option value="4">4 child</option>
               <option value="5">5 child</option>
               <option value="6">6 child</option>
            </select>
         </div>

         <div class="box">
            <p>rooms <span>*</span></p>
            <select name="rooms" id="" class="input">
               <option value="1">1 rooms</option>
               <option value="2">2 rooms</option>
               <option value="3">3 rooms</option>
               <option value="4">4 rooms</option>
               <option value="5">5 rooms</option>
               <option value="6">6 rooms</option>
            </select>
         </div>

         <input type="submit" value="check availability" class="btn">

      </form>

   </section>

   <!-- end -->


   <!-- about -->

   <section class="about" id="about">

      <div class="row">

         <div class="image">
            <img src="images/i.jpeg" alt="" id="about">
         </div>

         <div class="content">
            <h3>about us</h3>
            <p>The iconic Nile heaven resort stands as a haven within the cosmopolitan vibrant resort, characterized by the finest hospitality you can ever experience.</p>
            <p>Situated on the beautiful sandy beaches, Nile Heaven Resort on the Beach is a symbol of luxury in a serene coastal haven.
               Our resort enjoys a fantastic location right by the shore, making it an ideal escape for those who crave a beachfront paradise with golden sands
               and crystal-clear waters.</p>
            <p>Explore our elegantly designed accommodation that includes a wide selection of room types to suit your needs.</p>
            <p>As a guest, you can also access the exquisite conference and banqueting facilities for hosting memorable social and corporate events.</p>
         </div>

      </div>

   </section>

   <!-- end -->

   <!-- room -->
   <section class="room" id="room">

      <h1 class="heading">our rooms</h1>

      <div class="swiper room-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">$206.00/night</span>
                  <img src="images/room-1.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Heaven Room with Ocean View<h3>
                  <p>Experience bliss in our Heaven Room, featuring a captivating ocean view.
                      Unwind in a cozy atmosphere, complete with a modern bathroom, an entertainment system, and amenities like a mini-bar for a delightful stay.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">$225.00/night</span>
                  <img src="images/room-2.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Family Room</h3>
                  <p>Create lasting memories in our spacious Family Room, designed for comfort and convenience.
                     Enjoy quality time with loved ones in a room equipped with multiple bathrooms, a family-friendly TV setup, and thoughtful amenities.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">$306.00/night</span>
                  <img src="images/room-3.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Heaven Suite with Ocean View</h3>
                  <p>Escape to serenity in our Heaven Suite, offering a tranquil ocean view.
                      This suite provides a serene ambiance, a well-appointed bathroom, and modern conveniences, including a TV and a mini-bar for your comfort.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">$925.00/night</span>
                  <img src="images/room-4.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Royal Suite with Ocean View</h3>
                  <p>Elevate your experience in the opulent Royal Suite, overlooking the Pacific Ocean.
                     Enjoy the epitome of luxury with multiple bathrooms, a large-screen TV, and exclusive facilities such as a private mini-bar and espresso machine.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">$525.00/night</span>
                  <img src="images/room-5.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Diplomatic Suite with Ocean View</h3>
                  <p>Unwind in style in our Diplomatic Suite, boasting panoramic ocean vistas. This elegant suite features multiple bathrooms,
                     a state-of-the-art entertainment system, and a private espresso machine for a truly sophisticated stay.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">$425.00/night</span>
                  <img src="images/room-6.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Panoramic Suite with Ocean View</h3>
                  <p>Indulge in luxury with our Panoramic Suite offering breathtaking ocean views. Experience ultimate comfort with a spacious layout,
                     a lavish bathroom, and modern amenities, including a flat-screen TV and a well-equipped mini-bar.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- end -->

   <!-- services -->

   <section class="services">

      <div class="box-container">

         <div class="box">
            <img src="images/service1.png" alt="">
            <h3>swimming pool</h3>
         </div>

         <div class="box">
            <img src="images/service2.png" alt="">
            <h3>food & drink</h3>
         </div>

         <div class="box">
            <img src="images/service3.png" alt="">
            <h3>restaurant</h3>
         </div>

         <div class="box">
            <img src="images/service4.png" alt="">
            <h3>fitness</h3>
         </div>

         <div class="box">
            <img src="images/service5.png" alt="">
            <h3>beauty spa</h3>
         </div>

         <div class="box">
            <img src="images/service6.png" alt="">
            <h3>resort beach</h3>
         </div>

      </div>

   </section>

   <!-- end -->

   <!-- gallery -->

   <section class="gallery" id="gallery">

      <h1 class="heading">our gallery</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/gallery1.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery2.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery3.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery4.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery5.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery6.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

         </div>

      </div>

   </section>

   <!-- end -->

   <!-- review -->

   <section class="review" id="review">

      <div class="swiper review-slider">
         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>I recently had the pleasure of experiencing an unforgettable holiday at Nile Heaven Resort, and I am still basking in the afterglow of this incredible getaway. From the moment I set foot on the resort grounds, I knew I was in for a treat.</p>
               <div class="user">
                  <img src="images/pic-1.png" alt="">
                  <div class="user-info">
                     <h3>Tom hanks</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>The resort's location is nothing short of breathtaking, nestled along the serene banks of the beach. The lush greenery, coupled with the tranquil waters, provided the perfect backdrop for a relaxing escape. As someone who appreciates nature's beauty, I was in awe of the stunning views that greeted me at every turn.</p>
               <div class="user">
                  <img src="images/pic-2.png" alt="">
                  <div class="user-info">
                     <h3>Julia smith</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>The accommodations at Nile Heaven Resort exceeded all expectations. The room was not only spacious and beautifully decorated but also impeccably clean. I was fortunate enough to have a balcony that offered panoramic views of the beach, allowing me to soak in the beauty of the surroundings right from the comfort of my own space.</p>
               <div class="user">
                  <img src="images/pic-3.png" alt="">
                  <div class="user-info">
                     <h3>john deo</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>The resort's staff played a significant role in making my stay truly special. Their warmth and hospitality were evident from the moment I checked in until the day of my departure. Every staff member went above and beyond to ensure that I felt welcome and had everything I needed for a pleasant stay. Their attention to detail and commitment to guest satisfaction truly set Nile Heaven Resort apart.</p>
               <div class="user">
                  <img src="images/pic-4.png" alt="">
                  <div class="user-info">
                     <h3>Emlia Clarke</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>One of the highlights of my stay was the culinary experience. The resort's restaurants offered a diverse array of delectable dishes, each prepared with the finest ingredients. Whether it was a hearty breakfast buffet or a romantic dinner by the beachside, every meal was a delightful journey for the taste buds.</p>
               <div class="user">
                  <img src="images/pic-5.png" alt="">
                  <div class="user-info">
                     <h3>Mahmoud ElMasry</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <div class="swiper-pagination"></div>
      </div>

   </section>

   <!-- end -->

   <!-- faq -->

   <section class="faqs" id="faq">

      <h1 class="heading">frequently asked questions</h1>

      <div class="row">

         <div class="image">
            <img src="images/FAQs.gif" alt="">
         </div>

         <div class="content">

            <div class="box active">
               <h3>How do I make a  reservation?</h3>
               <p>To make a reservation, simply visit our website and enter your dates of stay, and the number of guests. Browse through available options,
                  select your preferred room type, and follow the prompts to complete the booking process. You'll receive a confirmation email with all the details.</p>
            </div>

            <div class="box">
               <h3>What is the cancellation policy for my reservation?</h3>
               <p> Our cancellation policy varies depending on the room type and rate selected.
                  You can find specific details during the booking process and in your confirmation email.
                  In general, we offer a grace period for free cancellations, but after that, there may be a cancellation fee.
                  Be sure to review the terms to avoid any misunderstandings.</p>
            </div>

            <div class="box">
               <h3>Are there any additional fees or taxes not included in the booking price?</h3>
               <p>The total cost displayed during the booking process includes the room rate and applicable taxes.
                  Some locations may have additional fees, such as resort fees, which will be clearly outlined before you confirm your reservation.
                  Feel free to reach out to our customer support if you have any specific questions about additional charges.</p>
            </div>

            <div class="box">
               <h3>Can I request special accommodations or room preferences?</h3>
               <p>Absolutely! During the booking process, there is an option to add special requests.
                  Whether you prefer a specific floor, bed type, or need accessibility features, let us know,
                  and we will do our best to accommodate your preferences. We cannot guarantee all requests,
                  but we strive to make your stay as comfortable as possible.</p>
            </div>

            <div class="box">
               <h3>How do I modify my reservation dates or make changes to my booking?</h3>
               <p> To modify your reservation, log in to your account on our website and navigate to the "Manage Reservations" section.
                  Here, you can find options to change dates, add special requests, or contact our customer support for assistance.
                  Please note that changes may be subject to availability and any applicable rate differences.</p>
            </div>

         </div>

      </div>

   </section>

   <!-- end -->

   <!-- reservation -->


       <?php
       include 'connection.php';
       include 'reserve.php';
       ?>
       <section class="reservation" id="reservation">

   <h1 class="heading">book now</h1>

   <form action="reserve.php" method="post">

      <div class="container">

         <div class="box">
            <p>name <span>*</span></p>
            <input type="text" name="name" class="input" placeholder="Your Name">
         </div>

         <div class="box">
            <p>email <span>*</span></p>
            <input type="text" name="email" class="input" placeholder="Your Email">
         </div>

         <div class="box">
            <p>check in <span>*</span></p>
            <input type="date" name="check_in" class="input">
         </div>

         <div class="box">
            <p>check out <span>*</span></p>
            <input type="date" name="check_out" class="input">
         </div>

         <div class="box">
            <p>adults <span>*</span></p>
            <select name="adults" class="input">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
            </select>
         </div>

         <div class="box">
            <p>children <span>*</span></p>
            <select name="child" class="input">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
            </select>
         </div>

         <div class="box">
            <p>rooms <span>*</span></p>
            <select name="rooms" class="input">
               <option value="1">1 </option>
               <option value="2">2 </option>
               <option value="3">3 </option>
               <option value="4">4 </option>
               <option value="5">5 </option>
               <option value="6">6 </option>
            </select>
         </div>

         <div class="box">
            <p>room type <span>*</span></p>
            <select name="type" class="input">
               <option value="1">Heaven Room</option>
               <option value="2">Family Room</option>
               <option value="3">Heaven Suite</option>
               <option value="4">Royal Suite</option>
               <option value="5">Diplomatic Suite</option>
               <option value="6">Panoramic Suite</option>
            </select>
         </div>

      </div>

      <input type="submit" value="check availability" class="btn">
      <a href="mybooking.html" class="btnn" target="_blank"> Modify | Cancel </a>

   </form>

</section>
   <!-- end -->

   <!-- team -->

<section>
   <div class="container">
      <div class="section-title">
          <h1>Meet Our Team</h1>
      </div>

      <div class="row">


          <div class="column">
              <div class="team">
                  <div class="team-img">
                      <img src="images/Mohamed Ashraf.jpg" alt="Team Image">
                  </div>
                  <div class="team-content">
                      <h2>Mohamed Ashraf</h2>
                      <h3>CEO & Founder</h3>
                      <p>Junior Computer Science and Full-Stack Developer</p>
                      <h4>M.Ashraf2145@nu.edu.eg</h4>
                  </div>
                  <div class="team-social">
                      <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
                      <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                      <a href="#" class="social-yt"> <i class="fab fa-youtube"></i></a>
                  </div>
              </div>
          </div>

          <div class="column">
              <div class="team">
                  <div class="team-img">
                      <img src="images/Omar.jpg" alt="Team Image">
                  </div>
                  <div class="team-content">
                      <h2>Omar Gasser</h2>
                      <h3>Developer</h3>
                      <p>Junior Computer Science and Full-Stack Developer</p>
                      <h4>O.Gasser2117@nu.edu.eg</h4>
                  </div>
                  <div class="team-social">
                      <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
                      <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                      <a href="#" class="social-yt"> <i class="fab fa-youtube"></i></a>
                  </div>
              </div>
          </div>

          <div class="column">
              <div class="team">
                  <div class="team-img">
                      <img src="images/Saleh.jpg" alt="Team Image">
                  </div>
                  <div class="team-content">
                      <h2>Saleh Hamdy</h2>
                      <h3>Art Director</h3>
                      <p>Junior Computer Science and Software Enginner</p>
                      <h4>S.Hamdy2198@nu.edu.eg</h4>
                  </div>
                  <div class="team-social">
                      <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
                      <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                      <a href="#" class="social-yt"> <i class="fab fa-youtube"></i></a>
                  </div>
              </div>
          </div>

          <div class="column">
              <div class="team">
                  <div class="team-img">
                      <img src="images/Seif.jpg" alt="Team Image">
                  </div>
                  <div class="team-content">
                      <h2>SeifEldeen Haytham</h2>
                      <h3>Designer</h3>
                      <p>Junior Computer Science and Software Enginner</p>
                      <h4>S.Haytham2101@nu.edu.eg</h4>
                  </div>
                  <div class="team-social">
                      <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
                      <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                      <a href="#" class="social-yt"> <i class="fab fa-youtube"></i></a>
                  </div>
              </div>
          </div>

      </div>

  </div>
</section>

<!-- end -->

<!-- sletter -->

<?php include 'newsletter.php'?>

<!-- end -->

   <!-- footer -->

   <?php include 'footer.php'?>

   <!-- end -->

   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script src="JS/script.js"></script>

</body>
</html>
