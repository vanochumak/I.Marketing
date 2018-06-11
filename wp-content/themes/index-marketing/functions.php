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
require( get_template_directory() . '/includes/enqueue-script-style.php');
/**
 * INCLUDE OTHER FILES
 */
require( get_template_directory() . '/includes/template-functions.php');
require( get_template_directory() . '/includes/functions/acf-functions.php');
require( get_template_directory() . '/includes/functions/pagination.php');
require( get_template_directory() . '/includes/admin/theme-options.php');

/**
 * REGISTER MENU
 */
register_nav_menus( array(
        'primary'       => 'Main menu',
        'footer_menu'   => 'footer-menu',
));



