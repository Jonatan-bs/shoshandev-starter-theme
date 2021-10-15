
<?php
/**
 * Add theme support
 */
function sst_theme_support() {
    add_theme_support( 'title-tag' ); 

    /**
     * Add post thumbnail/featured image support
    */
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'sst_theme_support' );

/**
 * Add logo custom support
*/

function sst_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 150,
        'flex-height'          => false,
        'flex-width'           => false,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'sst_custom_logo_setup' );


/**
 *  Set the maximum allowed width for any content in the theme
*/
if ( ! isset( $content_width ) ) $content_width = 900;

/**
 * Pagination with numbers
 */

function paginationWordPress(){

    global $wp_query; 
    $allPages = $wp_query->max_num_pages; 
    if($allPages>0){  
        $currentPage = max(1,get_query_var('paged'));  
        $args = array(  
        'format'=>get_site_url().'/page/%#%',  
        'base' => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'mid_size'=>2,  
        'current'=>$currentPage,
        'prev_next' => false,
        );
        ob_start(); ?>

        <div class="pagination gap-10 w-full flex justify-center mt-20">
            
            <div class="prev"><?php previous_posts_link( '<<' ); ?></div>
            
            <div class="numbers flex justify-center">
                <?php echo paginate_links($args); ?>
            </div>
            
            <div class="flex justify-end next"><?php next_posts_link( '>>' ); ?></div> 
        </div>
        <?php
        ob_flush();
    }
}