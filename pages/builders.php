<?php /* Template Name: Builders */

get_header();

?>

<div class="container-fluid p-0 m-0">
    <!-- NOTE mobile & desktop landing -->
    <div class="row mx-0 d-md-flex flex-md-row">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="d-flex flex-column">
                <p class="d-md-none fs-1 blue-5 fw-bold text-center mt-3 airplane-svg">Become a</p>
                <p class="d-md-none fs-1 blue-5 fw-bold text-center  airplane-svg"> Builder</p>
                <div class="d-none d-md-flex flex-md-column  mt-5">
                    <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
                    <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
                    <div class="d-flex flex-row  justify-content-center mx-auto">
                        <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                        <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
                    </div>
                </div>
                <img class="mt-md-5" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/airplane.svg" ?>
            </div>

        </div>
        <div class="col-sm-12 col-md-6 radius-md-custom">
            <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center mt-5">Become a Builder,</p>
            <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center">and share your <span class="fw-bold">Experiences</span> </p>
            <p class="d-md-none fs-4 blue-5 fw-light text-center my-3">Create amazing Experiences today!</p>
            <img class="hand-and-phone-svg mx-md-auto" src="<?php echo get_bloginfo('template_url') ?>/assets/images/hand-and-phone.svg" alt="home landing">
        </div>
    </div>

    <!-- NOTE meet video -->
    <div class="row mx-0 bg-blue-1" style="height: 100vh;">
        <!-- NOTE mobile video -->
        <div class="container d-md-none">
            <div class="row col-12 py-4">
                <p class="fw-normal fs-1 text-center blue-5">Builders, <br> <span class="fw-bolder">Whoa!</span> the world </p>
                <p class="fw-lighter fs-5 text-center blue-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quidem ullam odit enim quas rerum libero rem </p>
            </div>
            <div class="row col-12 mx-auto">
                <video controls class="position-relative" style="height: 100%; width: auto" src="<?php echo get_bloginfo('template_url') ?>/assets/videos/meetVideo.mp4">
                    <i style="height: 3em;" class="bi bi-play-circle-fill position-absolute top-100 start-50"></i>
                </video>
            </div>
            <div class="row col-12 m-0 mt-4">
                <p class="fw-normal fs-1 py-2 text-center blue-5">Get eAtlas</p>
                <div class="d-flex flex-row  justify-content-center mx-auto">
                    <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                    <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
                </div>
            </div>
        </div>

        <!-- NOTE desktop  video -->
        <div class="d-none d-md-block container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center mt-5">Become a Builder,</p>
                        </div>
                        <div class="col-12 bg-blue-5">
                            <video controls style="height: 3em" src="<?php echo get_bloginfo('template_url') ?>/assets/videos/meetVideo.mp4">
                            </video>
                        </div>
                        <div class="col-12">
                            <p class="d-none d-md-block text-white blue-5 fw-light fs-6 text-center mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur modi laudantium provident error, corrupti </p>
                        </div>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>

    </div>

    <!-- NOTE Be a builder -->
    <div class="col-sm-12 px-0" style="min-height: 100vh;">
        <div class="d-flex flex-column">
            <p class="fs-1 blue-5 fw-bold ms-5 text-start mt-3 airplane-svg">Be a Builder <br>
                <span class="fw-light">share and create</span>
            </p>
            <!-- <img style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/airplane.svg" ?> -->
        </div>
        <p style="font-weight: lighter;" class="fs-6 blue-5 text-center my-3 mx-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad iusto perferendis in iure repellat alias non minima sunt perspiciatis </p>
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/guy-with-baseball.svg" alt="home landing ">
    </div>

    <!-- NOTE Download App -->
    <div class="row m-0 p-0 bg-blue-2 d-flex flex-column" style="min-height: 100vh;">
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

    <!-- NOTE apply builder form mobile -->
    <div class="row m-0 p-0 mt-3" style="min-height: 100vh;">
        <div class="col-12">
            <p class="fw-bold fs-3 blue-5 text-center">
                Become a Builder today!
            </p>
        </div>
        <div id="contacto" class="custom-height mb-4 container-fluid" fluid>
            <div class="row">
                <div class="col-12" class>
                    <div class="background d-flex flex-row justify-content-end">
                        <div class="container-2">
                            <div class="screen bg-blue-2">
                                <div class="screen-body">
                                    <div class="screen-body-item left">
                                        <div class="app-title">
                                            <span class="mb-2 blue-5 text-center fw-bold">Apply to become a Builder</span>
                                            <span class="blue-5 my-2 under-line-blue" style="width: max-content !important;">Join today!</span>
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

    <!-- NOTE Meet Builders  -->
    <div class="row m-0 p-0 bg-blue-2 mt-3 d-flex flex-column" style="min-height: 100vh;">
        <div class="col-12 mt-3">
            <p class="fw-bold fs-1 blue-5 text-center ">
                Meet some of <br> our Builders
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



</div>

<?php get_footer();  ?>