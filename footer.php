<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */
?>

<!-- NOTE footer -->

<!-- NOTE mobile -->
<div class="bg-secondary d-flex flex-column justify-content-between container-fluid p-0 m-0 footer-mobile-height">
	<div class="row d-md-flex flex-md-row m-0">
		<!-- LOGO -->
		<div class="col-12 col-md-3 d-flex flex-row justify-content-center">
			<img class="img-fluid footer-logo-custom-size my-5" src="<?php echo get_bloginfo('template_url') ?>/assets/images/footer/logo-with-text.png" alt="">
		</div>
		<!-- SOCIAL -->
		<div class="col-12 col-md-6">
			<div class="row d-md-flex text-white m-md-5">
				<div class="col-12 col-md-8">
					<ul style="list-style-type: none">
						<li class="my-2"><span class="fw-light fs-5 ">
								At eATLAS, we're out to Whoa the World <br> with unforgettable mobile tours and <br> experiences custom-designed by our <br> eATLAS Whoa!Guides.
							</span></li>
						<li class="my-2">
							<span class="fw-bold fs-5">
								We made it easy. You make it amazing.
							</span>
						</li>
					</ul>
				</div>
				<div class="col-12 col-md-4 my-5 py-5">
					<ul style="list-style-type: none;">
						<li class="mt-2">
							<a href="#" style="text-decoration: none;">
								<span class="fw-bold fs-5 text-white ">
									Take a Tour
							</a>
							</span>
						</li>
						<li class="mt-2">
							<a href="#" style="text-decoration: none;">
								<span class="fw-bold fs-5 text-white">
									Whoa! Guide
							</a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- DIRECTION -->
		<div class="col-12 col-md-3 py-5 py-md-0 my-md-auto ">
			<p class="text-white fw-normal fs-5 text-center">872 s Milwaukee Avenue #139 <br> Libertyville IL 60048</p>

			<div class="text-white text-center">
				<p class="fw-normal fs-5 ">
					<a class="text-white" style="text-decoration: none;" href="tel:2242027536">224-202-7536</a>
				</p>
			</div>
			<ul class="d-flex flex-row justify-content-center ps-0" style="list-style-type: none">
				<li class="mx-2">
					<a href="#">
						<i class="bi bi-instagram text-white" style="font-size: 2rem;"></i>
					</a>
				</li>
				<li class="mx-2">
					<a href="#">
						<i class="bi bi-facebook text-white" style="font-size: 2rem;"></i>
					</a>
				</li>
			</ul>
		</div>

	</div>
	<div class="row bg-light m-0 p-0">
		<div class="col-12 d-flex flex-column justify-content-center">
			<p class="fw-light fs-5 m-0">
				&copy; <?php echo date('Y'); ?>. Inciteful Games Holdings LLC - All Rights Reserved
			</p>
		</div>
	</div>
</div>


<!-- NOTE footer -->


</div>
</div>
<!-- end tag para el main container -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
<!-- Bootstrap JavaScript -->
<?php wp_footer(); ?>

</html>