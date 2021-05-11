<?php /* Template Name: Custumers */

get_header();

?>

<div class="container-fluid p-0 m-0">
    <!-- NOTE Landing mobile -->
    <div class="row mx-0 d-flex flex-column d-md-flex flex-md-row bg-blue-2 custom-bg-2-mobile" style="min-height: 90vh;">
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
        <div class="col-sm-12 col-md-6  position-relative flex-grow-1">
            <p class="d-none d-md-block text-white blue-5 fw-bold fs-1 text-center mt-5">Live unique Experiences</p>
            <p class="d-md-none text-white blue-5 fw-bold fs-1 text-center">and share your <span class="fw-bold">Experiences</span> </p>
            <p class="d-none d-md-block  blue-5 fw-normal fs-4 text-center">Explore the world with the Experiences our Builders have for you</p>
            <p class="d-md-none fs-4 blue-5 fw-light text-center my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id natus labore eos. Inventore eum veniam beatae ?</p>
            <img class="hand-and-phone-svg mx-md-auto position-absolute  bottom-0 d-md-none" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-landing-mobile.svg" alt="home landing">
        </div>
        <div class="col-md-12 d-flex flex-row justify-content-center bg-light">
            <img class="hand-and-phone-svg mx-md-auto position-absolute  bottom-0 d-none d-md-block" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-landing.svg" alt="home landing">
        </div>
    </div>


    <!-- NOTE Download App Mobile -->
    <div class="row m-0 p-0 bg-blue-2 d-flex  flex-column flex-md-row-reverse" style="min-height: 100vh;">
        <div class="col-12 col-md-6 my-4 d-md-flex flex-md-column justify-content-center">
            <p class="fw-bold fs-1 pt-1 text-center blue-5 d-md-none">Get eAtlas</p>
            <p class="fw-bold fs-1 pt-1 text-center blue-5 d-none d-md-block my-3">Are you up to Experience?</p>
            <p class="fw-normal fs-3 pt-1 text-center blue-5 d-none d-md-block my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, qui distinctio! Reprehenderit consequuntur officiis </p>
            <img class="mx-auto my-3" style="height: 6em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/airplane.svg" alt="google-badge">
            <p class="fw-normal fs-5 pt-1 text-center blue-5 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, qui distinctio! Reprehenderit consequuntur officiis Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eos dignissimos maxime dolores quia! Quia ipsum ducimus voluptates nemo, vel maxime a alias placeat temporibus ea odit omnis atque nam!</p>
            <p class="fw-light fs-4 text-center blue-5 my-4  d-md-none">Available on every device</p>
            <div class="d-flex flex-row  justify-content-center mx-auto  d-md-none">
                <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
            </div>
        </div>
        <div class="mt-5 mt-md-0 col-12 col-md-6 bg-blue-4 d-flex flex-column justify-content-center flex-grow-1 consumers-experiences-around-the-globe-radius" >
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

    <!-- NOTE Some Experiences desktop -->
    <!-- TODO terminar la galleria -->
    <div class="row m-0 p-0 d-none d-md-flex" style="min-height: 100vh;">
        <div class="col-8 bg-blue-1" style="min-height: 100%;">
            <div class="container-fluid b " style="min-height: 100%;">

                <div class="row m-1 bg-blue-2" style="min-height: 20%;">
                    <div class="col-5">
                        <h1>1</h1>
                        <!-- <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-7">
                        <h1>2</h1>
                        <!-- <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/" class="card-img"  alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="row m-1 bg-blue-3" style="min-height: 50%;">
                    <div class="col-5">
                        <h1>3</h1>
                        <!-- <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/500x300" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-2">
                        <h1>4</h1>
                        <!-- <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/500x300" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-5">
                        <h1>5</h1>
                        <!-- <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/500x300" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="row m-1 bg-blue-2" style="min-height: 30%;">
                    <div class="col-7">
                    <h1>6</h1>
                        <!-- <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/500x300" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-5">
                    <h1>7</h1>

                        <!-- <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/500x300" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 bg-blue-2">
            <div class="p-3 d-flex flex-column justify-content-center align-middle">
                <p class="fw-normal fs-2 pt-1 text-center blue-5">Some <span class="fw-bolder">Experiences</span> </p>
                <p class="fw-lighter fs-4 pt-1 text-center blue-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus placeat exercitationem</p>
                <p class="fw-lighter fs-6 pt-1 text-center blue-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus placeat exercitationem voluptatum vel. Quidem itaque repudiandae nesciunt ex iure quaerat cumque, reiciendis dignissimos? Aliquam incidunt, molestias consequatur dolores odio omnis.</p>
                <p class="fw-bold fs-3 blue-5 text-center under-line-blue mx-1 ">
                    Visit our Experiences Blog
                </p>
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

    <!-- NOTE Meet Builders Desktop -->
    <div class="row m-0 p-0 bg-blue-4" style="min-height: 100vh;">
        <div class="col-4 d-md-flex flex-md-column justify-content-center bg-blue-1">
            <p class="fw-normal fs-1 blue-5 text-center align-middle">
                Read some reviews from our <span class="fw-bold">Consumers</span>
            </p>
            <div class="d-none d-md-block blue-5 px-5">
                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, itaque tempora sit, voluptate, vitae magni inventore molestias amet dignissimos beatae consequatur omnis totam quisquam corporis blanditiis sequi exercitationem aliquid ipsa?</p>
                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus mollitia, distinctio eveniet soluta sint voluptatum? Ab, veritatis quod amet aperiam cumque reiciendis. Porro accusamus alias adipisci placeat at a perspiciatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam explicabo corporis veritatis molestiae ut natus accusamus hic, doloribus, illum molestias sed, cumque officiis sequi ratione adipisci eaque fugiat excepturi odit!</p>
            </div>

            <img class="mt-0" style="height: 12em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/details.svg" alt="details-badge">


        </div>
        <div class="col-8 consumers-reviews-custom-border">
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
            <!-- <div class="row p-5">
            <div class="col-2">
            </div>
                <div class="col-4 ">
                    <?php //get_template_part('template-parts/builder', 'card'); ?>
                </div>
                <div class="col-6 ">
                    <?php //get_template_part('template-parts/builder', 'card'); ?>
                </div>
            </div> -->
        </div>
    </div>

</div>

<?php get_footer();  ?>