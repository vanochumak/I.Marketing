<?php
// Custom Post Type
add_action( 'init', 'custom_post_type' );
function custom_post_type() {

    //Slider
    $labels = array(
        'name'               => _x( 'Slider', 'post type general name' ),
        'singular_name'      => _x( 'Slider', 'post type singular name' ),
        'menu_name'          => _x( 'Slider', 'admin menu' ),
        'name_admin_bar'     => _x( 'Slider', 'add new on admin bar' ),
        'add_new'            => _x( 'Add Slider', 'slider' ),
        'add_new_item'       => __( 'Add Slider' ),
        'new_item'           => __( 'New Slider' ),
        'edit_item'          => __( 'Edit Slider' ),
        'view_item'          => __( 'View Page' ),
        'all_items'          => __( 'All Slider' ),
        'search_items'       => __( 'Search Slider' ),
        'parent_item_colon'  => __( 'Parent Slider:' ),
        'not_found'          => __( 'No data' ),
        'not_found_in_trash' => __( 'No Slider found in Trash.' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 10,
        'menu_icon'          => 'dashicons-images-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'supports'           => array( 'title', 'thumbnail', 'excerpt','editor','author','trackbacks','custom-fields','page-attributes','post-formats','revisions'),
    );
    register_post_type( 'slider', $args ); 
    /**
     * START MAP
     * 
     * @var mixed
     */
    $labels = array(
        'name'               => _x( 'Marker Map', 'post type general name' ),
        'singular_name'      => _x( 'Marker Map', 'post type singular name' ),
        'menu_name'          => _x( 'Marker Map', 'admin menu' ),
        'name_admin_bar'     => _x( 'Map', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New Address', 'map' ),
        'add_new_item'       => __( 'Add New Address' ),
        'new_item'           => __( 'New Address' ),
        'edit_item'          => __( 'Edit Address' ),
        'view_item'          => __( 'View Address' ),
        'all_items'          => __( 'All Address' ),
        'search_items'       => __( 'Search Address' ),
        'parent_item_colon'  => __( 'Parent Address:' ),
        'not_found'          => __( 'No data' ),
        'not_found_in_trash' => __( 'No Slider found in Trash.' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 10,
        'menu_icon'          => 'dashicons-location-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'map' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'supports'           => array( 'title', 'thumbnail', 'excerpt','editor','author','trackbacks','custom-fields','page-attributes','post-formats','revisions'),
    );
    register_post_type( 'map', $args );          
}



