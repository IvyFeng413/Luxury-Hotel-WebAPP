<?php

require('db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>royalhotel.com</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

   <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="homepage.php">Prince Al's Royal Hotel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="homepage.php">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              book
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="homepage.php">Book hotel rooms </a>
              <a class="dropdown-item" href="restaurant.php">book restaurants for dinner</a>
              <a class="dropdown-item" href="homepage.php">Book facilities</a>
              <a class="dropdown-item" href="homepage.php">Vew hotel facilities</a>
              <a class="dropdown-item" href="homepage.php">book a meeting hall</a>
            </div>
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              level
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="login.php">customer </a>
                <a class="dropdown-item" href="staff/stafflogin.php">staff </a>
                <a class="dropdown-item" href="managelogin.php">manager </a>
                 </div>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1556524683418&di=7ec6aa036fb0c05995d371b043ac43c9&imgtype=0&src=http%3A%2F%2Fr.bstatic.com%2Fimages%2Fhotel%2Fmax1280x900%2F374%2F37420553.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <p>The hotel environment</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1556555010699&di=df10cbdb3e8f8faf02db66f7a64ab11e&imgtype=0&src=http%3A%2F%2Fr.bstatic.com%2Fimages%2Fhotel%2Fmax1024x768%2F868%2F86870900.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <p>The hotel environment</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1556524683415&di=35acff189fb1cd3c29dd146f6c07b3b3&imgtype=0&src=http%3A%2F%2Fc4-q.mafengwo.net%2Fs9%2FM00%2F68%2FD2%2FwKgBs1hE9D6AFLAdAADZ3GG8urI00.jpeg')">
          <div class="carousel-caption d-none d-md-block">
            <p>The hotel environment</p>
          </div>
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
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to Prince Al's Royal Hotel</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Facilities and services</h4>
          <div class="card-body">
            <p class="card-text">1. high-speed internet access in public areas<br/>2. multilingual staff<br/>3. complimentary parking</p>
        </div>
            <div class="card-footer">
               <a href="#" class="btn btn-primary">Learn More</a>
          </div>
      </div>
        </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">In-room facilities</h4>
          <div class="card-body">
            <p class="card-text">1. room size up to 35 square meter rooms<br/>2. LCD flat screen TV with international satellite programs<br/>3. high-speed internet access</p>
          </div>
          <div class="card-footer">
               <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Recreation facilities</h4>
          <div class="card-body">
            <p class="card-text">1. indoor swimming pool<br/>2. fitness center<br/>3. squash room<br/>4. billiard room</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Reason to choose Prince Al's Royal Hotel</h2>
        <ul>
          <h4><li>comfort</li>
          <li>meritorious service</li>
            <li>beautiful environment</li>
              <li>well-equipped</li></h4>
        </ul>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1556554449640&di=4cf3eaef8887e216de1a0e0543edaf3d&imgtype=0&src=http%3A%2F%2Fr.bstatic.com%2Fimages%2Fhotel%2Fmax1024x768%2F352%2F35293120.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-2 text-center text-white">the hotel system by code captain</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


