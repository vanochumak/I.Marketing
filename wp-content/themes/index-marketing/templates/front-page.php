<?php
/**
 * Template Name: Home page
 */
get_header();
    if ( have_rows( 'standard_sections' ) ) {
    while ( have_rows( 'standard_sections' ) ) {
        the_row();
        $row_layout = get_row_layout();
        switch ( $row_layout ) {
            case 'first_section':
                get_template_part( 'templates/home-page/inc/first_section.inc' );
                break;
            case 'second_section':
                get_template_part( 'templates/home-page/inc/second_section.inc' );
                break;
            case 'third_section':
                get_template_part( 'templates/home-page/inc/third_section.inc' );
                break;
            case 'fourth_section':
                get_template_part( 'templates/home-page/inc/fourth_section.inc' );
                break;
            default:
                trigger_error( 'Error loading template for layout <strong>' . $row_layout . '</strong>', E_USER_WARNING );
                break;
        }
    }
}
get_footer();