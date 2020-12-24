<?php

  $page = 'dc';
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

        <!-- Personality of the week -->
        <h2 class="my-4">Personality of the week</h2>

        <div class="col-lg-8 col-md-6 mb-4">
          <div class="card my-4">
            <div class="card-body">
              <div class="row">
                <img class="card-img-top" src="http://placehold.it/750x750">
              </div>
              <div class="py-3">
                <h4 class="m-0 pt-2">Name: </h4>John Doe
                <h4 class="m-0 pt-2">Level: </h4>300
                <h4 class="m-0 pt-2">Program: </h4>B.Sc. Program
                <h4 class="m-0 pt-2">Wing: </h4> Something
              </div>
            </div>
          </div>
        </div>
            
        <!-- /.Personality of the week -->
        
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
