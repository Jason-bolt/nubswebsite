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

        <!-- Gallery pics -->

        <div class="photo-gallery mt-5">
          <div class="container">
              <!-- <div class="intro">
                  <h2 class="text-center">Lightbox Gallery</h2>
                  <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
              </div> -->
              
              <div class="row photos">
                  <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="img/img1.jpg" data-lightbox="photos">
                      <img class="img-fluid" src="img/img1.jpg">
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="img/img2.jpg" data-lightbox="photos">
                      <img class="img-fluid" src="img/img2.jpg">
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="img/img3.jpg" data-lightbox="photos">
                      <img class="img-fluid" src="img/img3.jpg">
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="img/img2.jpg" data-lightbox="photos">
                      <img class="img-fluid" src="img/img2.jpg">
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="img/img1.jpg" data-lightbox="photos">
                      <img class="img-fluid" src="img/img1.jpg">
                    </a>
                  </div>
              </div>
          </div>
        </div>

        <!-- /.Gallery pics -->
        
      </div>

      <!-- Sidebar Widgets Column -->
      <?php include('includes/layouts/side_bar.php'); ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<!-- Footer -->
<?php
  include('includes/layouts/footer.php');
?>
