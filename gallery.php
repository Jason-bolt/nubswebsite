<?php

  $page = 'gallery';
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

        <h1 class="my-4">Gallery
          <!-- <small>Secondary Text</small> -->
        </h1>

        <div class="row text-center">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <!-- <img class="card-img-top" src="http://placehold.it/500x325" alt=""> -->
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h5 class="card-title">Explosion sunday</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
              </div>
              <div class="card-footer">
                <a href="gallery_more.php" class="btn btn-primary">View pics</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h5 class="card-title">Midweek service</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
              </div>
              <div class="card-footer">
                <a href="gallery_more.php" class="btn btn-primary">View pics</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h5 class="card-title">Midweek service</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
              </div>
              <div class="card-footer">
                <a href="gallery_more.php" class="btn btn-primary">View pics</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h5 class="card-title">Midweek service</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
              </div>
              <div class="card-footer">
                <a href="gallery_more.php" class="btn btn-primary">View pics</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h5 class="card-title">Midweek service</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
              </div>
              <div class="card-footer">
                <a href="gallery_more.php" class="btn btn-primary">View pics</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div style="height: 150px; background-image: url('img/welcome.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              </div>
              <div class="card-body">
                <h5 class="card-title">Midweek service</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
              </div>
              <div class="card-footer">
                <a href="gallery_more.php" class="btn btn-primary">View pics</a>
              </div>
            </div>
          </div>
          
        </div>
        <!-- /.row -->

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