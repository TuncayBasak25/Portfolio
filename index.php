<?php

include 'header.php';


?>


<div id="about" class="container-fluid">
  <div class="row justify-content-center bg-dark text-white">
    <div class="row align-items-center col-12 col-md-6 col-lg-8 order-1 md-order-0">
      <div class="col-12 col-lg-6">
        <h1 id="about-me-title" class="text-center text-md-left mt-4 mt-md-0">Hi, I'am <span class="text-success">Tuncay</span></h1>
        <p id="about-me-sub" class="text-center text-md-left text-info">Web Developer | Software Developer</p>
      </div>
      <div class="col-12 col-lg-6">
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <div class="col-10 col-sm-8 col-md-6 col-lg-4 order-0 order-md-1 mt-4">
      <img class="img-fluid" src="src/img/no-bg-profile.png" alt="photo">
    </div>
  </div>
</div>
<div id="projects" class="container-fluid pl-0 pr-0 pt-5 pb-5 overflow-hidden bg-success">
  <h1 class="text-center mb-5">My Projects</h1>
  <div class="row justify-content-center">
  <?php
  include 'getProjectViews.php';
   ?>
   </div>
</div>

<div id="contacts" class="container-fluid bg-secondary pt-5 pb-5">
  <h1 class="text-center">Contact Me</h1>
  <div class="container">
    <form class="" action="contact.php" method="post">
      <div class="row justify-content-around w-75 ml-auto mr-auto">
        <input class="col-10 col-md-6 mb-2" type="text" name="name" placeholder="Your name" required="required">
        <input class="col-10 col-md-6 mb-2" type="text" name="email" placeholder="Your email" required="required">
        <textarea class="col-12" name="message" rows="6" cols="80" placeholder="Your message" required="required"></textarea>
        <input class="col-3 ml-auto mr-auto" type="submit" name="submit" value="Send">
      </div>
    </form>
  </div>
</div>

<div class="container-fluid bg-info pt-5 pb-2">
  <div class="row">
    <div class="offset-9 col-3">
      <form action="admin.php" method="post">
        <button class="btn btn-secondary" type="submit" name="cms-button">CMS</button>
      </form>
    </div>
  </div>
</div>



<?php

include 'footer.php';
