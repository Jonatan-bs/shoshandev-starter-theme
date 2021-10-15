
<?php

$content ='
<!-- wp:group {"templateLock":"all","align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Featured Categories</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Give your customers insight into your product collection. Select imagery and name that relates to the product category.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":56} -->
<div style="height:56px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"featured-categories"} -->
<div class="wp-block-group featured-categories"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":728,"sizeSlug":"full","linkDestination":"custom","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><a href="http://localhost:3000/wordpress-startertheme/dummy/"><img src="http://localhost:3000/wordpress-startertheme/wp-content/uploads/2021/10/Rectangle-581-1.jpeg" alt="" class="wp-image-728"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} -->
<p class="has-text-align-center has-link-color"><meta charset="utf-8"><a href="https://demo.athemes.com/botiga/product-category/cosmetics/">Makeup</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":734,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="http://localhost:3000/wordpress-startertheme/wp-content/uploads/2021/10/Rectangle-582-1.jpeg" alt="" class="wp-image-734"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} -->
<p class="has-text-align-center has-link-color"><meta charset="utf-8"><a href="https://demo.athemes.com/botiga/product-category/cosmetics/">Makeup</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":735,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="http://localhost:3000/wordpress-startertheme/wp-content/uploads/2021/10/Rectangle-583-1.jpeg" alt="" class="wp-image-735"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} -->
<p class="has-text-align-center has-link-color"><meta charset="utf-8"><a href="https://demo.athemes.com/botiga/product-category/cosmetics/">Makeup</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":736,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="http://localhost:3000/wordpress-startertheme/wp-content/uploads/2021/10/Rectangle-584-1.jpeg" alt="" class="wp-image-736"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} -->
<p class="has-text-align-center has-link-color"><meta charset="utf-8"><a href="https://demo.athemes.com/botiga/product-category/cosmetics/">Makeup</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
';


register_block_pattern(
    'sst/featured-categories',
    array(
        'categories'       => ["sst-frontpage"],
        'title'       => __( 'Featured Categories', 'sst' ),
        'content'     => $content,
    )
); 
