<?php /* Template Name: Custumers */

    get_header();

?>

<div class="container-fluid p-0 m-0">
    <!-- NOTE Landing mobile -->
    <div class="row mx-0 d-flex flex-column d-md-flex flex-md-row custom-bg-2-mobile" style="min-height: 90vh;">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="d-flex flex-column">
                <p class="d-md-none fs-1 blue-5 fw-normal text-center mt-3 airplane-svg">Live unique </p>
                <p class="d-md-none fs-1 blue-5 fw-bold text-center  airplane-svg">Experiences</p>
                <div class="d-none d-md-flex flex-md-column  mt-5">
                    <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
                    <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
                    <div class="d-flex flex-row  justify-content-center mx-auto">
                        <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                        <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 radius-md-custom position-relative flex-grow-1">
            <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center mt-5">Live unique Experiences</p>
            <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center">and share your <span class="fw-bold">Experiences</span> </p>
            <p class="d-md-none fs-4 blue-5 fw-light text-center my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id natus labore eos. Inventore eum veniam beatae ?</p>
            <img class="hand-and-phone-svg mx-md-auto position-absolute  bottom-0" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-landing-mobile.svg" alt="home landing">
        </div>
    </div>

    <!-- NOTE Download App Mobile -->
    <div class="row m-0 p-0 bg-blue-2 d-flex d-md-none flex-column" style="min-height: 100vh;">
        <div class="col-12  my-4">
            <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
            <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
            <div class="d-flex flex-row  justify-content-center mx-auto">
                <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
            </div>
        </div>
        <div class="mt-5 col-12 bg-blue-4 d-flex flex-column justify-content-center flex-grow-1 " style="border-top-left-radius: 50%;border-top-right-radius: 50%;">
            <p class="fw-normal fs-2 text-white  mt-5 pt-2 mx-5 text-center">Experiences all around the <span class="fw-bold">globe</span> </p>
            <img class="mx-2" style="height: 12em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/world-map.svg" alt="google-badge">
            <p class="fw-light my-1 fs-6 text-white my-3 mx-5 text-center"> Lorem ipsum dolor sit amet dolor sit</p>
        </div>
    </div>

    <!-- NOTE some Experiences MOBILE -->
    <div class="row m-0 p-0 bg-blue-2 mt-3 d-flex flex-column d-md-none" style="min-height: 100vh;">
        <div class="col-12 mt-3">
            <p class="fw-bold fs-1 blue-5 text-center ">
                Some of our<br> Experiences
            </p>
        </div>
        <div class="col-12 d-flex flex-column flex-grow-1  h-100 ">
            <div id="carouselExampleIndicators" class="carousel carousel-dark slide flex-grow-1" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php get_template_part('template-parts/builder', 'card'); ?>

                    </div>
                    <div class="carousel-item">
                        <?php get_template_part('template-parts/builder', 'card'); ?>

                    </div>
                    <div class="carousel-item">
                        <?php get_template_part('template-parts/builder', 'card'); ?>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- NOTE apply builder form MOBILE & DESKTOP -->
    <div class="row m-0 p-0 mt-3" style="min-height: 100vh;">
        <div class="col-12 col-md-6 d-md-flex flex-md-column justify-content-center">
            <p class="fw-bold fs-1 blue-5 text-center">
                Join to our news letter
            </p>
            <div class="d-none d-md-block mx-auto px-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, itaque tempora sit, voluptate, vitae magni inventore molestias amet dignissimos beatae consequatur omnis totam quisquam corporis blanditiis sequi exercitationem aliquid ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus mollitia, distinctio eveniet soluta sint voluptatum? Ab, veritatis quod amet aperiam cumque reiciendis. Porro accusamus alias adipisci placeat at a perspiciatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam explicabo corporis veritatis molestiae ut natus accusamus hic, doloribus, illum molestias sed, cumque officiis sequi ratione adipisci eaque fugiat excepturi odit!</p>
                <img class="mt-4" style="height: 12em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/details.svg" alt="details-badge">
            </div>
        </div>
        <div class="col-12 col-md-6 d-md-flex flex-md-column justify-content-center">
            <div id="contacto" class="custom-height mb-4 container-fluid" fluid>
                <div class="row">
                    <div class="col-12" class>
                        <div class="background d-flex flex-row justify-content-end">
                            <div class="container-2">
                                <div class="screen bg-blue-2">
                                    <div class="screen-body">
                                        <div class="screen-body-item left">
                                            <div class="app-title">
                                                <span class="mb-2 blue-5 text-center fw-bold">We'd love to hear from you</span>
                                                <span class="blue-5 my-2 under-line-blue" style="width: max-content !important;">Get in touch!</span>
                                            </div>
                                            <div class="app-contact">
                                                <!-- <img style="height:3em" src="/Media/Icons/gpt-logo.png" alt="form-logo" /> -->
                                            </div>
                                        </div>
                                        <div class="screen-body-item">
                                            <div class="app-form">
                                                <div class="app-form-group">
                                                    <input class="app-form-control" placeholder="Name" />
                                                </div>
                                                <div class="app-form-group">
                                                    <input class="app-form-control" placeholder="Email" />
                                                </div>
                                                <div class="app-form-group">
                                                    <input class="app-form-control" placeholder="City" />
                                                </div>
                                                <div class="app-form-group message">
                                                    <textarea type="textarea" class="app-form-control" placeholder="Message"></textarea>
                                                </div>
                                                <div class="app-form-group buttons">
                                                    <button class="btn bg-blue-4 rounded shadow">
                                                        <span class="fw-bold text-white fs-2">SEND</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php get_footer();  ?>

