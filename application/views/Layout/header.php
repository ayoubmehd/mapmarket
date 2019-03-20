<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/magnific-popup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.css">
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/main.css">
	
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
	<style>
	
	.my-custom-alert {
		position:fixed;
		top:100px;
		right:20px;
	}
	.header_area.sticky-header {
		z-index:9999;
	}
		
	.nice-select {
		float: none;
	}

	.add-img {
		font-size: 150px;
	}
	.custom-file {
		height:auto;
	}
	.custom-file-input {
		position: absolute;
		height:100%;
		cursor: pointer;
	}
	.mapBox {
		margin-bottom:0;
		margin-top:0;
	}
	.hover:hover {
		color:#FFF;
		background-color:#333;
		transition: color 1s ease-in;
	}
	</style>
</head>

<body>

<!-- Start Header Area -->
<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets')?>/img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="<?php echo base_url() ?>">Home</a></li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							   aria-expanded="false">Shop</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
								<li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
								<li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
								<li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
								<li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
							</ul>
						</li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							   aria-expanded="false">Pages</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
								<li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
								<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item submenu dropdown">
							<button class="search dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
							   aria-expanded="false"><span class="fa fa-user-circle" id=""></span></button>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
								<li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
								<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
							</ul>
						</li>
						<li class="nav-item"><a href="#" class="cart"><span class="fa fa-heart"></span></a></li>
						<li class="nav-item">
							<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="search_input" id="search_input_box">
		<div class="container">
			<form class="d-flex justify-content-between">
				<input type="text" class="form-control" id="search_input" placeholder="Search Here">
				<button type="submit" class="btn"></button>
				<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
			</form>
		</div>
	</div>
</header>
<!-- End Header Area -->
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Checkout</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="single-product.html">Checkout</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
