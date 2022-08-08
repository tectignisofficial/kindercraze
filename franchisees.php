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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
      .side-icon {
        width: 48px;
      }
      .side-div{
        font-size: 20px;
        line-height: initial;
      }
      .para {
        width: fit-content;
      }
      
    /* .site-section-cover, .site-section-cover .container > .row {
    height: calc(70vh - 196px);
    min-height: 500px;
} */
 </style>

  </head>

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
      <div class="site-section-cover overlay"  style="background-image: url('images/play.jpg')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 playGroup" style="padding-top:10rem;">
              <span class="text-cursive h5 text-red">Franchisees</span>
              <h1 class="mb-3 font-weight-bold text-teal">Kinder Craze Support</h1>
              <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Franchisees</strong></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>


    <div class="site-section pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h2 class="text-black">Franchisees</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-8 pt-4">
            <div class="d-flex side-div">
             <i class="fa-solid fa-table-cells-large side-icon"></i>
             <p class="para">Annual playschool curriculum</p>
             </div>
          </div> 

          <div class="col-8 pt-4">
            <div class="d-flex side-div">
            <i class="fa-solid fa-building-columns side-icon"></i>
             <p class="para">Training of all the Franchisee’s teachers in centre management</p>
             </div>
          </div> 

          <div class="col-8 pt-4">
            <div class="d-flex side-div">
            <i class="fa-solid fa-bullhorn side-icon"></i>
             <p class="para">Regular updating of curriculum</p>
             </div>
          </div>

          <div class="col-8 pt-4">
            <div class="d-flex side-div">
            <i class="fa-solid fa-user side-icon"></i>
             <p class="para">Dedicated contact person at the kinder craze school Head office for resolving queries</p>
             </div>
          </div>

          <div class="col-8 pt-4">
            <div class="d-flex side-div">
            <i class="fa-solid fa-image side-icon"></i>
             <p class="para">Mention of the Franchisee’s centre details on kinder craze school website and publishing of centre details in local advertisements (The amount to be spent by kinder craze school on this will be at its sole discretion.)</p>
             </div>
          </div>
                                                                           
        </div>
      </div>
    </div> 

    <div class="site-section bg-light pt-5"> 
    <div class="container">
        <div class="form-group row justify-content-center">
        <div class="col-7 text-center mb-5">
          <h2>Apply Online</h2>
        </div>
        <div class="col-lg-8 mb-5" >
            <form method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your Full Name" required>
                </div>
                <div class="col-md-6">
                <input type="text" minlength="10" maxlength="10" class="form-control" name="number" id="number" placeholder="Mobile Number" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="col-md-6">
                <input type="text" class="form-control" name="Acity" id="Acity" placeholder="Area/City for Franchise" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="address" id="address" class="form-control" placeholder="Address" cols="30" rows="4" required></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="description" id="description" class="form-control" placeholder="Description" cols="30" rows="10" required></textarea>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" name="submit" id="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>             
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

  </body>

  <?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile_number=$_POST['number'];
    $email=$_POST['email'];
    $area_city=$_POST['Acity'];
    $address=$_POST['address'];
    $description=$_POST['description'];
   
    $sql=mysqli_query($conn,"INSERT INTO `franchisees`(`name`, `mobile_number`, `email`, `area_city`, `address`, `description`) VALUES ('$name','$mobile_number','$email','$area_city','$address','$description')");
    if($sql==1){
      echo '<script>alert("Successfully submitted");</script>';
      header("location:franchisees.php");
  }else {
      echo '<script>alert("oops...somthing went wrong");</script>';
  }
          
  }
  ?>

</html>

