<?php

function tenizen_scripts() {
    wp_enqueue_style('style-css', get_theme_file_uri('./css/style.css') , []);
}

function tenizen_init() {
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_post_type('testimonial', [
        'public' => true,
        'label' => 'Testimonies',
        'supports' => ['title', 'editor', 'thumbnail']
    ]);

    register_post_type('project', [
        'public' => true,
        'label' => "Projects",
        'supports' => ['title', "editor", "thumbnail", "excerpt"]
    ]);

}

add_action("wp_enqueue_scripts", "tenizen_scripts");
add_action('init', 'tenizen_init');

?>