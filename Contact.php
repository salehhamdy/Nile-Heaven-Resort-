<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="images/nile.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="Fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="CSS/contactstyle.css">

    <title>Contact us</title>
  </head>
  <body>

  
  <div class="content">

  <div class="home">
    <a href="main.php"> <i class="fas fa-house fa-beat" style="color: white; font-size: 50px;"></i></a>
  </div>

    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3><b>Send us a message</b></h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm" action="sendmsg.php">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">First name *</label>
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Last name *</label>
                  <input type="text" class="form-control" name="lname" id="lname"  placeholder="Last name" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Eg. example@gmail.com " required>
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Phone number</label>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Eg. 201112131415">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary rounded-6 py-2 px-6">
                  <span class="submitting"></span>
                </div>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63061026.394831195!2d118.47330575000001!3d15.271089399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x671f829b0fbe04f5%3A0xa6e52d2d85ce9b84!2sPacific%20Islands%20Club%20Guam!5e0!3m2!1sen!2seg!4v1702503347283!5m2!1sen!2seg" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </form>

            <div id="form-message-warning mt-4"></div>
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info h-100">
            <h3>Contact Information</h3>
            <p class="mb-5">For immediate assistance or questions, please feel free to reach out to our friendly staff. We look forward to welcoming you to Nile Heaven Resort.!</p>
            <ul class="list-unstyled">
              <li class="d-flex">
                <span class="wrap-icon icon-room mr-3"></span>
                <span class="text">9757 Serenity Cove Oceanfront Paradise, Pacific Island 98765</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-phone mr-3"></span>
                <span class="text">+1 (291) 911 9231</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-envelope mr-3"></span>
                <span class="text">Ask@NileHeaven.com</span>
              </li>
              <li class="d-flex">
              </li>
              <li class="d-flex">
              </li>
              <li class="d-flex">
                <div class="social-media">
                  <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                  </a>
                  <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </li>
              <li class="d-flex">
              </li>
              <li class="d-flex">
              </li>
              <li class="d-flex">
              </li>
              <li class="d-flex">
              </li>
              <li class="d-flex">
              </li>
              <li class="d-flex">
                <img src="images/nile.png" alt="">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- <script src="Js/jquery-3.3.1.min.js"></script> -->
  <script src="JS/popper.min.js"></script>
  <script src="JS/bootstrap.min.js"></script>
  <script src="JS/jquery.validate.min.js"></script>
  <script src="JS/main.js"></script>


  </body>
</html>
