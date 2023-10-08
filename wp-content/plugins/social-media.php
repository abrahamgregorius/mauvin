<?php
/*
    Plugin Name: SocialMediaIcons
    Description: Add your social media links
*/

function social_init() {
    register_post_type('social-media', [
        'public' => true,
        'label' => 'Social Links',
        'supports' => ['title'],
        'menu_icon' => 'dashicons-facebook'
    ]);
}


add_action('init', 'social_init');

    
?>