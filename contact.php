<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

  if (mail('tuncay.basak@outlook.com', $_POST['name'], $_POST['message'])) {
    header("Location: index.php?messageSent");
  }
  else {
    header("Location: index.php?errorToSent");
  }

}
else {
  header("Location: index.php?error");
}
