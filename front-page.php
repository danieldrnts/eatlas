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
    <div class="d-none d-md-flex row m-0 p-0  bg-blue-2" style="height:90vh">
        <div class="col-6">
            <p class="fs-1 blue-5 fw-bold text-center mt-4 airplane-svg">Explore the world</p>
            <p class="fs-6 blue-5 fw-light text-center mt-4 mx-4 airplane-svg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias, expedita cumque eligendi velit dicta saepe culpa harum ipsa iusto, magni et distinctio vero in laudantium molestiae numquam officia consequatur similique!</p>
            <img class="my-3 ms-5" style="height: 3em;" src="<?php echo get_bloginfo('template_url') ?>/assets/images/airplane.svg" ?>
            <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
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
    <div class="row mx-0 bg-blue-1" style="min-height: 100vh;">
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
                        <!-- <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="-1200 0 3121 2543">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #aedcff;
                                    }

                                    .cls-2 {
                                        fill: #2699fb;
                                    }

                                    .cls-3 {
                                        fill: #7fc4fd;
                                    }

                                    .cls-4 {
                                        fill: #c7e5fd;
                                    }

                                    .cls-5 {
                                        fill: #e9f5fe;
                                    }

                                    .cls-6 {
                                        fill: #f3f8ff;
                                    }
                                </style>
                            </defs>
                            <title>hand-and-phone</title>
                            <path class="cls-1" d="M860.39,1076.66S780.64,1257,748,1240.12s103.35-194.58,103.35-194.58S752,872.09,689.89,837.68c0,0-15.16,219.24-42.64,194.82S625,779.2,625,779.2,492.15,646.37,405.71,719.76s-78,145.61-59.31,166.75,164.63,118.73,148,134.94-135-20.91-177.91-75.29c0,0-41.93,189.77,42.15,236.51s142.09,14.69,193.52,44.52,78.09,67.53,44.62,63.89-110-69.33-172.57-62.92-108.67,5.12-45.73,70.54,200.91,146.44,266,108.17l8.14-4.79a36.39,36.39,0,0,1-8.14,4.79c8.1,17.18,2.51,68.72-3.26,107.24-1.37,6.29-2.87,15.26-4.5,27.73h0c-.95,5.48-1.77,9.94-2.35,13.05-18.61,82.39-109,184.58-109,184.58l12.76,15c112-88.63,114.71-222.86,114.71-222.86,10.93-100.41,56.73-163,56.73-163s195.17,18,203-134.33C912.52,1234.26,905.13,1132.33,860.39,1076.66Z" transform="translate(0 -256.17)" />
                            <path class="cls-2" d="M1432.77,997.38s-95.23,190.51-192,322c-38.48,52.34-77.22,95.33-110.27,113.26-32.36,17.54-59.75,44.8-82.41,75-58.71,78.21-85.8,176.12-85.8,176.12L715,1309.55s8.44-365.81,38.14-427c43.29-89.17,64.2-269.34,80.83-305.21,12.34-26.61,47.57-164.06,51-174.16,1.46-4.35,13.19-11,28.41-11,12.22,0,33,11.81,38.19,36.07,26.45,122.65-5.39,203.55-5,207.14,9.33,94.26-18.72,164.23.95,182.76.74.68,2.09.36,4-.87,34.1-21.89,245.75-330.46,271.82-337.12C1250.77,473.13,1432.77,997.38,1432.77,997.38Z" transform="translate(0 -256.17)" />
                            <path class="cls-1" d="M1036.74,1609.72s-3.37,166.3-13,390.28H399.78C542.4,1695.86,666.4,1439.88,666.4,1439.88S1021.67,1450.73,1036.74,1609.72Z" transform="translate(0 -256.17)" />
                            <path class="cls-2" d="M1649,352.63l-76.6,112.29-75.17,110.2c-4.58,5.53-9.89,7.46-15.63,6.9-18-1.71-40.35-27.72-57.74-42.13l-1.77-1.45a54.27,54.27,0,0,1-7.2-76.18l114.89-138.88h0l34.07-41.18a54.26,54.26,0,0,1,76.18-7.21l1.77,1.45A54.29,54.29,0,0,1,1649,352.63Z" transform="translate(0 -256.17)" />
                            <path class="cls-3" d="M1572.44,464.92l-75.17,110.2c-4.58,5.53-9.89,7.46-15.63,6.9l48.18-258.64C1529.92,324.83,1538.11,440.88,1572.44,464.92Z" transform="translate(0 -256.17)" />
                            <path class="cls-3" d="M1240.8,1319.4c-38.48,52.34-77.22,95.33-110.27,113.26-32.36,17.54-59.75,44.8-82.41,75-26.07-12.15-55.79-26.41-84.84-40.53-35.37-17.19-36.73-67.41-2.08-86,.34-.18.67-.36,1-.55,32.47-18.57,65.73-84.17,65.73-84.17Z" transform="translate(0 -256.17)" />
                            <path class="cls-4" d="M883.15,408.87l-20,80.92s17.52,7.17,28.77,1.6S912.32,413.23,883.15,408.87Z" transform="translate(0 -256.17)" />
                            <rect class="cls-1" x="951.48" width="585.13" height="1101.47" rx="77.08" ry="77.08" />
                            <path class="cls-5" d="M1507.61,340.54V1265.9c0,31.39-25.5,57.07-56.65,57.07H1037.13c-31.15,0-56.64-25.68-56.64-57.07V340.54c0-31.39,25.49-57.07,56.64-57.07H1451C1482.11,283.47,1507.61,309.15,1507.61,340.54Z" transform="translate(0 -256.17)" />
                            <path class="cls-4" d="M1451,283.47,1042.25,1323h-5.12c-31.15,0-56.64-25.68-56.64-57.07V340.54c0-31.39,25.49-57.07,56.64-57.07Z" transform="translate(0 -256.17)" />
                            <rect class="cls-3" x="1131.96" y="6.46" width="224.19" height="55.26" rx="25.62" ry="25.62" />
                            <path class="cls-2" d="M1610.91,776.7,1599.49,781l-76.82,29.19a48.19,48.19,0,0,1-5.44,1.72,52.47,52.47,0,0,1-62-32l-1.13-2.95a52.48,52.48,0,0,1,30.32-67.5L1556,682.25l5.2-2,11.42-4.34a52.46,52.46,0,0,1,67.48,30.32l1.13,3A52.48,52.48,0,0,1,1610.91,776.7Z" transform="translate(0 -256.17)" />
                            <path class="cls-2" d="M1548.53,778.46c-12.82,4.86-36,13.48-48.44,15.26-3.51.51-10-1.4-16-8-3.63-4-7.09-9.6-9.66-17.42a55.11,55.11,0,0,1-2.63-11.12,46.93,46.93,0,0,1,.42-13.23,13.19,13.19,0,0,1,7.33-9.43s0,0,.06,0c13.2-6.31,31-14,46.58-18.27,10.79-3,21.7,1.78,25.11,11.22l1.61,4.41,8.25,22.58C1564.55,763.79,1559,774.51,1548.53,778.46Z" transform="translate(0 -256.17)" />
                            <path class="cls-4" d="M1548.53,778.46c-12.82,4.86-36,13.48-48.44,15.26-3.51.51-10-1.4-16-8-.65-1.5-1.24-3.09-1.8-4.78a55.21,55.21,0,0,1-2.63-11.13,47.24,47.24,0,0,1,.42-13.22,13.24,13.24,0,0,1,7.33-9.44s0,0,.06,0c13.2-6.3,31-14,46.59-18.26a22.05,22.05,0,0,1,18.85,3l8.25,22.58C1564.55,763.79,1559,774.51,1548.53,778.46Z" transform="translate(0 -256.17)" />
                            <path class="cls-2" d="M1576.05,884.69l-59.23,16.13A34,34,0,0,1,1475.18,877l-1.83-6.7a34,34,0,0,1,23.82-41.64l59.24-16.13A34,34,0,0,1,1598,836.35l1.83,6.71A34,34,0,0,1,1576.05,884.69Z" transform="translate(0 -256.17)" />
                            <path class="cls-2" d="M1544,881.79c-10.88,2.9-30.55,8-40.86,8.59-3.75.21-11.26-3-16.16-12.82a39.76,39.76,0,0,1-3-8.35,39.09,39.09,0,0,1-1.32-8.71,33.81,33.81,0,0,1,1.32-10.14,10.49,10.49,0,0,1,6.7-6.77l0,0c11.29-4,26.45-8.75,39.57-11,9.06-1.59,17.65,2.77,19.77,10.24l1.53,5.33,4.56,16C1558.26,871.54,1552.91,879.43,1544,881.79Z" transform="translate(0 -256.17)" />
                            <path class="cls-4" d="M1544,881.79c-10.88,2.9-30.55,8-40.86,8.59-3.75.21-11.26-3-16.16-12.82a37.4,37.4,0,0,1-1.19-8.17,33.81,33.81,0,0,1,1.32-10.14,10.52,10.52,0,0,1,6.69-6.77s0,0,.06,0c11.29-4,26.45-8.74,39.57-11,7.5-1.32,14.68,1.45,18.14,6.67l4.56,16C1558.26,871.54,1552.91,879.43,1544,881.79Z" transform="translate(0 -256.17)" />
                            <path class="cls-3" d="M605.66,1566.05s121.92,116.78,204.12,161.87L872,1683.78v65.11s122.39,21.65,161,0V1571.32L689.24,1399Z" transform="translate(0 -256.17)" />
                            <path class="cls-6" d="M715,1296.38s-77.43,115.84-154.38,239.69c0,0,162.17,111.56,250.1,144.29L926,1548.27l-16.47,159s102.07,37.2,149.42,27.49c0,0-3-144.24-3-238.75C1056,1496,775.44,1417.37,715,1296.38Z" transform="translate(0 -256.17)" />
                            <path class="cls-3" d="M734,1590.34a19.2,19.2,0,1,1,19,19.37A19.21,19.21,0,0,1,734,1590.34Z" transform="translate(0 -256.17)" />
                            <path class="cls-2" d="M1609,663.17l-1.28.43-77.66,19.94c-34.15,8.78-69.46-9.7-78.47-41L1447,626.42c-8.67-30.1,10-61.58,41.68-71.79l25.64-6.58,52-13.36c34.14-8.77,69.46,9.71,78.47,41.06l4.62,16.06C1658,621.51,1640,652.53,1609,663.17Z" transform="translate(0 -256.17)" />
                            <path class="cls-2" d="M1573.45,641.49l-37.73,17-.24.06a40.56,40.56,0,0,1-4.56.94c-.63.1-1.28.17-1.91.24a4.28,4.28,0,0,1-.8,0,6,6,0,0,1-5.21-8.48,37.5,37.5,0,0,0,2.14-25.58l-.9-3.29a.54.54,0,0,0,0-.1l-2.92-10.71a40.2,40.2,0,0,0-13.68-20.85c-.77-.63-1.57-1.22-2.38-1.78-7.46-5.17-5.56-16.87,3.17-19.29l.24-.07,41.4-6.27c10.24-2.78,20.1,5.1,22.89,15.34l3.33,12.2,7.08,26C1586.12,627.13,1583.69,638.71,1573.45,641.49Z" transform="translate(0 -256.17)" />
                            <path class="cls-4" d="M1573.45,641.49l-37.73,17-.24.06c-.88.17-3.65.63-7.27,1.19a6,6,0,0,1-5.21-8.48,37.5,37.5,0,0,0,2.14-25.58l-.9-3.29a.54.54,0,0,0,0-.1l-2.92-10.71a40.2,40.2,0,0,0-13.68-20.85,10.56,10.56,0,0,1,5.94-4.23l.24-.07,41.41-6.26c8.62-2.34,17,2.88,21.06,10.69l7.08,26C1586.12,627.13,1583.69,638.71,1573.45,641.49Z" transform="translate(0 -256.17)" />
                            <path class="cls-3" d="M951.48,1067.12s-16.94-147.89-32.57-176.73-28.86-86.6-4.81-129.51,32.35-125.5,32.35-125.5c9.33,94.26-18.72,164.23.95,182.76.74.68,2.09.36,4-.87Z" transform="translate(0 -256.17)" />
                            <path class="cls-1" d="M490.69,1616.74s-28.88-79-76.85-112.88c0,0-22.32,160.71-52,154.71s37.78-177.29,37.78-177.29S281.86,1366.54,225,1353.35c0,0,37.56,176.87,10.3,163.76s-74.9-195.34-74.9-195.34S61,1266.54,0,1299.84v185.41c46.65,18.47,118.79,45.51,111.8,57.67s-63.8,14-111.8,1V1673c10.91,13.91,24.34,24.28,40.86,28.13,77.08,18,115.72-20.51,163.15-8.53s77,35.76,49.74,40.45S151,1703.1,103,1722.31s-84.81,28.62-20.23,66.13,192,70.43,234.84,25.44h0l5.35-5.62,0,0a29.81,29.81,0,0,1-5.39,5.68c10.29,11.76,17.52,53.82,21.67,85.6.33,5.26,1.17,12.68,2.69,22.84.5,4.71.87,8.54,1.12,11.15,1.12,20.54-2.32,43.86-7.74,66.52h20.57c6.55-51-3.49-89.18-3.53-89.34h0c-14.05-81.9,8-141.76,8-141.76h0C360.79,1768.83,518.86,1738.87,490.69,1616.74Z" transform="translate(0 -256.17)" />
                            <path class="cls-1" d="M1812.44,1475.49c-27.11-100.13-196.08-68.84-196.08-68.84s-114.73,175.23-148.11,179.4,68.84-169,68.84-169c-64.67-6.25-229.46,73-229.46,73s10.43,204.43-23,200.26,0-181.48,0-181.48c-62.58,18.77-121,91.78-121,91.78-73,118.9,83.44,206.52,83.44,206.52s2.09,70.92-41.71,152.28h0s-9.88,15-19.93,40.55h17.06q2.09-6.87,4.63-13.24a.1.1,0,0,1,0-.08,1.42,1.42,0,0,1,.08-.18c1.16-2.64,2.84-6.39,4.94-11v0c5.21-10.2,8.73-17.74,11-23.18a.11.11,0,0,0,0,0c15.62-32,38.12-73.77,53.13-82.52a33,33,0,0,1-3.65-7.83c1.16,2.5,2.38,5.1,3.65,7.83,29.2,62.58,175.22,73,256.58,56.32s45.89-39.63,2.08-76.88-135.59-27.42-162.7-42,12.51-29.21,66.75-25,81.35,58.41,169,66.76,154.36-156.45,154.36-156.45c-60.49,18.77-169-14.61-173.14-35.47s156.45-18.77,181.48-25S1839.56,1575.62,1812.44,1475.49Z" transform="translate(0 -256.17)" />
                        </svg> -->
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
    </div>

    <!-- NOTE meet video desktop -->
    <div class="d-none d-md-flex row mx-0 bg-blue-1 " style="height: 100vh;">
        <!-- NOTE mobile landing -->
        <div class="container ">
            <div class="row py-4">
                <div class="col-12">
                    <p class="fw-bolder fs-1 text-center blue-5">Meeet eAtlas</p>
                    <p class="fw-lighter fs-5 text-center blue-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quidem ullam odit enim quas rerum libero rem </p>
                </div>
            </div>
            <!-- <div class="row  mx-auto bg-success">
                <div class="col-12 bg-warning">
                    <video   class="img-fluid" style="height: 50%; width: auto" src="<?php echo get_bloginfo('template_url') ?>/assets/videos/meetVideo.mp4">
                    </video>
                </div>
            </div> -->
            <div class="row  m-0 mt-4">
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

    <!-- NOTE Download app desktop-->
    <div class="d-none d-md-flex row m-0 p-0 bg-blue-3" style="height:90vh">
        <div class="col-6 h-100 d-flex-column justify-content-center ">
            <p class="fw-bold fs-1 pt-1 text-center blue-5">Get eAtlas</p>
            <p class="fs-6 blue-5 fw-light text-center mt-4 mx-4 airplane-svg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias, expedita cumque eligendi velit dicta saepe culpa harum ipsa iusto, magni et distinctio vero in laudantium molestiae numquam officia consequatur similique!</p>
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

    <!-- NOTE Download App -->
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
    <?php

    // posts araay
    $posts = get_posts(array('numberposts' => 2 )); 
    print_r($posts[0]);
     ?>
    <div class="row m-0 p-0 d-none d-md-flex" style="min-height: 100vh;">
        <div class="col-8 bg-blue-1" style="min-height: 100%;">
            <div class="row row-cols-1 row-cols-md-2 g-4" data-masonry='{"percentPosition": true }'>
                <div class="col">
                    <?php get_template_part('template-parts/experience', 'gallerycard', $posts[0] -> to_array()) ?>
                </div>
                <div class="col">
                    <?php get_template_part('template-parts/experience', 'gallerycard', $posts[1] -> to_array()) ?>
                </div>
                <div class="col">
                    <?php get_template_part('template-parts/experience', 'gallerycard'); ?>
                </div>
                <div class="col">
                    <?php get_template_part('template-parts/experience', 'gallerycard'); ?>
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

</div>


<?php get_footer(); ?>