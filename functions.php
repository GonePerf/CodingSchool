<?php
// Adding the css and js files
function gt_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono&display=swap');
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', NULL, microtime(), true );
}
add_action('wp_enqueue_scripts', 'gt_setup');

function gt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'coment-form', 'search-form')
);
}

add_action('after_setup_theme', 'gt_init');

// function gt_custom_post_type() {
//     register_post_type('project',
//         array(
//             'rewrite' => array('slug' => 'projects'),
//             'labels' =>array(
//                 'name' => 'Projects',
//                 'singularname' => 'Project',
//                 'Add_new_item' => 'Add New Project',
//                 'edit_item' => 'Edit Project'
//             ),
//             'menu-icon' => 'dashicons-clipboard',
//             'public' => true,
//             'has_archive' => true,
//             'supports' => array(
//                 'title', 'thumbnail', 'editor', 'excerpt', 'comments'
//             )
//         )
//     );
// }

// add_action('init','gt_custom_post_type');

?>
