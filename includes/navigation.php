<?php

/**
 * Add classes on nav links
 */
function sst_menu_add_class( $attrs, $item, $args ) {
    if(isset($args->add_anchor_class)) {
        $attrs['class'] = $args->add_anchor_class;
    }
    return $attrs;
}
add_filter( 'nav_menu_link_attributes', 'sst_menu_add_class', 10, 3 );