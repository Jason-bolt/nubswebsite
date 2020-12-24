<?php

  $page = 'departments';
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

        <!-- DEPARTMENTS -->

        <h1 class="my-4">Department_name</h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
          <div style="height: 350px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
          </div>
          <div class="card-body">
            <!-- <h2 class="card-title">LOS</h2> -->
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
          </div>
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