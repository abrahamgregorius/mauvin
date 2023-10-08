<?php
/*
    Plugin Name: GalleryPlug

*/

    add_action('init', 'gallery_init');

    function gallery_init() {
        register_post_type('gallery', [
            'public' => true,
            'label' => 'Gallery',
            'supports' => ['title']
        ]);
    }
    
    // Usage: [gallery id=1]
    add_shortcode('gallery', function($attrs){
        $id = $attrs['id'];
        $gallery_post = get_post($id);
        $field = get_field('image', $id);

        ?> 
        
        <h3>Gallery: </h3>

        <div class="grid grid-cols-lg-3">
        <?php 
        foreach($field as $image) : ?>
            <div class="image">
                <img src="<?= $image->guid ?>" alt="">
            </div>


        <?php endforeach; ?> 
        </div>
        
        <?php 
    });

    
?>