<?php
  require "db_connect.php";
  $select = "SELECT * FROM menu";
  $menu_list =mysqli_query($db_connect, $select);

  $select_logo = "SELECT * FROM logos";
  $logos =mysqli_query($db_connect, $select_logo);
  $logos_assoc =mysqli_fetch_assoc($logos);

  
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="portfolio,creative,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themeturn.com">
  <link rel="shortcut icon" href="/dash/images/favicon.png" type="image/x-icon">

  <title>Ratsaan| Creative portfolio template</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="/dash/forntend_asset/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Themeify Icon Css -->
  <link rel="stylesheet" href="/dash/forntend_asset/plugins/themify/css/themify-icons.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="/dash/forntend_asset/plugins/animate-css/animate.css">
  <link rel="stylesheet" href="/dash/forntend_asset/plugins/aos/aos.css">
  <!-- owl carousel -->
  <link rel="stylesheet" href="/dash/forntend_asset/plugins/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/dash/forntend_asset/plugins/owl/assets/owl.theme.default.min.css" >
  <!-- Slick slider CSS -->
  <link rel="stylesheet" href="/dash/forntend_asset/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="/dash/forntend_asset/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="/dash/forntend_asset/css/style.css">

</head>

<body class="portfolio" id="top">


<!-- Navigation start -->
<!-- Header Start --> 

<nav class="navbar navbar-expand-lg bg-transprent py-4 fixed-top navigation" id="navbar">
	<div class="container">
	  <a class="navbar-brand" href="index.html">
	  	<img width="120" src="/dash/uploads/logo/<?=$logos_assoc["logo"]?>" alt="main_logo">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-view-list"></span>
	  </button>
  
	  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto"> 
			   <?php foreach($menu_list as $menu){?>
        <li class="nav-item">
            <a class="nav-link"" href="<?=$menu['menu_link']?>"><?=$menu['menu_name']?></a>
          </li>
        <?php }?>
			</ul>
	  </div>
	</div>
</nav>


    

<!-- Navigation End -->

<!-- <li class="nav-item"><a class="nav-link smoth-scroll" href="#skillbar">Expertise</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#service">Services</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#portfolio">Portfolio</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#testimonial">Testimonial</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#contact">Contact</a></li> -->