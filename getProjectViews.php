<?php

require 'ProjectViewModel.php';

$projectViewModel = new ProjectViewModel();

$result = $projectViewModel->get_unarchived();

while ($result && $row = $result->fetch_assoc()) {

  $name = $row['name'];
  $title = $row['title'];
  $paragraph = $row['paragraph'];

  ?>
  <div class="container-3d">
    <div class="card-3d bg-info">
      <div class="row m-0">
        <div class="row m-0 col-12 justify-content-center">
          <h1 class="card-3d-title"><?php echo $title ?></h1>
        </div>
        <div class="col-12 col-md-6 col-lg-7 col-xl-8">
          <img style="width: 20vw; object-fit: contain" src="fetchProjectViewImg.php?name=<?php echo $name ?>" alt="<?php echo $name ?>">
        </div>
        <p class="col-12 col-md-6 col-lg-5 col-xl-4"><?php echo $paragraph ?></p>
      </div>
    </div>
  </div>
  <?php

}
