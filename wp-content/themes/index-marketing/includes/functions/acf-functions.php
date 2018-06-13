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
}