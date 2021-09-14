<?php 
    // $attributes, $content
    $style = $attributes['style'] ? "style-".$attributes['style'] : '';
    $text = $attributes['text'];
    $opensInNewTab = $attributes['link']['opensInNewTab'];
    $link = $attributes['link']['url'];
    $alignment = $attributes['alignment'];
?>


<div class="wp-block-sst-button" style="--alignment:<?php echo $alignment ?>">
    <a href="<?php echo $link;?>" target="<?php echo $opensInNewTab? "_blank" : '';?>" class="sst_button <?php echo $style;  ?>">
        <?php echo $text; ?>
    </a>
</div>



