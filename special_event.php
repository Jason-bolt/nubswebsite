<?php

  $page = 'events';
  include('includes/layouts/header.php');

?>

  <!-- Page Content -->
  <div class="container">

    <!-- Slogan -->
    <div class="row col-md-8 mt-3">
      <?php include('includes/layouts/slogan.php'); ?>
    </div>
    <!-- ./Slogan -->

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- SPECIAL ACTIVITIES -->

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x400" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Explosion</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
          </div>
          <!-- <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
          </div> -->
        </div>

      
      </div>

      <!-- Sidebar Widgets Column -->
      <?php include('includes/layouts/side_bar.php'); ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


<!-- Footer -->
<?php
  include('includes/layouts/footer.php');
?>