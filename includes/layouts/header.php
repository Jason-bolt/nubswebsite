<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="National Union of Baptist Students - UCC">
  <meta name="author" content="NUBS-UCC MEDIA TEAM">
  <link rel="icon" href="img/website_icon.png">

  <title>NUBS-UCC</title>

  <!-- Used for the gallery_more.php page -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
   
  <!-- My custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/customcss.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>





<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <!-- <img src="https://res.cloudinary.com/mhmd/image/upload/v1557368579/logo_iqjuay.png" width="45" alt="" class="d-inline-block align-middle mr-2"> -->
      <img src="img/nubs_logo.png" width="75" alt="nubs logo" class="d-inline-block align-middle mr-2">
      <span class="text-uppercase font-weight-bold">NUBS UCC</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <?php
          if ($page == 'home') {
        ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="dropdown nav-item">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">About</span> <span class="caret"></span></a>
            <ul class="dropdown-menu pl-1 bg-primary" style="border: none;">
                <li><a class="nav-link" href="about_nubs.php">NUBS & NUBS-UCC</a></li>
                <li><a class="nav-link" href="nubs_anthem.php">NUBS ANTHEM</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">News/Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="departments.php">Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="executives.php">Executives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        <?php
          }else if ($page == 'about') {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="dropdown nav-item active">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
              <span class="nav-label">About</span> 
              <span class="caret"></span>
              <span class="sr-only">(current)</span>
            </a>
            <ul class="dropdown-menu pl-1 bg-primary" style="border: none;">
                <li><a class="nav-link" href="about_nubs.php">NUBS & NUBS-UCC</a></li>
                <li><a class="nav-link" href="nubs_anthem.php">NUBS ANTHEM</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">News/Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="departments.php">Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="executives.php">Executives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        <?php
          }else if ($page == 'events') {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
              <span class="nav-label">About</span> 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pl-1 bg-primary" style="border: none;">
                <li><a class="nav-link" href="about_nubs.php">NUBS & NUBS-UCC</a></li>
                <li><a class="nav-link" href="nubs_anthem.php">NUBS ANTHEM</a></li>
            </ul>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="events.php">News/Events
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="departments.php">Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="executives.php">Executives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        <?php
          }else if ($page == 'gallery') {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
              <span class="nav-label">About</span> 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pl-1 bg-primary" style="border: none;">
                <li><a class="nav-link" href="about_nubs.php">NUBS & NUBS-UCC</a></li>
                <li><a class="nav-link" href="nubs_anthem.php">NUBS ANTHEM</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">News/Events</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="gallery.php">Gallery
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="departments.php">Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="executives.php">Executives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        <?php
          }else if ($page == 'departments') {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
              <span class="nav-label">About</span> 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pl-1 bg-primary" style="border: none;">
                <li><a class="nav-link" href="about_nubs.php">NUBS & NUBS-UCC</a></li>
                <li><a class="nav-link" href="nubs_anthem.php">NUBS ANTHEM</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">News/Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="departments.php">Departments
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="executives.php">Executives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        <?php
          }else if ($page == 'executives') {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
              <span class="nav-label">About</span> 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pl-1 bg-primary" style="border: none;">
                <li><a class="nav-link" href="about_nubs.php">NUBS & NUBS-UCC</a></li>
                <li><a class="nav-link" href="nubs_anthem.php">NUBS ANTHEM</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">News/Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="departments.php">Departments</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="executives.php">Executives
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        <?php
          }else if ($page == 'contact') {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
              <span class="nav-label">About</span> 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pl-1 bg-primary" style="border: none;">
                <li><a class="nav-link" href="about_nubs.php">NUBS & NUBS-UCC</a></li>
                <li><a class="nav-link" href="nubs_anthem.php">NUBS ANTHEM</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">News/Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="departments.php">Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="executives.php">Executives</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact Us
              <span class="sr-only">(current)</span>
            </a>
          </li>
        <?php
          }else{
        ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
              <span class="nav-label">About</span> 
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pl-1 bg-primary" style="border: none;">
                <li><a class="nav-link" href="about_nubs.php">NUBS & NUBS-UCC</a></li>
                <li><a class="nav-link" href="nubs_anthem.php">NUBS ANTHEM</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php">News/Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="departments.php">Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="executives.php">Executives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>