<?php 
    // $attributes, $content
    $imageId = $attributes['image']['id'];

?>


<div class="wp-block-sst-imageandtext flex bg-blue-500">
    <div class="w-1/2">
        <div class="aspect-w-16 aspect-h-9">
            <?php 
                echo wp_get_attachment_image($imageId , array('class' => ' object-cover object-center'));
            ?>
        </div>
    </div>
    <div>
        
    </div>
</div>



