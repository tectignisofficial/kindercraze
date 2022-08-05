<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<header class="site-navbar site-navbar-target" role="banner">

<div class="container mb-3">
  <div class="d-flex align-items-center">
    <div class="site-logo mr-auto">
      <a href="index.html">Kinder craze<span class="text-primary">.</span></a>
    </div>
    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
      <div class="d-flex site-info align-items-center mr-5">
        <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
        <span> National Marvel, G.F, Shop no:3, Plot no: 177 Sector-17,   <br> Ulwe, Tel-Panvel, Navi Mumbai, Maharashtra 410206</span>
      </div>
      <div class="d-flex site-info align-items-center">
        <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
        <span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
      </div>
      
    </div>
  </div>
</div>


<div class="container">
  <div class="menu-wrap d-flex align-items-center">
    <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

      

      <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
        <ul class="site-menu main-menu js-clone-nav mr-auto ">
          <li><a href="index.php" class="nav-link <?= $page == 'index.php' ? 'active':'' ?>">Home</a></li>
          <li class="dropdown"><a href="#" class="nav-link" class="dropdown-toggle" data-toggle="dropdown">Class 
                   <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="listbox">
                   <li class="text-center"><a href="play_group.php" role="option">Play Group</a></li>
                   <li class="text-center"><a href="nursery.php" role="option">Nursery</a></li>
                   <li class="text-center"><a href="junior_kg.php" role="option">Junior KG.</a></li>                  
                   <li class="text-center"><a href="senior_kg.php" role="option">Senior KG.</a></li>                 
                   <li class="text-center"><a href="day_care.php" role="option">Daycare services</a></li>
                </ul>
             </li>
          <li><a href="about.php" class="nav-link <?= $page == 'about.php' ? 'active':'' ?>">About</a></li>
          
          <li><a href="gallery.php" class="nav-link <?= $page == 'gallery.php' ? 'active':'' ?>">Gallery</a></li>
          <li><a href="franchisees.php" class="nav-link <?= $page == 'franchisees.php' ? 'active':'' ?>">Get a Franchisees</a></li>
          <li><a href="contact.php" class="nav-link <?= $page == 'contact.php' ? 'active':'' ?>">Contact</a></li>
        </ul>
      </nav>

      <div class="top-social ml-auto">
        <a href="https://www.facebook.com/"><span class="icon-facebook text-teal"></span></a>
        <a href="https://www.twitter.com/"><span class="icon-twitter text-success"></span></a>
        <a href="https://www.instagram.com/"><span class="icon-instagram text-pink"></span></a>
      </div>
  </div>
</div>



</header>