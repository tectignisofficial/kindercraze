<?php
include("config.php");

if(isset($_POST['send'])){

  $email=$_POST['email'];
 
  $sql=mysqli_query($conn,"INSERT INTO `newsletter_email`(`email`) VALUES ('$email')");
  if($sql==1){
    echo '<script>alert("Thank You...!");</script>';
    header("location:index.php");
}
}
?>
 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-4">About Us</h2>
                <p class="mb-5">Give your child the best possible beginning to lifelong learning, where even you are trained to contribute through active participation. </p>

                <!-- <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form> -->
                
                  <h2 class="footer-heading mb-4">Follow us </h2>
                  <ul class="list-unstyled">
                    <div class="top-social ml-auto">
                      <a href="https://facebook.com/"><span class="icon-facebook text-teal"></span></a>
                      <a href="https://twitter.com/"><span class="icon-twitter text-success"></span></a>
                      <a href="https://instagram.com/"><span class="icon-instagram text-pink"></span></a>
                    </div>
                  </ul>
                
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-4 ml-auto">
                <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                <li><a href="about.php">About Us</a></li>
                  <li><a href="pricing.php">Pricing</a></li>
                  <li><a href="terms-service.php">Terms of Service</a></li>
                  <li><a href="privacy.php">Privacy</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              
              <div class="col-lg-5">
                 <h2 class="footer-heading mb-4">Newsletter</h2>
                    <form method="POST" class="d-flex" class="subscribe">
                      <input type="text" class="form-control mr-2" name="email" id="email" placeholder="Email" required>
                      <input type="submit" name="send" id="send" value="Send" class="btn btn-primary">
                    </form>
              </div>
              
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Kinder Craze made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://tectignis.in/" target="_blank" >Tectignis.in</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>