<?php

  $page = 'about';
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

        <h1 class="text-uppercase">About nubs</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <hr />


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