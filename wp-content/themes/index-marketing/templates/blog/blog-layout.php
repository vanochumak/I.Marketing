<?php
if ( have_rows( 'layout_blog' ) ) {
    while ( have_rows( 'layout_blog' ) ) {
        the_row();
        $row_layout = get_row_layout();
        switch ( $row_layout ) {
            case 'layout_text_big':
                get_template_part( 'templates/blog/layout_text_big' );
                break;
            case 'layout_image':
                get_template_part( 'templates/blog/layout_image' );
                break;
            case 'layout_content':
                get_template_part( 'templates/blog/layout_content' );
                break;
            case 'layout_quote':
                get_template_part( 'templates/blog/layout_quote' );
                break;
            default:
                trigger_error( 'Error loading template for layout <strong>' . $row_layout . '</strong>', E_USER_WARNING );
                break;
        }
    }
}
