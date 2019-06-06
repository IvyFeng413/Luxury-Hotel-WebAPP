<?php

require('db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>back-stage management </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1">back-stage management </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">message notification</a>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="staffhomepage.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>level</span>
        </a>
           <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="https://2201613130334.instantcloud.cn/meeting/homepage.php">customer</a>
          <a class="dropdown-item" href="staffhomepage.php">staff</a>
          <a class="dropdown-item" href="managerhomepage.php">manager</a>
        </li>
       
           
          <li class="nav-item">
        <a class="nav-link" href="guestinformation.php">
          <i class="fas fa-fw fa-table"></i>
          <span>guest information</span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="bill.php">
          <i class="fas fa-fw fa-table"></i>
          <span>bill</span></a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="work%20time.php">
          <i class="fas fa-fw fa-table"></i>
          <span>work time</span></a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="entertainment.php">
          <i class="fas fa-fw fa-table"></i>
          <span>entertainment</span></a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="service.php">
          <i class="fas fa-fw fa-table"></i>
          <span>service</span></a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>order</span>
        </a>
           <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         <a class="dropdown-item" href="guest.php">guest order</a>
          <a class="dropdown-item" href="orderroom.php"> order room</a>
          <a class="dropdown-item" href="">room service</a>
          <a class="dropdown-item" href="restaurant.php">order restaurant</a>
          <a class="dropdown-item" href="meetinghall.php">order meeting hall</a>   
                   <li class="nav-item">
        <a class="nav-link" href="restaurant.php">
          <i class="fas fa-fw fa-table"></i>
          <span>restaurant</span></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="room.php">
          <i class="fas fa-fw fa-table"></i>
          <span>room information</span></a>
        </li>
         <li class="nav-item">
        <a class="nav-link" href="vip.php">
          <i class="fas fa-fw fa-table"></i>
          <span>vip information</span></a>
        </li>
               
           <li class="nav-item">
        <a class="nav-link" href="stafflogin.php">
          <i class="fas fa-fw fa-table"></i>
          <span>login</span></a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-table"></i>
          <span>logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">



