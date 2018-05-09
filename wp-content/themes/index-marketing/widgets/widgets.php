<?php
/**
 * REGISTER SIDEBAR
 **/
function ukr_widgets(){
    if ( function_exists('register_sidebar') ){ 
        register_sidebar(array(
            'name' => __( 'LANGUAGE', wp_title()),
            'description' => __( '', wp_title() ),
        ) );
        register_sidebar(array(
            'name' => __( 'CONTACT COMPYNE HOMEPAGE', wp_title()),
            'description' => __( 'contact company', wp_title() ),
        ) );
        register_sidebar(array(
            'name' => __( 'DETAILS OF THE COMPONE IN SOCIAL NETWORKS', wp_title()),
            'description' => __( 'footer internal page ', wp_title() ),
        ) );
        register_sidebar(array(
            'name' => __( 'CHECK OUT LATEST PROJECT', wp_title()),
            'description' => __( 'sidebar a page ', wp_title() ),
        ) );
        register_sidebar(array(
            'name' => __( 'UKRINSOFT IN NUMBERS', wp_title()),
            'description' => __( 'ukrinsoft in numbers ', wp_title() ),
        ) ); 
        register_sidebar(array(
            'name' => __( 'FACEBOOK', wp_title()),
            'description' => __( 'ukrinsoft facebook ', wp_title() ),
            'before_widget' => '<div class="facebook_widget" style="margin-left:-25px;">',
            'after_widget' => '</div>',
        ) );
        register_sidebar(array(
            'name' => __( 'LINKEDIT', wp_title()),
            'description' => __( 'linkedin', wp_title() ),
            'before_widget' => '',
            'after_widget' => '',
        ) );
    }    
}
?>
