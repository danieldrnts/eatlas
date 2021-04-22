<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<link rel="stylesheet" href="wp-content/themes/eatlas/assets/css/master.css">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<?php wp_head(); ?>
</head>

<body>
	<!-- tag para el main container -->
	<div class="container-fluid  mx-0 px-0" >

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="https://play-lh.googleusercontent.com/IlyM8GsSE1CNeivAVhEEyFvRy9L_XvRGANeRdZBHYPu_tqFf3SK3rMietjfpZkxPxHDh=s180-rw" alt="" width="30" height="24" class="d-inline-block align-text-top">
				eAtlas
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
			<!-- NOTE desktop MENU -->
			<ul class="d-none d-sm-flex navbar-nav mx-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Builders</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Consumers</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Blog</a>
				</li>
			</ul>
			<!-- NOTE MOBILE MENU -->
				<div class="container-fluid my-3 d-sm-none p-0 m-0 navbar-full-height d-flex flex-column justify-content-between">
					<ul class="navbar-nav  ps-4 pt-4">
						<li class="nav-item">
							<p class="h1 text-white font-weight-bold mt-2 mb-4 " >
								<span class="under-line">More to see</span>
							</p>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white h3 my-2" href="#">
								<span class="under-line">Home</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white h3 my-2" href="#">
							<span class="under-line">Builders</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white h3 my-2" href="#">
							<span class="under-line">consumers</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white h3 my-2" href="#">
							<span class="under-line">Blog</span>
							</a>
						</li>
					</ul>
					<!-- SOCIAL MEDIA -->
					<div >
						<p class="text-white fw-light fs-5 text-center" > Our social media</p>
						<ul class="d-flex flex-row justify-content-center ps-0" style="list-style-type: none">
							<li class="mx-2">
								<a href="#">
									<i class="bi bi-youtube text-white"  style="font-size: 1.5rem;"></i>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<i class="bi bi-twitter text-white" style="font-size: 1.5rem;"></i>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<i class="bi bi-instagram text-white" style="font-size: 1.5rem;"></i>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<i class="bi bi-facebook text-white" style="font-size: 1.5rem;"></i>
								</a>
							</li>
						</ul>
						<p class="text-center text-white fs-5 mt-4"> <span><i class="bi bi-telephone-fill text-white" style="font-size: 1.2rem;"></i></span> +99 (99) 99-99-99 </p>
					</div>	
				</div>
				<span class="d-none d-sm-flex navbar-text ">Navbar text with an inline element</span>
			</div>
		</div>
	</nav>

