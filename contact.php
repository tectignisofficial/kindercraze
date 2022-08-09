<?php
include("config.php");
?>

<!doctype html>
<html lang="en">

  <head>
    <title>Kinder Craze Schools  &mdash; Tectignis </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <!-- <style>
    .site-section-cover, .site-section-cover .container > .row {
    height: calc(70vh - 196px);
    min-height: 500px;
}
 </style> -->

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      
      <?php
      include("include/header.php");
      ?>    

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay"  style="background-image: url('images/ezgif.com-gif-maker.jpg')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 playGroup" style="padding-top:10rem;">
              <span class="text-cursive h5 text-red">Contact</span>
              <h1 class="mb-3 font-weight-bold text-teal">Get In Touch</h1>
              <p><a href="index.php" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Contact</strong></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2 class="contactHeading">Get In Touch Using The Contact Form</h2>

        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control"name="lname" id="lname" placeholder="Last name" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email address" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="message" class="form-control" placeholder="Write your message." cols="30" rows="10" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" name="submit" id="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto contactInfo">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>National Marvel, G.F, Shop no:3, Plot no: 177 Sector-17, Ulwe, Tel-Panvel, Navi Mumbai, Maharashtra 410206</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+91 9987705688 / 9987805688</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@tectignis.in</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Testimonial</span>
            <h2 class="text-black">Word of mouth has been the driver of our success for over 30 years. Here are some of the great things people have said about us:</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="testimonial-3-wrap">
              

            <div class="owl-carousel nonloop-block-13">
                <div class="testimonial-3 row">
                  <div class="col-lg-2 col-md-2 col-sm-12 justify-content-center align-item-center">
                    <img src="images\ezgif.com-gif-maker (13).jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text col-lg-10 col-md-10 col-sm-12">
                    <h3>Vedant Naidu</h3>
                    <p class="position">Partner</p>
                    <p>My daughter has been going to this school for more than one year and she loves all the teachers in the school. Teachers are so caring and lovable. She likes the extra curricular activities such as tinkering lab, painting and gardening.</p>
                  </div>
                </div>

                <div class="testimonial-3 row">
                  <div class="col-lg-2 col-md-2 col-sm-12 justify-content-center align-item-center">
                    <img src="images\ezgif.com-gif-maker (14).jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text col-lg-10 col-md-10 col-sm-12">
                    <h3>Monika Gore</h3>
                    <p class="position">Partner</p>
                    <p>This is our 5th year at CMP and we couldn’t be happier for being part of this amazing school! This is truly a place where kids can be kids: they will play in puddles when it’s raining (while using appropriate gear – rain boots and jackets).</p>
                  </div>
                </div>

                <div class="testimonial-3 row">
                  <div class="col-lg-2 col-md-2 col-sm-12 justify-content-center align-item-center">
                    <img src="images\ezgif.com-gif-maker (15).jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text col-lg-10 col-md-10 col-sm-12">
                    <h3>Dipali Kale</h3>
                    <p class="position">Partner</p>
                    <p>We have been sending our son to Atharva Kale Preschool for 3 years now and the progress in development we see in our son is just a joy. He learns so much new stuff and words that it sometime raises an eyebrow.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        
      </div>
    </div> 

     
        <div class="map">
        
            <span class="text-cursive h5 text-red d-block" style="text-align:center;">School on Google map</span>
            <h2 class="text-black" style="text-align:center;">Map</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15093.24590239017!2d73.0206993!3d18.9618467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x397ba6a0f423cf78!2sKinder%20Craze%20Schools!5e0!3m2!1sen!2sin!4v1660022392652!5m2!1sen!2sin"width="1680" height="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width: -webkit-fill-available;"></iframe>
         
        </div>
    
    

    <?php      
    include("include/footer.php");
    ?>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  </body>

  <?php
if(isset($_POST['submit'])){
  $first_name=$_POST['fname'];
  $last_name=$_POST['lname'];
  $email=$_POST['email'];
  $message=$_POST['message'];
 
  $sql=mysqli_query($conn,"INSERT INTO `contact`(`first_name`, `last_name`, `email`, `message`) VALUES ('$first_name','$last_name','$email','$message')");
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:contact.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>

</html>

