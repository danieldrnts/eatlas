<?php /* Template Name: Custumers */

get_header();

?>

<div class="container-fluid p-0 m-0">
    <!-- NOTE mobile & desktop landing -->
    <div class="row mx-0 d-flex flex-column-reverse flex-md-row" style="min-height: 100vh;">
        <div class="col-12 col-md-6 px-0 bg-b-pink-gradient">
            <div class="d-flex flex-column">
                <div class="d-flexn flex-column p-5 ">
                    <p class="fw-bold fs-3 fs-md-1 pt-1 text-start text-white  ms-md-5">eATLAS Mobile Tours -</p>
                    <p class="fw-bold fs-1 pt-1 text-start text-white custom-font-size m-0 ms-md-5">Let's Whoa! <br> the world</p>
                    <div class="d-flex flex-column  justify-content-start ms-md-5 mt-2">
                        <p class="text-white fw-normal fs-6 fs-md-2">
                            Take a tour anytime with custom-designed <br> adventures from our eATLAS Whoa!Guides.
                        </p>

                    </div>
                    <div class=" my-3">
                        <p class="fw-bold fs-3 fs-md-1 pt-1 text-center text-white  ms-md-5">Download & Go NOW</p>
                        <div class="mx-auto my-2 my-md-5 text-center" style="width: fit-content;">
                            <img class="shadow my-2" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.png" alt="google-badge">
                            <img class="ms-md-4 shadow my-2" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.png" alt="google-badge">
                            <p class="fw-lighter fs-2 my-3 my-md-5">
                                <a class="text-white" href="#">Become a Whoa!Guide </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 flex-grow-1" style="background-image: url(<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/couple-walking.jpg); background-image-repeat: no-repeat;  background-size: cover;background-position: center;min-height: 15rem">
            <p class="d-md-none fs-4 blue-5 fw-light text-center my-3">Create amazing Experiences today!</p>
        </div>
    </div>


    <!-- NOTE meet video desktop -->
    <div class="d-flex row mx-0" style="min-height: 100vh;background-color: #dbe0e4">
        <!-- NOTE mobile landing -->
        <div class="container ">
            <div class="row py-4">
                <div class="col-12">
                    <p class="fw-bolder fs-1 ms-5 text-start ">Turn tour phone into an amazing guide</p>
                    <!-- <p class="fw-lighter fs-5 text-center blue-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quidem ullam odit enim quas rerum libero rem </p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-center p-5" style="height: fit-content;">
                    <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/phone-video.png" alt="">
                </div>
            </div>
            <div class="row  m-0 mt-4 mb-5">
                <div class="col-12 d-flex flex-row justify-content-center">
                    <div>
                        <p class="fw-normal fs-4 py-2 text-start text-dark">Our Whoa!Guides design amazing mobile tours that bring the world to life. <br>
                            Fill your phone with adventures that take you to the top sights and the hidden gems. <br>
                            Find NEW tours added every week.</p>
                        <p class="fw-bold fs-3 py-2 text-start text-dark mb-3">Just tap to Tour. And Swipe to Whoa!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NOTE Brian new gallery layout MOBILE -->
    <div class="d-md-none row px-5 bg-primary pb-5" style="min-height: fit-content;background-color: var(--b-blue)">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12">
                    <p class="fw-bold text-start fs-2 text-white">
                        Throw out your guidebook. eATLAS is here.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/NY.png">
                            </div>
                            <div class="carousel-item">
                                <div class="bg-b-pink d-flex flex-column justify-content-center " style="border-radius: 40px;height: 100%">
                                    <p class="fw-normal fs-3 text-white p text-center fst-italic">
                                        Find NEW Tours for Downtown. <br> Uptown. And all-around town.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/san-diego.png" alt="ny">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/girls.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <div class="bg-warning d-flex flex-column justify-content-center " style="border-radius: 40px;height: 100%">
                                    <p class="fw-normal fs-3 text-dark p text-center fst-italic">
                                        NEW tours from our Whoa!Guides <br> added every week.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/chicago.png" alt="ny">
                            </div>
                            <div class="carousel-item">
                                <div class=" d-flex flex-column justify-content-center " style="border-radius: 40px;height: 100%; background-color: var(--bs-orange)">
                                    <p class="fw-normal fs-3 text-white p text-center fst-italic">
                                        Find NEW Tours for Downtown. <br> Uptown. And all-around town.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/main-street.png" alt="ny">
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex flex-column justify-content-center " style="border-radius: 40px;height: 100%; background-color: var(--bs-yellow)">
                                    <p class="fw-normal fs-3 text-white p text-center fst-italic">
                                        Find NEW Tours for Downtown. <br> Uptown. And all-around town.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-warning">
                <div class="col-12">
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
            <div class="row">
                <div class="col-12">
                    <div class="btn bg-light mx-auto my-5 p-3" style="width: fit-content;border-radius: 2.50rem; display: block">
                        <span class="fw-bold " style="color: var(--bs-gray)">Download, Tap, and Go</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- NOTE Brian new gallery layout DESKTOP -->
    <div class="d-none d-md-block row px-5 bg-primary pb-5" style="min-height: 100vh;background-color: var(--b-blue)">
        <div class="container ">
            <div class="row mt-5">
                <div class="col-12 ps-5">
                    <p class="fw-bold fs-2 text-white ms-5">
                        Throw out your guidebook. eATLAS is here.
                    </p>
                </div>
            </div>
            <div class="row ">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-3">
                            <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/NY.png" alt="ny">
                        </div>
                        <div class="col-6 my-3">
                            <div class="bg-b-pink d-flex flex-column justify-content-center " style="border-radius: 40px;height: 100%">
                                <p class="fw-normal fs-3 text-white p text-center fst-italic">
                                    Find NEW Tours for Downtown. <br> Uptown. And all-around town.
                                </p>
                            </div>
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/san-diego.png" alt="ny">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row ">
                        <div class="col-7 my-4">
                            <div class="bg-warning d-flex flex-column justify-content-center " style="border-radius: 40px;height: 100%">
                                <p class="fw-normal fs-3 text-dark p text-center fst-italic">
                                    NEW tours from our Whoa!Guides <br> added every week.
                                </p>
                            </div>
                        </div>
                        <div class="col-5">
                            <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/chicago.png" alt="ny">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-4 my-4">
                            <div class=" d-flex flex-column justify-content-center " style="border-radius: 40px;height: 100%; background-color: var(--bs-orange)">
                                <p class="fw-normal fs-3 text-white p text-center fst-italic">
                                    Find NEW Tours for Downtown. <br> Uptown. And all-around town.
                                </p>
                            </div>
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers-page/main-street.png" alt="ny">
                        </div>
                        <div class="col-5 my-4">
                            <div class="d-flex flex-column justify-content-center " style="border-radius: 40px;height: 100%; background-color: var(--bs-yellow)">
                                <p class="fw-normal fs-3 text-white p text-center fst-italic">
                                    Find NEW Tours for Downtown. <br> Uptown. And all-around town.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="btn  bg-light mx-auto my-5 p-3" style="width: 50%;border-radius: 2.50rem; display: block">
                    <span class="fw-bold fs-2" style="color: var(--bs-gray)">Download, Tap, and Go</span>
                </div>
            </div>
        </div>
    </div>


    <!-- NOTE Download app Desktop new -->
    <div class=" row pb-5 p-0 bg-light pb-md-0 m-0" style="min-height:80vh">
        <div class="col-12 col-md-5 d-flex flex-column justify-content-center">
            <div class="d-flex flex-column flex-md-row justify-content-end">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/home/download-section.png">
            </div>
        </div>
        <div class="col-12 col-md-7 d-flex justify-content-start ">
            <div class="d-flex flex-column justify-content-center ">
                <p class="fw-bold fs-1 pt-1 ms-3 text-start text-md-center mx-md-2 mx-md-0">Looking to take an eATLAS Tour?</p>
                <!-- <p class="fs-4 fw-normal text-start mt-1 mt-md-4 mx-4 airplane-svg">All eAtlas tours & experiences are desinged and built by experienced eATLAS Whoa!Guides. They're always on. Always entertaining. And always ready to go.</p> -->
                <p class="fw-bold fs-4 text-center text-md-start my-4 mx-5 mx-md-0">Download eATLAS & Tour Anytime</p>
                <div class="d-flex flex-column flex-md-row  justify-content-start mt-2">
                    <img class="my-2 my-md-0" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.png" alt="google-badge">
                    <img class="ms-md-4 my-2 my-md-0" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.png" alt="google-badge">
                </div>
            </div>
        </div>
    </div>


</div>

<?php get_footer();  ?>