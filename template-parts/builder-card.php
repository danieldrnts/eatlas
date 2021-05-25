<?php

/**
 * @var array builderInfo
 */

?>
<div class="container-fluid h-100 flex-grow-1 d-flex flex-column justify-content-center ">
      <div class="card h-100 custom-border " style="width: 18rem;">
            <div class="card-img-top text-center builder-rounded-avantar" style="max-height: 10rem;max-width:100%">
                  <img class="img-fluid guides-custom-size-card" src="<?php echo $args['picture'] ?>" alt="">
            </div>
            <div class="card-body shadow" style="z-index: 10;">
                  <h5 class="card-title text-center mb-4"><?php echo $args['nickname'][0] ?></h5>
                  <div>
                        <ul style="list-style: none;">
                              <li class="my-2">
                                    <i class="bi bi-house blue-5"></i>
                                    <span class="fs-6 fw-normal blue-5"><?php echo $args['whoaguide-city'][0] ?></span>
                              </li>
                              <!-- <li class="my-2">
                                    <i class="bi bi-heart-fill blue-5"></i>
                                    <span class="fs-6 fw-normal blue-5">3</span>
                              </li>
                              <li class="my-2">
                                    <i class="bi bi-heart-fill blue-5"></i>
                                    <span class="fs-6 fw-normal blue-5">6</span>
                              </li> -->
                        </ul>
                  </div>
                  <p class="blue-4 card-text text-center fst-italic " style="font-size: small;"><?php echo $args['description'][0] ?></p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
      </div>
</div>