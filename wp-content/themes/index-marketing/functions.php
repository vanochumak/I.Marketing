<?php
/**
 * INCLUDE CUSTOM POST TYPE
 */
require get_template_directory() . '/inc/post-types.php';

 /**
  * The register miniature
  */
if (function_exists('add_theme_support')){
       add_theme_support('post-thumbnails');
}

/**
 * FUNCTION DISPLAY IMAGES
 * @param mixed $pid
 * @param mixed $size
 */
function get_image_by_id($pid, $size = ''){
    $img = false;
    $thumbnail_id = get_post_thumbnail_id($pid);
    if($thumbnail_id)
        $img = wp_get_attachment_image_src($thumbnail_id, $size);
    return $img;
}

/**
 * INCLUDE JAVASCRIPT AND CSS FILES
 */
include( get_template_directory() . '/includes/enqueue-script-style.php');
/**
 * INCLUDE OTHER FILES
 */
include( get_template_directory() . '/includes/template-functions.php');
include( get_template_directory() . '/includes/admin/theme-options.php');

/**
 * REGISTER MENU
 */
register_nav_menus( array(
        'main_menu'=> 'main-menu',
        'footer_menu'=> 'footer-menu',
    ) );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


