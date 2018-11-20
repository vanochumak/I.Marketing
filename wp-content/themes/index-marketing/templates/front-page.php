<?php
/**
 * Template Name: Home page
 */
get_header();
    require( get_template_directory() . '/templates/home-page/home-page-first-block.php');
    require( get_template_directory() . '/templates/home-page/home-page-second-block.php');
    require( get_template_directory() . '/templates/home-page/home-page-third-block.php');

    if ( have_rows( 'standard_sections' ) ) {
    while ( have_rows( 'standard_sections' ) ) {
        the_row();
        $row_layout = get_row_layout();
        switch ( $row_layout ) {
            case 'first_section':
                get_template_part( 'templates/home-page/inc/first_section.inc' );
                break;
            default:
                trigger_error( 'Error loading template for layout <strong>' . $row_layout . '</strong>', E_USER_WARNING );
                break;
        }
    }
}


get_footer();