<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'Blog Settings',
        'menu_title'	=> 'Blog Settings',
        'menu_slug' 	=> 'blog-options-settings',
        //'capability' 	=> 'edit_posts',
        'parent_slug'	=> 'edit.php',
        'redirect'		=> false
    ));
//    $parent_settings = acf_add_options_page(array(
//        'page_title' 	=> __('Theme General Settings', 'admin_domain'),
//        'menu_title' 	=> __('Theme Settings', 'admin_domain'),
//        'menu_slug' 	=> 'theme-general-settings',
//        'capability' 	=> 'edit_posts',
//        'redirect' 	=> false
//    ));

//    print_r($parent_settings);

}
add_action('admin_menu', 'add_options_pages');
function add_options_pages() {
    if (!function_exists('acf_add_options_page')) {
        return;
    }
    $parent_settings = acf_add_options_page(array(
        'page_title' 	=> __('Theme General Settings', 'admin_domain'),
        'menu_title' 	=> __('Theme Settings', 'admin_domain'),
        'menu_slug' 	=> 'theme-general-settings',
    ));
    $parent = $parent_settings['menu_slug'];
    $sub_options_pages = array('General', 'Header', 'Footer');
    foreach ($sub_options_pages as $title) {
        acf_add_options_sub_page(
            array(
                'page_title' => $title,
                'parent_slug' => $parent
            ));
    }

}
