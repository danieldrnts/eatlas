<?php /* Template Name: Blog */

get_header();

?>

<div class="container-fluid p-0 m-0">
    <!-- NOTE Landing mobile -->
    <div class="row mx-0 d-flex flex-column d-md-flex flex-md-row custom-bg-2-mobile d-md-none" style="min-height: 90vh;">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="d-flex flex-column">
                <p class="d-md-none fs-1 blue-5 fw-normal text-center m-0 mt-3 airplane-svg ">This blog </p>
                <p class="d-md-none fs-1 blue-5 fw-bold text-center  airplane-svg m-0">is for you</p>
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
            <p class="d-md-none fs-4 blue-5 fw-light text-center my-3">Our Blog tells some of the most amazing stories</p>
            <img class="hand-and-phone-svg mx-md-auto position-absolute  bottom-0" src="<?php echo get_bloginfo('template_url') ?>/assets/images/blog-landing-mobile.svg" alt="home landing">
        </div>
    </div>

    <!-- NOTE Landing desktop -->
    <div class="row mx-0 d-flex flex-column d-none d-md-flex flex-md-row custom-bg-2-mobile " style="min-height: 90vh;">
        <div class="col-12 bg-blue-1">
            <p class=" fs-1 blue-5 fw-normal text-center m-0 mt-1  ">Read about our <br> <span class="fw-bolder">Experiences</span> </p>
            <p class=" fs-3 blue-5 fw-light text-center m-0 mt-3  ">Our Blog tells some of the most <br> <span class="fw-bold">amazing stories</span> </p>
        </div>
        <div class="col-12 bg-blue-1">
            <div class="row bg-blue-5">
                <div class="col-6 bg-blue-1">
                    <img class="mx-2" style="height: 13em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers.svg" alt="google-badge">
                </div>
                <div class="col-6 custom-blog-landing-border">
                    <div class="d-none d-md-flex flex-md-column">
                        <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
                        <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
                        <div class="d-flex flex-row  justify-content-center mx-auto">
                            <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
                            <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-sm-12 col-md-6 px-0">
            <div class="d-flex flex-column">
                <p class="d-md-none fs-1 blue-5 fw-normal text-center m-0 mt-3 airplane-svg ">This blog </p>
                <p class="d-md-none fs-1 blue-5 fw-bold text-center  airplane-svg m-0">is for you</p>
                <div class="d-none d-md-flex flex-md-column  mt-5">
                    <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
                    <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
                    <div class="d-flex flex-row  justify-content-center mx-auto">
                        <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 radius-md-custom position-relative flex-grow-1">
            <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center mt-5">Live unique Experiences</p>
            <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center">and share your <span class="fw-bold">Experiences</span> </p>
            <p class="d-md-none fs-4 blue-5 fw-light text-center my-3">Our Blog tells some of the most amazing stories</p>
            <img class="hand-and-phone-svg mx-md-auto position-absolute  bottom-0" src="<?php echo get_bloginfo('template_url') ?>/assets/images/blog-landing-mobile.svg" alt="home landing">
        </div> -->
    </div>

    <!-- NOTE This blog is for you DESKTOP -->
    <div class="row mx-0 d-flex flex-column d-none d-md-flex flex-md-row-reverse " style="min-height: 90vh;">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="d-flex flex-column">
                <p class="d-md-none fs-1 blue-5 fw-normal text-center m-0 mt-3 airplane-svg ">This blog </p>
                <p class="d-md-none fs-1 blue-5 fw-bold text-center  airplane-svg m-0">is for you</p>
                <div class="d-none d-md-flex flex-md-column  mt-5">
                    <p class="fw-bold fs-5 blue-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam repellendus maiores odio! Itaque rem dolorem, facilis adipisci molestiae atque</p>
                    <img class="mx-2" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/airplane.svg" alt="google-badge">
                    <p class="fw-normal fs-6 blue-4 my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, aliquam sit officia delectus explicabo nemo repellat natus labore harum beatae consequuntur voluptates culpa, error quam numquam, provident magnam repellendus sunt?</p>
                    <p class="fw-normal fs-6 blue-4 my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, aliquam sit officia delectus explicabo nemo repellat natus labore harum beatae consequuntur voluptates culpa, error quam numquam, provident magnam repellendus sunt?</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 position-relative flex-grow-1">
            <p class="d-none d-md-block blue-5 fw-normal fs-1 text-center mt-5">Live unique Experiences</p>
            <p class="d-none d-md-block blue-5 fw-bold fs-1 text-center">and share your <span class="fw-bold">Experiences</span> </p>
            <p class="d-md-none fs-4 blue-5 fw-light text-center my-3">Our Blog tells some of the most amazing stories</p>
            <img class="hand-and-phone-svg mx-md-auto position-absolute  bottom-0" src="<?php echo get_bloginfo('template_url') ?>/assets/images/blog-landing-mobile.svg" alt="home landing">
        </div>
    </div>

    <!-- NOTE SOME REVIEWS FROM OUR CONSUMERS desktop  -->
    <div class="row m-0 p-0 bg-blue-3 d-none d-md-flex" style="min-height: 100vh;">
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
                <div class="col-4" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
                <div class="col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
                <div class="col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
                <div class="col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
                </div>
                <div class="col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php get_template_part('template-parts/builder', 'card'); ?>
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
                    <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <?php get_template_part('template-parts/builder', 'card'); ?>
                    </div>
                    <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <?php get_template_part('template-parts/builder', 'card'); ?>
                    </div>
                    <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
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

    <!-- NOTE Experience Info Desktop -->
    <div class="row m-0 p-0 d-none d-md-flex">
        <div class="col-12">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content ">
                        <!-- <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div> -->
                        <div class="modal-body  p-0" style="width: auto;">
                            <div class="container-fluid">
                                <!-- NOTE MOBILE info -->
                                <div class="row">
                                    <div class="col-12 col-md-6 my-3">
                                        <div class="row  p-5">
                                            <p class="fw-bold fs-4 blue-5 d-md-none" data-bs-dismiss="modal" style="cursor: pointer;">Return to the Blog</p>
                                            <p class="fw-bold fs-2 blue-5 under-line-blue d-none d-md-block ">Experience Name</p>
                                            <p class="fw-bold fs-5 blue-5 d-none d-md-block">City Name</p>
                                            <div class="col-12 experience-info-map-custom-size my-4" >
                                                <?php get_template_part('template-parts/map', 'card'); ?>
                                            </div>
                                            <p class="fw-light my-3 fs-6 blue-5 d-none d-md-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, dignissimos nostrum quisquam enim rem consequuntur fugit odit, culpa pariatur aliquam tempore! Expedita ipsum voluptate atque magni suscipit, voluptatibus quam sapiente! <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, quod ipsa tempora facilis vero odio, sunt voluptas tempore perferendis ex inventore illum hic distinctio libero fugit dolorum eligendi, dolor est?</p>
                                            <p class="fw-light my-3 fs-6 blue-5 d-none d-md-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, dignissimos nostrum quisquam enim rem consequuntur fugit odit, culpa pariatur aliquam tempore! Expedita ipsum voluptate atque magni suscipit, voluptatibus quam sapiente!</p>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 bg-blue-3 d-flex flex-column justify-content-center border-radius-custom ">
                                        <div>
                                                <p class="fw-bold fs-2 text-end me-3 text-white" data-bs-dismiss="modal">Return to the Blog</p>
                                            <p class="fw-bold fs-2 text-white d-none d-md-block text-center">Builder Name</p>
                                            <div class="">
                                                <?php get_template_part('template-parts/builder', 'card'); ?>
                                            </div>
                                            <p class="fw-normal my-3 fs-6 blue-5 d-none d-md-block text-center mx-5 mt-3 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, dignissimos nostrum quisquam enim rem consequuntur fugit odit, culpa pariatur aliquam tempore! Expedita ipsum voluptate atque magni suscipit, voluptatibus quam sapiente!</p>
                                            <p class="fw-normal my-3 fs-6 blue-5 d-none d-md-block text-center mx-5 mt-3 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, dignissimos nostrum quisquam enim rem consequuntur fugit odit, culpa pariatur aliquam tempore! Expedita ipsum voluptate atque magni suscipit, voluptatibus quam sapiente!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> -->
                    </div>
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