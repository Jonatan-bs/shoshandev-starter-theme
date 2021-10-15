
<?php

$content ='
<!-- wp:group {"align":"full", "templateLock":"all"} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"http://localhost:3000/wordpress-startertheme/wp-content/uploads/2021/10/Heroc.jpeg","id":598,"dimRatio":0,"focalPoint":{"x":"1.00","y":"0.61"},"align":"full","className":"frontpage_hero"} -->
<div class="wp-block-cover alignfull frontpage_hero"><img class="wp-block-cover__image-background wp-image-598" alt="" src="http://localhost:3000/wordpress-startertheme/wp-content/uploads/2021/10/Heroc.jpeg" style="object-position:100% 61%" data-object-fit="cover" data-object-position="100% 61%"/><div class="wp-block-cover__inner-container"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textColor":"black","fontSize":"5xl"} -->
<h2 class="has-black-color has-text-color has-5-xl-font-size"><meta charset="utf-8">Headline that grabs people’s attention</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-big"} -->
<div class="wp-block-button is-style-big"><a class="wp-block-button__link">SHOP NOW</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>

<!-- wp:spacer {"height":90} -->
<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- /wp:group -->';


register_block_pattern(
    'sst/frontpage-hero',
    array(
        'categories'       => ["sst-frontpage"],
        'title'       => __( 'Frontpage hero', 'sst' ),
        'content'     => $content,
    )
); 
