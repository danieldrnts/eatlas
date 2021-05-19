<!-- <div class="card bg-dark text-white">
    <img src="https://source.unsplash.com/random" class="card-img" alt="...">
    <div class="card-img-overlay">
        <div class="card-body bg-warning position-absolute bottom-0">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">Last updated 3 mins ago</p>
        </div>

    </div>
</div> -->


<?php

// Set defaults.
// $args = wp_parse_args(
//     $args,
//     array(
//         'name' => '',
//         'age' => 0,
//     )
// );



?>

<div class="card" style="width: 18rem;">
    <img src="https://source.unsplash.com/random" class="img-fluid card-img-top" alt="...">
    <div class="card-body">
        <div class="card-title">
            <?php echo $args['post_title'] ?></div>
            <div class="short-long-text" style="height: 5em;">
                <?php print_r($args['post_content']) ?>
                <?php //  echo "<p class='text-break'>{$args['post_content']}</p>" ?>
                <!-- <p class="card-text "></p> -->
            </div>
    </div>

</div>