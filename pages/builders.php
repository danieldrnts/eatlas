<?php /* Template Name: Builders */

get_header();

?>

<div class="container-fluid p-0 m-0">
    <!-- NOTE mobile & desktop landing -->
    <div class="row mx-0 d-md-flex flex-md-row" style="height: 100vh;">
        <div class="col-sm-12 col-md-6 px-0 bg-b-blue-gradient">
            <div class="d-flex flex-column">
                <p class="d-md-none fs-1 blue-5 fw-bold text-center mt-3 airplane-svg">Become a</p>
                <p class="d-md-none fs-1 blue-5 fw-bold text-center  airplane-svg"> Builder</p>
                <div class="d-none d-md-flex flex-md-column  p-5 mt-5">
                    <p class="fw-bold fs-1 pt-1 text-start text-white custom-font-size ms-5">Be an eATLAS <br> Whoa!Guide</p>
                    <div class="d-flex flex-column  justify-content-start ms-5">
                        <p class="text-white fw-normal fs-2">
                            Start bulding mobile tours with no coding required.
                        </p>

                    </div>
                    <p class="text-white fw-bold fs-3 text-start ms-5">
                        We made it easy. <span class="fst-italic">You make it amazing</span>
                    </p>
                    <div class=" my-3">
                        <div class="btn  bg-b-pink mx-auto my-5 p-3" style="width: 50%;border-radius: 2.50rem; display: block">
                            <span class="fw-bold fs-2 text-white">Apply now!</span>
                        </div>
                        <div class="mx-auto my-5" style="width: fit-content;">
                            <p class="fw-lighter  fs-2">
                                <a class="text-white" href="#">Whoa!Guide Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 " style="background-image: url(<?php echo get_bloginfo('template_url') ?>/assets/images/builders-page/girl-laptop.jpg); background-image-repeat: no-repeat;  background-size: cover;">
            <!-- <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center mt-5">Become a Builder,</p> -->
            <!-- <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center">and share your <span class="fw-bold">Experiences</span> </p> -->
            <p class="d-md-none fs-4 blue-5 fw-light text-center my-3">Create amazing Experiences today!</p>
            <!-- <img class="hand-and-phone-svg mx-md-auto" src="<?php echo get_bloginfo('template_url') ?>/assets/images/hand-and-phone.svg" alt="home landing"> -->
        </div>
    </div>

    <!-- NOTE meet video -->
    <div class="row mx-0 " style="height: 100vh;">
        <!-- NOTE mobile video -->
        <div class="container d-md-none bg-blue-1">
            <div class="row col-12 py-4">
                <p class="fw-normal fs-1 text-center blue-5">Builders, <br> <span class="fw-bolder">Whoa!</span> the world </p>
                <p class="fw-lighter fs-5 text-center blue-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quidem ullam odit enim quas rerum libero rem </p>
            </div>
            <div class="row col-12 mx-auto">
                <video controls class="position-relative" style="height: 100%; width: auto" src="<?php echo get_bloginfo('template_url') ?>/assets/videos/meetVideo.mp4">
                    <i style="height: 3em;" class="bi bi-play-circle-fill position-absolute top-100 start-50"></i>
                </video>
            </div>
            <div class="row col-12 m-0 mt-3">
                <p class="fw-bold fs-1 m-0 text-center blue-5">Get eAtlas</p>
                <p class="fw-light fs-3 text-center blue-5 m-2">Available on very device</p>
                <div class="d-flex flex-row  justify-content-center mx-auto">
                    <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                    <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
                </div>
            </div>
        </div>

        <!-- NOTE desktop  video -->
        <div class="d-none d-md-block container bg-b-white">
            <div class="row h-100">
                <div class="col-6 ">
                    <div class="row h-100">
                        <div class="col-12">
                        </div>
                        <div class="col-12  d-flex flex-row justify-content-center">
                            <img class="img img-fluid rounded" src="<?php echo get_bloginfo('template_url') ?>/assets/images/builders-page/man-with-phone-large.png" alt="">
                        </div>
                        <div class="col-12">
                            <!-- <p class="d-none d-md-block text-white blue-5 fw-light fs-6 text-center mt-5"> With amazing mobile tours & experiences you create with eAtlas</p> -->
                            <!-- <p class="d-none d-md-block text-white blue-5 fw-light fs-6 text-center mt-5"> It's fast, fun and easy to share your passions with the world</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-6 px-5 d-flex flex-column text-dark justify-content-center">
                    <div>
                        <p class="d-none d-md-block fw-bold fs-1 text-start ">Lets Whoa! the world</p>
                    </div>
                    <p class="d-none d-md-block  fw-normal fs-6 text-start "> With amazing mobile tours & experiences you create with eAtlas</p>
                    <p class="d-none d-md-block  fw-normal fs-6 text-start "> It's fast, fun and easy to share your passions with the world</p>
                    <p class="d-none d-md-block  fw-bold fs-6 text-start "> Make tours. Make memories. Make money</p>
                    <div style="width: fit-content;border-radius:2rem" class="btn bg-b-pink mx-auto my-2"><span class="fw-bold fs-4 text-white px-5">
                            Start now
                        </span>
                    </div>
                    <p class="d-none d-md-block  fw-light fs-4 text-center mx-auto mt-4" style="border-bottom: 2px solid grey; padding-bottom: 10px; width: fit-content"> Sign up to learn more</p>
                </div>
            </div>
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

    <!-- NOTE apply builder form MOBILE & DESKTOP -->
    <div class="row m-0 p-0 mt-3 bg-b-yellow" style="min-height: 100vh;">
        <div class="col-12 col-md-6 d-md-flex flex-md-column justify-content-center text-dark">
            <p class="fw-bold fs-1 text-center">
                Start Whoa-ing the world
            </p>
            <p class="fw-normal fs-3 text-center">
                Apply now to start building tours that Whoa!
            </p>
            <div class="d-none d-md-block mx-auto px-5">
                <ul>
                    <li>
                        <div>
                            <img src="" alt="">
                            <p><span class="fw-bold fs-5">No coding required </span><br> <span class="fw-light fs-6">The eATLAS Platform is a digital suite of tool kits and business services.</span> </p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="" alt="">
                            <p><span class="fw-bold fs-5">Easily create eATLAS experiences</span><br> <span class="fw-light fs-6"> Create Guided Tours and Treasure Hunts accesible from customer's mobile phones. </span> </p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="" alt="">
                            <p><span class="fw-bold fs-5">No coding required </span><br> <span class="fw-light fs-6">Receive 70% of the fee each time it's purchased</span> </p>
                        </div>
                    </li>
                </ul>
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
    </div>

    <!-- NOTE Meet Builders MOBILE -->
    <div class="row m-0 p-0 bg-blue-2 mt-3 d-flex flex-column d-md-none" style="min-height: 100vh;">
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

    <!-- NOTE BRIAN NEW MEET BUILDERS-->
    <div class="row m-0 p-0 bg-blue-3" style="min-height: 100vh;">
        <div class="col-4 d-md-flex flex-md-column justify-content-center">
            <p class="fw-normal fs-1 blue-5 text-center align-middle">
                Meet some of our <span class="fw-bold">Builders</span>
            </p>
            <div class="d-none d-md-block blue-5 px-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, itaque tempora sit, voluptate, vitae magni inventore molestias amet dignissimos beatae consequatur omnis totam quisquam corporis blanditiis sequi exercitationem aliquid ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus mollitia, distinctio eveniet soluta sint voluptatum? Ab, veritatis quod amet aperiam cumque reiciendis. Porro accusamus alias adipisci placeat at a perspiciatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam explicabo corporis veritatis molestiae ut natus accusamus hic, doloribus, illum molestias sed, cumque officiis sequi ratione adipisci eaque fugiat excepturi odit!</p>

            </div>

        </div>
        <div class="col-8 ">
            <div class="row p-5">
                <div class="col-4">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
                <div class="col-4">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
                <div class="col-4">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-2">
                </div>
                <div class="col-4 ">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
                <div class="col-6 ">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- NOTE Get eAtlas desktop -->
    <div class="d-none d-md-flex row m-0 p-0 bg-blue-1 " style="height:90vh">
        <div class="col-6 h-100 d-flex flex-column justify-content-center">
            <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
            <p class="text-center blue-4 mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptate error exercitationem dolor aliquid, illum, sed, placeat et earum tenetur facilis voluptas aperiam recusandae! Magni vero provident vel fuga laboriosam.</p>
            <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
            <div class="d-flex flex-row  justify-content-center mx-auto mt-2">
                <img class="mx-5 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                <img class="mx-5 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
            </div>
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/world-map.svg" alt="">
        </div>
    </div>



</div>

<?php get_footer();  ?>