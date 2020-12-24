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

        <h1 class="my-4">Weekly Activities
          <!-- <small>Secondary Text</small> -->
        </h1>

        <div class="row text-center">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <!-- <img class="card-img-top" src="http://placehold.it/500x325" alt=""> -->
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h4 class="card-title">Prayer Force</h4>
                <p class="card-text">
                  <strong>Day:</strong> Monday
                  <br />
                  <strong>Time:</strong> 7pm to 8:30pm
                  <br />
                  <strong>Location:</strong> Casford field
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h4 class="card-title">Midweek service</h4>
                <p class="card-text">
                  <strong>Day:</strong> Monday
                  <br />
                  <strong>Time:</strong> 7pm to 8:30pm
                  <br />
                  <strong>Location:</strong> Casford field
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h4 class="card-title">Sunday service</h4>
                <p class="card-text">
                  <strong>Day:</strong> Monday
                  <br />
                  <strong>Time:</strong> 7pm to 8:30pm
                  <br />
                  <strong>Location:</strong> Casford field
                </p>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

        <!-- SPECIAL ACTIVITIES -->

        <h1 class="my-4">Specials Activities
          <!-- <small>Secondary Text</small> -->
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
          <div style="height: 300px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
          </div>
          <div class="card-body">
            <h2 class="card-title">Explosion</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="special_event.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <!-- <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
          </div> -->
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <div style="height: 300px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
          </div>
          <div class="card-body">
            <h2 class="card-title">Razzbharafest</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="special_event.php" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <!-- <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <a href="#">Start Bootstrap</a>
          </div> -->
        </div>


        <!-- Pagination -->
      <!--   <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul> -->

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