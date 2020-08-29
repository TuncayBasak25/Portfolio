<?php

session_start();

require 'includes/class_auto_loader.php';

 ?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tuncay BASAK">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel='stylesheet' href='normalize.css'>
    <link rel='stylesheet' href='main.css'>
    <title>TB2W</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-lg justify-content-between">
        <img id="logo" src="src/img/logo-test.png" alt="logo">
        <h1 class="ml-3 text-white">Tuncay Basak <span style="font-size: 75%">Web Developer</span></h1>
        <button class="navbar-toggler" width="40px" height="40px" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span id="navbar-button" class="navbar-toggler-icon" style="z-index: 100;"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between text-right" id="navbarNav">
          <span class="nav-item nav-link ml-auto">About Me</span>
          <span class="nav-item nav-link">My Projects</span>
          <span class="nav-item nav-link">My Articles</span>
          <span class="nav-item nav-link">Contact Me</span>
        </div>
      </nav>
    </header>
