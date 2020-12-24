<?php

  $page = 'home';
  include('includes/layouts/header.php');

?>

    <!-- Slogan -->
    <div class="container">
      <div class="row col-md-8 mt-3">
        <?php include('includes/layouts/slogan.php'); ?>
      </div>
    </div>
    <!-- ./Slogan -->

    <!-- Sliding Images (Carousel) -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <!-- First image -->
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/banner1.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5><strong>WELCOME TO NUBS UCC</strong></h5>
              <!-- <p>...</p> -->
            </div>
          </div>
          <!-- Second image -->
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner2.png" alt="Second slide">
          </div>
          <!-- Third image -->
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner3.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- ./Sliding Images (Carousel) -->

    <!-- Page Content -->
  <div class="container">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8 mt-2">

        <h1>Welcome Address</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <hr />

        <h1 class="my-4">Weekly Activities
          <!-- <small>Secondary Text</small> -->
        </h1>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h4 class="card-title">Prayer Force</h4>
                <p class="card-text">
                  <strong>Day:</strong> Monday
                  <br />
                  <strong>Time:</strong> 7:00pm to 8:30pm
                  <br />
                  <strong>Location:</strong> Casford field
                </p>
              </div>
<!--               <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h4 class="card-title">Midweek service</h4>
                <p class="card-text">
                  <strong>Day:</strong> Wednesday
                  <br />
                  <strong>Time:</strong> 6:30pm to 8:00pm
                  <br />
                  <strong>Location:</strong> Casford field
                </p>
              </div>
<!--               <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h4 class="card-title">Sunday service</h4>
                <p class="card-text">
                  <strong>Day:</strong> Sunday
                  <br />
                  <strong>Time:</strong> 8:00pm to 11:30pm
                  <br />
                  <strong>Location:</strong> Assembly Hall
                </p>
              </div>
<!--               <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div> -->
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
            <p class="card-text">
              This is an annual worship program held by NUBS-UCC in honour of our Lord and master Jesus Christ. Explosion is a three day event consisting musical performances, choreography, spoken word, word ministration and many more.
            </p>
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