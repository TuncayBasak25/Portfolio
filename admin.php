<?php

session_start();

$password = "test";

if (!isset($_POST['cms-button']) && !isset($_POST['password']) && !isset($_SESSION['admin'])) {
  header("Location: index.php?1");
  exit;
}

if (!isset($_POST['password']) && !isset($_SESSION['admin'])) {
  include 'header.php';
  ?>
  <div class="container-fluid w-100 bg-dark" style="height: 100vh">
    <div class="d-flex justify-content-center w-100 h-100">
      <div class="d-flex flex-wrap align-items-center col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2">
        <form action="admin.php" method="post">
          <input type="password" name="password" placeholder="Enter password" required="required">
          <input type="submit" name="" value="Confirm">
        </form>
      </div>
    </div>
  </div>
  <?php
  include 'footer.php';
  exit;
}
else if (isset($_POST['password']) && $_POST['password'] !== $password) {
  header("Location: index.php?2");
  exit;
}
$_SESSION['admin'] = 'yes';


if (isset($_POST['password'])) {
  include 'header.php';
  ?>
  <div class="container-fluid w-100 bg-dark" style="height: 100vh">
    <div class="d-flex justify-content-center w-100 h-100">
      <div class="d-flex flex-wrap align-items-center col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2">
        <form action="admin.php" method="post" enctype="multipart/form-data">
          <input type="text" name="name" placeholder="Enter project name" required="required">
          <input type="text" name="title" placeholder="Enter project title" required="required">
          <textarea rows="4" cols="30" name="paragraph" placeholder="Enter project text" required="required"></textarea>
          <input type="file" name="img" placeholder="Upload project img" required="required">


          <input type="submit" name="" value="Confirm">
        </form>
      </div>
    </div>
  </div>
  <?php
  include 'footer.php';
  exit;
}


if (!isset($_POST['name']) || !isset($_POST['title']) || !isset($_POST['paragraph']) || !isset($_FILES['img'])) {
  session_destroy();
  header("Location: index.php?3");
  exit;
}

$img_data = file_get_contents($_FILES['img']['tmp_name']);


require 'ProjectViewModel.php';

$projectViewModel = new ProjectViewModel();


$projectViewModel->add($_POST['name'], $_POST['title'], $_POST['paragraph'], $img_data);


session_destroy();
header("Location: index.php?4");
exit;
