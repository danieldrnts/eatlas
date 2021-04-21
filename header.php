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
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body>
	<!-- tag para el main container -->
	<div class="container-fluid bg-warning mx-0 px-0" >

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
			<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
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
			<span class="navbar-text">
				Navbar text with an inline element
			</span>
			</div>
		</div>
	</nav>

