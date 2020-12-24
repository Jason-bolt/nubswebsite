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

        <h1 class="text-uppercase">nubs anthem</h1>

        <div class="my-4">
          <p class="my-1">We are the NUBS of Ghana</p>
          <p class="my-1">Established on Christs’ foundation</p>
          <p class="my-1">Upon this firm foundation</p>
          <p class="my-1">We present each man, perfect in Christ</p>
          <div class="py-3">
            <p class="my-1"><strong>Chorus</strong></p>
            <p class="my-1"><em>For we are empowered for action, action, action</em></p>
            <p class="my-1"><em>For we are empowered for action, action, action for the Lord</em></p>
          </div>
          <p class="my-1">We the NUBS of Ghana,</p>
          <p class="my-1">We believe in the trinity</p>
          <p class="my-1">Empowered by the Holy Ghost</p>
          <p class="my-1">We the NUBS of Ghana</p>
          <p class="my-1">We believe we are destined for greatness</p>
          <p class="my-1">In God and for God’s mission</p>
          <p class="my-1">We believe we can, yes, we can</p>
        </div>

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