<!DOCTYPE html>
<html>
  <head>
    <title>Music School</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <!-- navbar -->
      <nav>
        <h2 class="logo_name">Music school</h2>
        <ul class="nav-links" id="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#classes">Classes</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        
      </nav>

      <!-- banner -->
      <div class="banner">
        <img src="images/banner.jpg" alt="bannerimage" />
        <div class="content">
          <h2>Music for Everyone</h2>
          <h3>awaken possibility</h3>
          <p>
            we offer music education for individuals of just about every age and
            skill level
          </p>
          <a href="enrollmentform.php">start learning</a>
        </div>
      </div>



      <!-- course form -->
      
          
        
    </div>

    <main>
      <!-- about us -->
      
      <?php
  include("about.php");
  ?>

      <!-- music classes -->

      <section class="music_class" id="classes">
        <h2 class="heading">Music classes</h2>
        <div class="music_cards">
          <div class="class_info">
            <div class="images">
              <img src="images/piano1.jpg" alt="piano" />
            </div>
            <div class="class_details">
              <h2>piano</h2>
              <p>shift: Morning</p>
              <a href="enrollmentform.php" class="enroll" >Enroll now</a>
            </div>
          </div>

          <div class="class_info">
            <div class="images">
              <img src="images/guitar.jpg" alt="guitar" />
            </div>
            <div class="class_details">
              <h2>guitar</h2>
              <p>shift: afternoon</p>
              <a href="enrollmentform.php" class="enroll" >Enroll now</a>
            </div>
          </div>

          <div class="class_info">
            <div class="images">
              <img src="images/guitar.jpg" alt="guitar" />
            </div>
            <div class="class_details">
              <h2>Base</h2>
              <p>shift: afternoon</p>
              <a href="enrollmentform.php" class="enroll">Enroll now</a>
            </div>
          </div>
        </div>
      </section>

      <!-- contact form -->
      <section class="contact" id="contact">
        <h2>Contact us</h2>
        <p>have any queries? let's talk</p>
        <div class="form_details">
          <div class="form_info">
          <?php
  include("contact.php");
  ?>
          </div>

          <!-- get in touch -->
          <div class="infos">
            <h2>get in touch</h2>
            <div class="phone">
              <img src="icons/telephone-of-old-design.svg" alt=" phone" />
              <h3>+977-1234567890</h3>
            </div>
            <div class="email">
              <img src="icons/mail.svg" alt="email" />
              <h3>musicschool@gmail.com</h3>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>copyright&copy2021. all rights reserved</footer>

    <!-- <script type="text/javascript" src="script.js"></script> -->
  </body>
</html>
