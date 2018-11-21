<?php
/**
 * FUNCTION ADD CLASS ON ITEM MENU
 * @param mixed $classes
 * @param mixed $item
 */
function special_nav_class($classes, $item){
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
/**
 * @param $scripts
 */
function remove_jquery_migrate( &$scripts){
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.2.1' );
    }
}
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

/**===============================================================
 * 							System Functions
=================================================================/
/**
 * Debug function
 * @param mixed $var
 * @param string $label
 * @param boolean $die
 */
function custom_print_r($var, $label = '', $die = true) {
    echo $label . ': <pre>';
    print_r($var);
    echo '</pre>';
    if ($die) {
        die();
    }
}

//$all_options = get_option('theme_options'); // это массив
//print_r($all_options);


add_action('admin_enqueue_scripts', 'uploader_javaScript');

function uploader_javaScript() {
    if (isset($_GET['page']) && $_GET['page'] == 'theme-parameters.php') {
        wp_enqueue_media();
        wp_register_script('admin', get_stylesheet_directory_uri().'/includes/admin/js/admin.js', array('jquery'));
        wp_enqueue_script('admin');
    }
}

/**
 * The function show button links external or internal
 * @param $field
 * @param $external
 * @param $internal
 * @return mixed
 */
function button_link($field, $external, $internal ) {
    switch ($field) {
        case 'external':
            $button = $external;
            break;
        case 'internal':
            $button = $internal;
            break;
    }
    return $button;
}

/**
 * @param $type_content
 * @return string
 */
function type_content_main_blog($type_content) {
    switch ($type_content) {
        case 'image':
            $class = '';
            break;
        case 'quote':
            $class = 'b-quote';
            break;
        case 'video':
            $class = 'b-video';
            break;
    }
    return $class;
}

