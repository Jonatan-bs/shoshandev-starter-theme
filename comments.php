<?php 
    echo get_comments_number();
?>

<?php 
    wp_list_comments( 
        array(
            'avatar_size'   => 120,
            'style'         => 'div',
        )
    );


    comment_form( 
        array(
            'class_form'            => '',
            'title_reply_before'    => '<h2>',
            'title_reply_after'    => '</h2>'
        ) 
    );