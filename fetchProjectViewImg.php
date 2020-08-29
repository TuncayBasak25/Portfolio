<?php

require 'ProjectViewModel.php';

$projectViewModel = new ProjectViewModel();

echo $projectViewModel->get_img($_GET['name']);
