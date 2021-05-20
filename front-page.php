<?php

get_header();

/** Declaring my global variables for the template parts 
 * Experiences cards
 */

// Some Query to the database of wordpress i.e. get_posts();
// args to the query
//  $queryArgs = array('numberposts'=>  3);
//  $experiencesCards = array();
//  foreach (get_posts() as $value) {
//      # code...
//     // print_r($value->to_array());
//     array_push($experiencesCards, $value);
//  }

//  print_r($experiencesCards);
//  echo $experiencesCards[0];

?>

<div class="container-fluid px-0 ">

    <!-- NOTE landing desktop -->
    <div class="d-none d-md-flex row m-0 p-0  bg-b-blue-gradient" style="min-height:90vh">
        <div class="col-6 text-white">
            <p class="fs-1  fw-bold text-center mt-4 airplane-svg">Tours that Whoa!</p>
            <p class="fs-2  fw-light text-start mt-4 mx-5 airplane-svg">If your city could talk, it would tell you to download eATLAS for the best on demand, mobile tours and adventures.</p>
            <br>
            <p class="fs-2  fw-normal text-start ms-5 mb-5">You don't need a better map. <br> You need a better guide. <br> And a better experience</p>
            <!-- <img class="my-3 ms-5" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/airplane.svg" ?> -->
            <p class="fw-normal fs-1 pt-1 text-center mt-5 ">Download & Go NOW</p>
            <div class="d-flex flex-row  justify-content-center mx-auto mt-2">
                <img class="mx-5 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                <img class="mx-5 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
            </div>
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <div class="row h-100">
                <div class="col-12 h-100 p-5">
                    <div class="position-relative  h-100">
                        <img src="https://source.unsplash.com/random/300x150" alt="" class="position-absolute shadow top-50 start-0 translate-middle-y rounded" style="z-index: 99;">
                        <img src="https://source.unsplash.com/random/400x300" alt="" class="position-absolute shadow top-50 start-50 translate-middle" style="z-index: 98;">
                        <img src="https://source.unsplash.com/random/300x150" alt="" class="position-absolute shadow top-50 start-50 rounded mt-3" style="z-index: 100;">
                        <img src="https://source.unsplash.com/random/300x150" alt="" class="position-absolute shadow bottom-0 start-50 translate-middle-x mb-5 pb-5 rounded" style="z-index: 101;">
                    </div>
                </div>
            </div>
            <!-- <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/world-map.svg" alt=""> -->
        </div>
        <div class="col-12">
            <!-- NOTE TWO GUIDES -->
            <div class="row mx-0 my-5 bg-light" style="height: fit-content;border-radius: 10%">
                <div class="col-md-6 h-100 d-flex flex-column justify-content-center">
                    <div class="bg-light  text-white mx-auto" style="height: 60%; width: 80%;">
                        <div class="p-5 text-center">
                            <p class="fs-2 fw-bolder text-center">
                                Be and eATLAS <br>
                                Whoa!Guide</p>
                            <p class="fs-3 fw-light">
                                Make tours. Make memories
                            </p>
                            <p class="fs-3 fw-bold">
                                Make money.
                            </p>
                            <button type="button" class="btn btn-light btn-lg mt-5 " style="border-radius: 2.3rem !important;"> <span class="fw-bold fs-2 text-primary">Become a Whoa!Guide</span> </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 h-100 d-flex flex-column justify-content-center">
                    <div class="bg-light text-white mx-auto" style="height: 60%; width: 80%;">
                        <div class="p-5 text-center">
                            <p class="fs-2 fw-bolder text-center">
                                eATLAS Mobile Tours - <br>
                                Let's Whoa! the World
                            </p>
                            <p class="fs-3 fw-light">
                                Find new adventures anytime
                            </p>
                            <p class="fs-3 fw-bold">
                                Just tap & whoa!
                            </p>
                            <button type="button" class="btn btn-light btn-lg mt-5 " style="border-radius: 2.3rem !important;"> <span class="fw-bold fs-2 text-primary">Take an eATLAS Tour</span> </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- NOTE mobile landing -->
    <div class="row mx-0 d-md-none">
        <div class="col-sm-12 px-0 ">
            <div class="d-flex flex-column">
                <p class="fs-1 blue-5 fw-bold text-center mt-4 airplane-svg">Explore</p>
                <p class="fs-1 blue-5 fw-bold text-center  airplane-svg"> the world</p>
                <img style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/airplane.svg" ?>
            </div>
            <p class="fs-4 blue-5 fw-light text-center my-5">Live amazing Experiences</p>
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/home-landing-bg.svg" alt="home landing ">
        </div>
    </div>

    <!-- NOTE meet video mobile -->
    <div class="row mx-0 bg-blue-1 d-md-none" style="height: 100vh;">
        <!-- NOTE mobile landing -->
        <div class="container ">
            <div class="row py-4">
                <div class="col-12">
                    <p class="fw-bolder fs-1 text-center blue-5">Meeet eAtlas</p>
                    <p class="fw-lighter fs-5 text-center blue-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quidem ullam odit enim quas rerum libero rem </p>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-12 d-flex flex-row justify-content-center" style="height: 12em;">
                    <video controls class="position-relative" style="height: 100%; width: auto" src="<?php echo get_bloginfo('template_url') ?>/assets/videos/meetVideo.mp4">
                        <i style="height: 3em;" class="bi bi-play-circle-fill position-absolute top-100 start-50"></i>
                    </video>
                </div>
            </div>
            <div class="row m-0 mt-4">
                <div class="col-12">
                    <p class="fw-normal fs-1 py-2 text-center blue-5">Get eAtlas</p>
                    <div class="d-flex flex-row  justify-content-center mx-auto">
                        <img class="mx-2" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                        <img class="mx-2" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NOTE Custumers / Builders -->
    <!-- <div class="row mx-0 bg-blue-1" style="min-height: 100vh;">
        <div class="container-fluid p-0 m-0">
            <div class="row pt-3 bg-blue-2">
                <div class="col-12 col-md-6 p-0">
                    <p class="fw-bold fs-1  text-center  text-md-start ms-md-5 blue-5">Consumers</p>
                    <p class="fw-normal fs-5 text-center  text-md-start ms-md-5 blue-5">Lorem ipsum dolor sit amet</p>
                    <p class="fw-light fs-6 text-center  text-md-start ms-md-5 text-break mx-3 blue-5  ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, consequuntur quasi accusantium ad reiciendis deleniti, quas consectetur aliquid similique excepturi, id itaque autem eum commodi sunt praesentium. Dolor, ullam aspernatur!</p>
                    <div class="d-flex flex-row justify-content-center">
                        <button class="btn btn-primary btn-large my-3 shadow">
                            <span class="text-white">
                                Live an Experience</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <img class="img-fluid d-none d-md-block " src="<?php echo get_bloginfo('template_url') ?>/assets/images/consumers.svg" alt="consumers">
                    <img class="img-fluid d-md-none" src="<?php echo get_bloginfo('template_url') ?>/assets/images/womanandgirl.svg" alt="womanandgirl">
                </div>
            </div>
            <div class="row bg-blue-4 pt-3  pt-md-5">
                <div class="col-12 d-md-none">
                    <p class="fw-bold fs-1  text-center text-white">Builders</p>
                    <p class="fw-normal fs-5 text-center text-white">Lorem ipsum dolor sit amet</p>
                    <p class="fw-light fs-6 text-center text-break mx-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, consequuntur quasi accusantium ad reiciendis deleniti, quas consectetur aliquid similique excepturi, id itaque autem eum commodi sunt praesentium. Dolor, ullam aspernatur!</p>
                    <div class="d-flex flex-row justify-content-center">
                        <button class="btn btn-light btn-large mt-3 mb-5 shadow">
                            <span class="blue-5">
                                Become a Builder
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <div class="d-flex flex-row-reverse">
                        <img class="img-fluid hand-and-phone-svg" src="<?php echo get_bloginfo('template_url') ?>/assets/images/hand-and-phone.svg" alt="">
                    </div>
                </div>
                <div class=" d-none d-md-block col-12 col-md-6 p-0">
                    <p class="fw-bold fs-1  text-center text-white">Builders</p>
                    <p class="fw-normal fs-5 text-center text-white">Lorem ipsum dolor sit amet</p>
                    <p class="fw-light fs-6 text-center text-break mx-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, consequuntur quasi accusantium ad reiciendis deleniti, quas consectetur aliquid similique excepturi, id itaque autem eum commodi sunt praesentium. Dolor, ullam aspernatur!</p>
                    <div class="d-flex flex-row justify-content-center">
                        <button class="btn btn-light btn-large mt-3 mb-5 shadow">
                            <span class="blue-5">
                                Become a Builder
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- NOTE meet video desktop -->
    <div class="d-none d-md-flex row mx-0 bg-blue-1 " style="min-height: 100vh;background-color:#dab665">
        <!-- NOTE mobile landing -->
        <div class="container ">
            <div class="row py-4">
                <div class="col-12">
                    <p class="fw-bolder fs-1 ms-5 text-start ">Turn tour phone into an amazing guide</p>
                    <!-- <p class="fw-lighter fs-5 text-center blue-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quidem ullam odit enim quas rerum libero rem </p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-center" style="height: fit-content;">
                    <video class="shadow" style="height: 50%; border-radius: 6.5%" src="<?php echo get_bloginfo('template_url') ?>/assets/videos/meetVideo.mp4">
                    </video>
                </div>
            </div>
            <div class="row  m-0 mt-4">
                <div class="col-12 d-flex flex-row justify-content-center">
                    <div>
                        <p class="fw-normal fs-4 py-2 text-start text-dark">Our Whoa!Guides design amazing mobile tours that bring the world to life. <br>
                            Fill your phone with adventures that take you to the top sights and the hidden gems. <br>
                            Find NEW tours added every week.</p>
                        <p class="fw-bold fs-3 py-2 text-start text-dark">Just tap to Tour. And Swipe to Whoa!</p>
                    </div>
                    <!-- <div class="d-flex flex-row  justify-content-center mx-auto">
                        <img class="mx-2" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                        <img class="mx-2" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- NOTE Download app desktop-->
    <!-- <div class="d-none d-md-flex row m-0 p-0 bg-blue-3" style="height:90vh">
        <div class="col-6 h-100 d-flex-column justify-content-center ">
            <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
            <p class="fs-6 blue-5 fw-light text-center mt-4 mx-4 airplane-svg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias, expedita cumque eligendi velit dicta saepe culpa harum ipsa iusto, magni et distinctio vero in laudantium molestiae numquam officia consequatur similique!</p>
            <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
            <div class="d-flex flex-row  justify-content-center mx-auto mt-2">
                <img class="mx-5 shadow" style="height: 3em;" src="<? //php// echo get_bloginfo('template_url') 
                                                                    ?>/assets/images/google-play-badge.svg" alt="google-badge">
                <img class="mx-5 shadow" style="height: 3em;" src="<? //php //echo get_bloginfo('template_url') 
                                                                    ?>/assets/images/apple-badge.svg" alt="google-badge">
            </div>
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <img src="<?php // echo get_bloginfo('template_url') 
                        ?>/assets/images/world-map.svg" alt="">
        </div>
    </div> -->

    <!-- NOTE Download app Desktop new -->
    <div class="d-none d-md-flex row m-0 p-0 bg-blue-3" style="height:90vh">
        <div class="col-6 h-100 d-flex-column justify-content-center ">
            <img src="https://source.unsplash.com/random/600x450" alt="" class=" shadow rounded">
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
            <p class="fs-6 blue-5 fw-light text-center mt-4 mx-4 airplane-svg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias, expedita cumque eligendi velit dicta saepe culpa harum ipsa iusto, magni et distinctio vero in laudantium molestiae numquam officia consequatur similique!</p>
            <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
            <div class="d-flex flex-row  justify-content-center mx-auto mt-2">

                <img class="mx-5 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                <img class="mx-5 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
            </div>
        </div>
    </div>

    <!-- NOTE Download App Mobile-->
    <div class="row m-0 p-0 bg-blue-2 d-flex flex-column d-md-none" style="min-height: 100vh;">
        <div class="col-12  my-4">
            <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
            <p class="fw-light fs-4 text-center blue-5 my-4">Available on every device</p>
            <div class="d-flex flex-row  justify-content-center mx-auto">
                <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/google-play-badge.svg" alt="google-badge">
                <img class="mx-2 shadow" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/apple-badge.svg" alt="google-badge">
            </div>
        </div>
        <div class=" mt-5 col-12 bg-blue-4 d-flex flex-column justify-content-center flex-grow-1 " style="border-top-left-radius: 50%;border-top-right-radius: 50%;">
            <p class="fw-normal fs-2 text-white  mt-5 pt-2 mx-5 text-center">Experiences all around the <span class="fw-bold">globe</span> </p>
            <img class="mx-2" style="height: 12em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/world-map.svg" alt="google-badge">
            <p class="fw-light my-1 fs-6 text-white my-3 mx-5 text-center"> Lorem ipsum dolor sit amet dolor sit </p>
        </div>
    </div>
    <!-- NOTE Some Experiences mobile-->
    <div class="row m-0 p-0 bg-blue-2 d-flex flex-column d-md-none" style="min-height: 100vh;">
        <div class="col-12 mt-3">
            <p class="fw-bold blue-5 fs-1 text-center">Some experiences</p>
            <p class="fw-light blue-4 fs-6 text-center mx-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quod quasi </p>
        </div>
        <div class="col-12 mb-3">
            <div class="container-fluid p-0">
                <div class="row my-2">
                    <div class="col-6">
                        <?php
                        get_template_part('template-parts/experience', 'card');
                        // get_template_part('template-parts/experience', 'card', $experiencesCards[2]);
                        ?>
                    </div>
                    <div class="col-6">
                        <?php
                        get_template_part('template-parts/experience', 'card');
                        // get_template_part('template-parts/experience', 'card', $experiencesCards[1]);
                        ?>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-12 ">
                        <?php
                        get_template_part('template-parts/experience', 'card');
                        // get_template_part('template-parts/experience', 'card', $experiencesCards[0]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 my-4">
            <p class="fw-bold fs-3 blue-5 text-center under-line-blue mx-1 ">
                Visit our Experiences Blog
            </p>
        </div>
    </div>
    <!-- NOTE Some Experiences desktop -->
    <!-- TODO terminar la galleria -->
    <? //php

    // posts araay
    //$posts = get_posts(array('numberposts' => 2 )); 
    //print_r($posts[0]);
    ?>
    <!-- <div class="row m-0 p-0 d-none d-md-flex" style="min-height: 100vh;">
        <div class="col-8 bg-blue-1" style="min-height: 100%;">
            <div class="row row-cols-1 row-cols-md-2 g-4" data-masonry='{"percentPosition": true }'>
                <div class="col">
                    <? //php // get_template_part('template-parts/experience', 'gallerycard', $posts[0] -> to_array()) 
                    ?>
                </div>
                <div class="col">
                    <? //php  // get_template_part('template-parts/experience', 'gallerycard', $posts[1] -> to_array()) 
                    ?>
                </div>
                <div class="col">
                    <? //php  // get_template_part('template-parts/experience', 'gallerycard'); 
                    ?>
                </div>
                <div class="col">
                    <? //php  // get_template_part('template-parts/experience', 'gallerycard'); 
                    ?>
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
    </div> -->

</div>


<?php get_footer(); ?>