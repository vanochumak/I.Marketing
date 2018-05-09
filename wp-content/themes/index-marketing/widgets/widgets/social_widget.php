<?php
/**
* THE WIDGET FOR DISPLANING SOCIAL OF THE COMPANY IN THE BACKEND
********************************************************************************/
class socialWidget extends WP_Widget {
    /**
     * Add widget
     * 
     */
    function __construct() {
        parent::__construct(
            'socialWidget', 
            'Contact details of the company social networks', // titel widget
            array( 'description' => '' ) 
        );
    }
    /*
     * Forntend widget
     */
    public function widget( $args, $instance ) {
        extract( $args );
        // these are the widget options
        $title        = apply_filters('widget_title', $instance['title']);
        $text_title   = $instance['text_title'];
        $facebook     = $instance['facebook'];
        $twitter      = $instance['twitter'];
        $linkedin     = $instance['linkedin']; 
        // Display the widget 
        // Start social
        echo '<div class="col-xs-12 col-sm-12 col-md-2">';
            echo '<div class="notify">';
                echo '<h4>';
                    if ($title){
                        echo  $title;
                    }
                echo '</h4>';
                echo '<h3>';
                    if ($text_title){
                        echo  $text_title;
                    }
                echo '</h3>';  
           echo '</div>';
        echo '</div>';
        echo '<div class="col-xs-12 col-sm-8 col-md-6">';
            echo '<ul class="social">';
    ?>
                <li>
                    <a href="<?php echo $facebook; ?>" target="_blank">
                        <span class="circle blue"><i class="fa fa-facebook"></i></span>
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $twitter;?>" target="_blank">
                        <span class="circle yellow"><i class="fa fa-twitter"></i></span>
                        <span>Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $linkedin;?>" target="_blank">
                        <span class="circle green"><i class="fa fa-linkedin"></i></span>
                        <span>Linkedin</span>
                    </a>
                </li>    
        <?php         
            echo '</ul>';
        echo '</div>';        
    }
    /**
     * Backend widget
     * 
     * @param mixed $instance
     */
    public function form( $instance ) {
        // Check values
        if( $instance) {
            $title         = esc_attr($instance['title']);
            $text_title    = $instance['text_title'];
            $facebook      = $instance['facebook'];
            $twitter       = $instance['twitter'];
            $linkedin      = $instance['linkedin'];
        } else {
            $title = ''; $text_title = ''; $facebook  = '';$twitter = ''; $linkedin = '';
        }
?>
        <!-- Start block office -->    
        <h4>
            <span class="in-widget-title" style="text-transform: uppercase;">Office</span>
        </h4>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title 1:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text_title'); ?>"><?php _e('Title 2:', 'wp_widget_plugin'); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('text_title'); ?>" name="<?php echo $this->get_field_name('text_title'); ?>" rows="4" cols="20" ><?php echo $text_title; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
        </p>  
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
        </p>  
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>" />
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
        $instance['title']         = strip_tags($new_instance['title']);
        $instance['text_title']    = $new_instance['text_title'];
        $instance['facebook']      = strip_tags($new_instance['facebook']);
        $instance['twitter']       = strip_tags($new_instance['twitter']);
        $instance['linkedin']      = strip_tags($new_instance['linkedin']);  
    return $instance;
    }
} 
/*
 * Registrations widget
 */
function socialWidget_load() {
    register_widget( 'socialWidget' );
}
add_action( 'widgets_init', 'socialWidget_load' );

