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
	<!-- <link rel="stylesheet" href="wp-content/themes/eatlas/assets/css/master.css"> -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<?php wp_head(); ?>
</head>

<body>
	<!-- tag para el main container -->
	<div class="container-fluid  mx-0 px-0">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid bg-blue-3 ">
				<a class="navbar-brand" href="#">
					<img src="https://play-lh.googleusercontent.com/IlyM8GsSE1CNeivAVhEEyFvRy9L_XvRGANeRdZBHYPu_tqFf3SK3rMietjfpZkxPxHDh=s180-rw" alt="" width="30" height="24" class="d-inline-block align-text-top">
					eAtlas
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarText">
					<!-- NOTE desktop MENU -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'menu_class' => 'd-none d-sm-flex navbar-nav mx-auto mb-2 mb-lg-0',
							'container_class' => 'container d-flex flex-row justify-content-center bg-warning ',
						)
					);

					// Mobile nav
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'menu_class' => 'navbar-nav  ps-4 pt-4',
							'container_class' => 'container-fluid my-3 d-sm-none p-0 m-0 navbar-full-height d-flex flex-column justify-content-between mobile-child-custom',
						)
					);

					?>
			
					<!-- MOBILE SOCIAL ICONS -->
					<div class="d-sm-none navbar-text  me-5">
					<p class="text-white fw-light fs-5 text-center"> Our social media</p>

						<ul class="d-flex flex-row justify-content-center ps-0" style="list-style-type: none">
							<li class="mx-2">
								<a href="#">
									<i class="bi bi-youtube blue-5" style="font-size: 1.5rem;"></i>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<i class="bi bi-twitter blue-5" style="font-size: 1.5rem;"></i>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<i class="bi bi-instagram blue-5" style="font-size: 1.5rem;"></i>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<i class="bi bi-facebook blue-5" style="font-size: 1.5rem;"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="d-none d-sm-flex navbar-text  me-5">
					<ul class="d-flex flex-row justify-content-center ps-0" style="list-style-type: none">
						<li class="mx-2">
							<a href="#">
								<i class="bi bi-youtube blue-5" style="font-size: 1.5rem;"></i>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<i class="bi bi-twitter blue-5" style="font-size: 1.5rem;"></i>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<i class="bi bi-instagram blue-5" style="font-size: 1.5rem;"></i>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<i class="bi bi-facebook blue-5" style="font-size: 1.5rem;"></i>
							</a>
						</li>
					</ul>
				</div>

			</div>
		</nav>