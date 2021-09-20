<?php
function sst_loadmore_callback_handler() {

$postType = $_POST['postType'];
$postsLoaded = $_POST['postsLoaded']; // Posts loaded so far
$postsPerLoad = $_POST['postsPerLoad']; // Posts to load on each request   
$postsCount = $_POST['postsCount']; // Amount of posts in query
$postsOrder = $_POST['postsOrder']; // Amount of posts in query

header("Content-Type: text/html");

// Return if theres no more posts
if( $postsLoaded>=$postsCount ) wp_send_json_success("no more posts");

$args = array(
    'post_type' => $postType,
    'posts_per_page' => $postsPerLoad,
    'offset' => $postsLoaded,
    'order' => $postsOrder
);

$query = new WP_Query( $args );

ob_start();
if ( $query->have_posts() ) {  while ( $query->have_posts() ) { $query->the_post();
    get_template_part("template-parts/partial", "post-card");
}}

$response = Array(
    'domObject' => ob_get_clean(),
    'postsLoaded' => $postsLoaded + $postsPerLoad
);

wp_send_json_success($response);

die();
}

add_action( 'wp_ajax_sst_loadmore', 'sst_loadmore_callback_handler' );