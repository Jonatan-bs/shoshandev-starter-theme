
<?php

$content ='
<!-- wp:group {"templateLock":"all","align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Featured Collection</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">A powerful headline about your product’s features to give focus to your chosen product collection</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":56} -->
<div style="height:56px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:sst/featured-products /-->

<!-- wp:spacer {"height":156} -->
<div style="height:156px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->';

register_block_pattern(
    'sst/featured-products',
    array(
        'categories'       => ["sst-frontpage"],
        'title'       => __( 'Featured Products', 'sst' ),
        'content'     => $content,
    )
); 
