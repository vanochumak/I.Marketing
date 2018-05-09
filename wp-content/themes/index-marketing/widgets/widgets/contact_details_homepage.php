<?php
  /**
 * THE WIDGET FOR DISPLANING CONTACTS DETAILS OF THE COMPANY IN THE BACKEND
 ******************************************************************************/
class contact_details_homepageWidget extends WP_Widget {
    /**
     * Add widget
     */
    function __construct() {
        parent::__construct(
            'contact_details_homepageWidget',
            'Contact details of the company', // titel widget
            array( 'description' => 'Contact details of the company' )
        );
    }
    /**
     * Forntend widget
     *
     * @param mixed $args
     * @param mixed $instance
     */
    public function widget( $args, $instance ) {
        extract( $args );
        // these are the widget options
        $title_office  = apply_filters('widget_title', $instance['title_office']);
        $text_address  = $instance['text_address'];
        $time_working  = $instance['time_working'];
        // Start block contact
        $title_contact = $instance['title_contact'];
        $email         = $instance['email'];
        $phone         = $instance['phone'];
        $fax           = $instance['fax'];
        // Start block social
        $title_social = $instance['title_social'];
        $facebook     = $instance['facebook'];
        $twitter      = $instance['twitter'];
        $linked       = $instance['linked'];
        //echo $before_widget;
        // Display the widget
        echo '<div class="col-xs-12 col-sm-6 col-md-3">';
            echo '<div class="block">';
                echo '<h3>';
                    // Check if title is set
                    if ( $title_office ) {
                        echo $title_office;
                    }
                echo '</h3>';
                // Check if textarea is set
                if( $text_address ) {
                    echo '<p>'.$text_address.'</p>';
                }
                if( $time_working ) {
                    echo '<p>'.$time_working.'</p>';
                }
            echo '</div>';
        echo '</div>';
        // Start block contact
        echo '<div class="col-xs-12 col-sm-6 col-md-3">';
            echo '<div class="block">';
                echo '<h3>';
                    // Check if title is set
                    if ( $title_contact ) {
                        echo  $title_contact;
                    }
                echo '</h3>';
                echo '<table><tbody><tr>';
                 //Check if textarea is set
                if( $email ) {
                    echo '<td>Email:</td>';
                    echo '<td><a href="mailto:'.$email.'">'.$email.'</a></td></tr>';
                }
                if( $phone ) {
                    echo '<tr><td>Phone:</td>';
                    echo '<td>'.$phone.'</td></tr>';
                }
                if( $fax ) {
                    echo '<tr><td>Fax:</td>';
                    echo '<td>'.$fax.'</td>';
                }
                echo '</tr></tbody></table>';
            echo '</div>';
        echo '</div>';
        // Start social
        echo '<div class="col-xs-12 col-md-6">';
            echo '<div class="block text-center">';
                echo '<h3 class="kg-always">';
                    if ($title_social){
                        echo  $title_social;
                    }
                echo '</h3>';  ?>
                <ul class="social">
                    <li>
                        <a href="<?php echo $facebook; ?>" target="_blank">
                            <span class="circle blue"><i class="fa fa-facebook"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $twitter;?>" target="_blank">
                            <span class="circle pink"><i class="fa fa-twitter"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $linked;?>" target="_blank">
                            <span class="circle green"><i class="fa fa-linkedin"></i></span>
                        </a>
                    </li>
                </ul>
        <?php
            echo '</div>';
        echo '</div>';
        //echo $after_widget;
    }
    /**
     * Backend widget
     *
     * @param mixed $instance
     */
    public function form( $instance ) {
        // Check values
        if( $instance) {
            $title_office  = esc_attr($instance['title_office']);
            $text_address  = $instance['text_address'];
            $time_working  = $instance['time_working'];
            //Staret block contact
            $title_contact = esc_attr($instance['title_contact']);
            $email         = $instance['email'];
            $phone         = $instance['phone'];
            $fax           = $instance['fax'];
            //Staret block social
            $title_social  = esc_attr($instance['title_social']);
            $facebook      = $instance['facebook'];
            $twitter       = $instance['twitter'];
            $linked      = $instance['linked'];
        } else {
            $title_office = ''; $text_address = ''; $time_working = ''; $title_contact = ''; $email = ''; $phone = ''; $fax = '';  $title_social  = '';$facebook  = '';$twitter = ''; $linked = '';
        }
?>
        <!-- Start block office -->
        <h4>
            <span class="in-widget-title" style="text-transform: uppercase;">Office</span>
        </h4>
        <p>
            <label for="<?php echo $this->get_field_id('title_office'); ?>"><?php _e('Title office', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_office'); ?>" name="<?php echo $this->get_field_name('title_office'); ?>" type="text" value="<?php echo $title_office; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text_address'); ?>"><?php _e('Address:', 'wp_widget_plugin'); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('text_address'); ?>" name="<?php echo $this->get_field_name('text_address'); ?>" rows="4" cols="20" ><?php echo $text_address; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('time_working'); ?>"><?php _e('Time working:', 'wp_widget_plugin'); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('time_working'); ?>" name="<?php echo $this->get_field_name('time_working'); ?>" rows="4" cols="20" ><?php echo $time_working; ?></textarea>
        </p>
        <!-- Start block content -->
        <h4>
            <span class="in-widget-title" style="text-transform: uppercase;">Contact</span>
        </h4>
        <p>
            <label for="<?php echo $this->get_field_id('title_contact'); ?>"><?php _e('Title contact', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_contact'); ?>" name="<?php echo $this->get_field_name('title_contact'); ?>" type="text" value="<?php echo $title_contact; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fax'); ?>"><?php _e('Fax', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" type="text" value="<?php echo $fax; ?>" />
        </p>
        <!-- Start block social -->
        <h4>
            <span class="in-widget-title" style="text-transform: uppercase;">Social networks</span>
        </h4>
        <p>
            <label for="<?php echo $this->get_field_id('title_social'); ?>"><?php _e('Title Social', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_social'); ?>" name="<?php echo $this->get_field_name('title_social'); ?>" type="text" value="<?php echo $title_social; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('linked'); ?>"><?php _e('Linked', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linked'); ?>" name="<?php echo $this->get_field_name('linked'); ?>" type="text" value="<?php echo $linked; ?>" />
        </p>

<?php
}
    /**
     * Save optionce widget
     *
     * @param mixed $new_instance
     * @param mixed $old_instance
     */
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        // Fields
        $instance['title_office']  = strip_tags($new_instance['title_office']);
        $instance['text_address']  = $new_instance['text_address'];
        $instance['time_working']  = $new_instance['time_working'];
        // Start block content
        $instance['title_contact'] = strip_tags($new_instance['title_contact']);
        $instance['email']         = strip_tags($new_instance['email']);
        $instance['phone']         = strip_tags($new_instance['phone']);
        $instance['fax']           = strip_tags($new_instance['fax']);
        // Start block social
        $instance['title_social']  = strip_tags($new_instance['title_social']);
        $instance['facebook']      = strip_tags($new_instance['facebook']);
        $instance['twitter']       = strip_tags($new_instance['twitter']);
        $instance['linked']      = strip_tags($new_instance['linked']);
    return $instance;
    }
}
/**
 * Registrations contact_details_homepageWidget
 *
 */
function contact_details_homepageWidget_load() {
    register_widget( 'contact_details_homepageWidget' );
}
add_action( 'widgets_init', 'contact_details_homepageWidget_load' );
?>
