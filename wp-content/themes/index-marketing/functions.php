<?php
/**
 * INCLUDE CUSTOM POST TYPE
 */
require get_template_directory() . '/inc/post-types.php';
 /*
  * The register miniature
  */
if (function_exists('add_theme_support')){
       add_theme_support('post-thumbnails');
}

/*
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

/*
 * INCLUDE JAVASCRIPT FILES
 */
include( get_template_directory() . '/includes/javascript/js_enqueue.php');

/*
 * INCLUDE CSS FILES
 */
include( get_template_directory() . '/includes/css/css_enqueue.php');

/**
 * INCLUDE FUNCTION MAIN MENU
 */
include( get_template_directory() . '/includes/menu/uis_menu.php');
/*
 * INCLUDE WIDGETS
 */
include( get_template_directory() . '/widgets/widgets.php');
include( get_template_directory() . '/widgets/widgets/contact_details_homepage.php');
include( get_template_directory() . '/widgets/widgets/social_widget.php');
include( get_template_directory() . '/widgets/widgets/ukrinsoft_in_numbers_widget.php');
include( get_template_directory() . '/widgets/widgets/check_out_latest_project.php');


//ACTION & FILTER HOOKS
add_action( 'widgets_init', 'ukr_widgets' );
/**
 * REGISTER MENU
 */
register_nav_menus( array(
        'main_menu'=> 'main-menu',
        'footer_menu'=> 'footer-menu',
    ) );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/*
 * FUNCTION ADD CLASS ON ITEM MENU
 * 
 * @param mixed $classes
 * @param mixed $item
 */
function special_nav_class($classes, $item){
//        if (in_array('menu-item', $classes)) {
//            $classes[] = 'col-sm-15';
//        }
        if (in_array('menu-item-830', $classes)) {
            $classes[] = 'col-sm-15';
        }
        if (in_array('menu-item-1423', $classes)) {
            $classes[] = 'col-sm-15';
        }
        if (in_array('menu-item-740', $classes)) {
            $classes[] = 'col-sm-15';
        }
        if (in_array('menu-item-1375', $classes)) {
            $classes[] = 'col-sm-15';
        }
        if (in_array('menu-item-1626', $classes)) {
            $classes[] = 'col-sm-15';
        }
    if (in_array('menu-item-1625', $classes)) {
            $classes[] = 'col-sm-15';
        }
     return $classes;
}

//function add_classes_on_li($classes, $item, $args) {
//
//    $classes[] = 'test_class';
//    return $classes;
//}
//add_filter('nav_menu_css_class','add_classes_on_li',1,3);

define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
define('ICL_DONT_LOAD_NAVIGATION_CSS', true);

/*
 * Add specific CSS class by filter
 */
add_filter('body_class','error_body_classes');
function error_body_classes($classes) {
    if (is_404()) {
        $classes[] = 'not-found-page';
    }
    return $classes;
}

function url_function() {
    global $post;
    get_permalink($post->ID);
}
/**
 * Added permissions to access page with widget for role Editor.
 * 
 * @var mixed
 */
$role_object_editor = get_role( 'editor' );
$role_object_editor->add_cap( 'edit_theme_options' );

$ref_url = wp_get_referer();
$ref_parse = parse_url($ref_url);
$my_parse  = parse_url(get_permalink());
if (($ref_url == get_permalink() || empty($ref_url)) && $post->post_parent) {
    $show_back_to_parent = true;
    $ref_url = get_permalink($post->post_parent);
}


add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts){
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.2.1' );
    }
}

//function add_active_class_to_nav_menu($classes) {
//    if (in_array('current-menu-item', $classes, true) || in_array('current_page_item', $classes, true)) {
//        $classes = array_diff($classes, array('current-menu-item', 'current_page_item', 'active'));
//        $classes[] = 'active';
//    }
//    return $classes;
//}



?>