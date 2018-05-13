<?php
$theme_page = 'theme-parameters.php'; // это часть URL страницы, рекомендую использовать строковое значение, т.к. в данном случае не будет зависимости от того, в какой файл вы всё это вставите

/**
 * Function that adds a page to the Settings menu item in the backend.
 */
function theme_options() {
    global $theme_page;
    add_menu_page( 'Theme Options', 'Theme Options', 'manage_options', $theme_page, 'theme_option_page');
}
add_action('admin_menu', 'theme_options');

/**
 * Возвратная функция (Callback)
 */
function theme_option_page(){
    global $theme_page;
    ?>
    <div class="wrap">
        <h2><?php _e('Additional parameters theme'); ?></h2>
        <form method="post" enctype="multipart/form-data" action="options.php">
            <?php
            settings_fields('theme_options'); // change for themselves only here (the name of the settings)
            do_settings_sections($theme_page);
            ?>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>
    <?php
}

/**
 * Register settings
 * Settings will be stored in a database called theme_options (this is also seen in the previous function)
 */
function theme_option_settings() {
    global $theme_page;
    // Assign the validation function (theme_validate_settings ()). You will find it below
    register_setting( 'theme_options', 'theme_options', 'theme_validate_settings' ); // theme_options

    // Adding section
    add_settings_section( 'theme_section_header', 'Header', '', $theme_page );

    // Create a text box in the first section for the phone number
    /*$theme_field_params = array(
        'type'      => 'upload', // type field
        'title'     => __( 'Example upload Input' ),
        'id'        => 'theme_logo',
        'std'       => 'Theme logo',
        'desc'      => 'Upload or put the site logo link ', // description
        'label_for' => 'theme_logo' // allows you to make the name of the setting label (if you do not understand what it is, you can not use), in theory should be the same with the parameter id
    );
    add_settings_field( 'theme_logo_field', 'Theme logo', 'theme_option_display_settings', $theme_page, 'theme_section_header', $theme_field_params );
*/
    // Create a text box in the first section for the phone number
    $theme_field_params = array(
        'type'      => 'text', // type field
        'id'        => 'theme_phone_number',
        'std'       => 'Phone Theme number',
        'desc'      => 'Phone number', // description
        'label_for' => 'theme_phone_number' // allows you to make the name of the setting label (if you do not understand what it is, you can not use), in theory should be the same with the parameter id
    );
    add_settings_field( 'phone_number_text_field', 'Phone number', 'theme_option_display_settings', $theme_page, 'theme_section_header', $theme_field_params );


    //Create textarea in the Footer section
    add_settings_section( 'theme_section_footer', 'Footer', '', $theme_page );


    $theme_field_params = array(
        'type'      => 'title_footer_left',
        'id'        => 'theme_title_footer_left',
        'std'       => '',
        'desc'      => 'Title',
        'label_for' => 'theme_title_footer_left'
    );
    add_settings_field( 'title_footer_left_field', 'Title', 'theme_option_display_settings', $theme_page, 'theme_section_footer', $theme_field_params );

    $theme_field_params = array(
        'type'      => 'title_footer_left_2',
        'id'        => 'theme_title_footer_left_2',
        'std'       => '',
        'desc'      => 'Title 2',
        'label_for' => 'theme_title_footer_left_2'
    );
    add_settings_field( 'title_footer_left_2_field', 'Title 2', 'theme_option_display_settings', $theme_page, 'theme_section_footer', $theme_field_params );

    $theme_field_params = array(
        'type'      => 'textarea',
        'id'        => 'theme_text_footer_left',
        'std'       => 'What we do',
        'desc'      => 'Text for block what we do',
        'label_for' => 'theme_text_footer_left'
    );
    add_settings_field( 'footer_left_textarea_field', 'Text for block what we do', 'theme_option_display_settings', $theme_page, 'theme_section_footer', $theme_field_params );

    $theme_field_params = array(
        'type'      => 'instagram_title',
        'id'        => 'instagram_title',
        'std'       => '',
        'desc'      => 'Instagram feed title',
        'label_for' => 'instagram_feed'
    );
    add_settings_field( 'instagram_title', 'Title Instagram Feed', 'theme_option_display_settings', $theme_page, 'theme_section_footer', $theme_field_params );

    $theme_field_params = array(
        'type'      => 'instagram_feed',
        'id'        => 'instagram_feed',
        'std'       => '',
        'desc'      => 'Instagram feed',
        'label_for' => 'instagram_feed'
    );
    add_settings_field( 'instagram_feed', 'Instagram Feed', 'theme_option_display_settings', $theme_page, 'theme_section_footer', $theme_field_params );

    $theme_field_params = array(
        'type'      => 'newsletter',
        'id'        => 'newsletter',
        'std'       => '',
        'desc'      => 'Newsletter title',
        'label_for' => 'newsletter'
    );
    add_settings_field( 'newsletter', 'Newsletter Title', 'theme_option_display_settings', $theme_page, 'theme_section_footer', $theme_field_params );

    $theme_field_params = array(
        'type'      => 'newsletter_text',
        'id'        => 'newsletter_text',
        'std'       => '',
        'desc'      => 'Newsletter content',
        'label_for' => 'newsletter_text'
    );
    add_settings_field( 'newsletter_textarea_field', 'Newsletter content', 'theme_option_display_settings', $theme_page, 'theme_section_footer', $theme_field_params );
    $theme_field_params = array(
        'type'      => 'copyright_text',
        'id'        => 'copyright_text',
        'std'       => '',
        'desc'      => 'Copyright content',
        'label_for' => 'copyright_text'
    );
    add_settings_field( 'copyright_textarea_field', 'Copyright content', 'theme_option_display_settings', $theme_page, 'theme_section_footer', $theme_field_params );

}
add_action( 'admin_init', 'theme_option_settings' );

/*
 * A function of displaying input fields
 * Here you can define the HTML and PHP that outputs the fields
 */
function theme_option_display_settings($field) {
    extract( $field );

    $option_name = 'theme_options';
    $type        =  $field['type'];
    $desc        =  $field['desc'];
    $id          =  $field['id'];
    $option      = get_option( $option_name );
    //print_r($field);
    switch ( $type ) {
       /* case 'upload':
            $o[$id] = esc_attr( stripslashes($o[$id]) );
            echo "<input class='regular-text regular-'$id' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";
            echo "<input class='upload_file regular-'$id' type='file' id='$id' name='" . $option_name . "[$id]' value='Upload File' />";

            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";




            ?>
            <input id="upload_image" type="text" size="36" name="my_image" value="<?php  echo $o[$id]; ?>" />
            <input id="upload_image_button" class="button" type="button" value="<?php esc_attr_e('Upload Image'); ?>" />

<?php


            break;*/
        case 'text':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$option[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'title_footer_left':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$option[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'title_footer_left_2':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$option[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'textarea':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$option[$id]</textarea>";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'instagram_title':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$option[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'instagram_feed':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$option[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;;
        case 'newsletter':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$option[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'newsletter_text':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$option[$id]</textarea>";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'copyright_text':
            $option[$id] = esc_attr( stripslashes($option[$id]) );
            echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$option[$id]</textarea>";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
    }
}

/*
 * Function validation input fields
 */
function theme_validate_settings($input) {
    foreach($input as $k => $v) {
        $valid_input[$k] = trim($v);

        /* Вы можете включить в эту функцию различные проверки значений, например
        if(! задаем условие ) { // если не выполняется
            $valid_input[$k] = ''; // тогда присваиваем значению пустую строку
        }
        */
    }
    return $valid_input;
}


