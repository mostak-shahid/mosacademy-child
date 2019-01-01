<?php
// function parent_theme_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css'/*, array('owl.theme.default.min')*/ );

// }
// add_action( 'wp_enqueue_scripts', 'parent_theme_enqueue_styles', 999 );
function child_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'main.min' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );



//require_once(get_template_directory_uri() . '/functions/array.php');
//require_once( get_stylesheet_directory() . '/functions/array.php');
//include( '../mosacademy/functions/array.php');
require_once('functions/config.php');
require_once(get_template_directory() . '/functions/array.php');
require_once('functions/array.php');
// require_once('functions/post-types.php');
// require_once('functions/taxonomy.php');
// require_once('functions/metaboxes.php');
// require_once('functions/shortcodes.php');
// require_once('functions/theme-hooks.php');
// require_once('functions/setup.php');




