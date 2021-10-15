
<?php

$content ='<!-- wp:group {"align":"full", "templateLock":"all"} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"http://localhost:3000/wordpress-startertheme/wp-content/uploads/2021/10/hbg-1-1024x412-1.webp","id":711,"dimRatio":0,"align":"full","className":"highlighted-section"} -->
<div class="wp-block-cover alignfull highlighted-section"><img class="wp-block-cover__image-background wp-image-711" alt="" src="http://localhost:3000/wordpress-startertheme/wp-content/uploads/2021/10/hbg-1-1024x412-1.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","textColor":"black","fontSize":"3xl"} -->
<h2 class="has-text-align-center has-black-color has-text-color has-3-xl-font-size">Highlighted Section</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color">What differentiates you from the competition? Use this section to talk about it. Don’t forget to talk about the benefits.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-big"} -->
<div class="wp-block-button is-style-big"><a class="wp-block-button__link">SHOP NOW</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->';

register_block_pattern(
    'sst/highligted-section',
    array(
        'categories'       => ["sst-frontpage"],
        'title'       => __( 'Highligted section', 'sst' ),
        'content'     => $content,
    )
); 
