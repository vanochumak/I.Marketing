<?php
/**
 * THE WIDGET TITE CHECK OUT LATEST PROJECT IN THE BACKEND
 ********************************************************************************/
class check_our_latest_projectsWidget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'check_our_latest_projectsWidget',
            'CHECK OUT LATEST PROJECT', // titel widget
            array( 'description' => '' )
        );
    }
    /*
     * Fornt-end widget
     */
    public function widget( $args, $instance ) {
        extract( $args );
        // these are the widget options
        $title  = apply_filters('widget_title', $instance['title']);
        // Display the widget
        echo '<h3>'.$title.'</h3>';
        global $post;
        $portfolio = array(
            'post_parent'    => 85,
            'post_type'      => 'page',
            'posts_per_page' => 5,
        );
        $pages = get_posts($portfolio);
        echo '<ol class="yellow-tagged">';
        foreach( $pages as $post ){ setup_postdata($post);
            $permalink = get_permalink( $post->ID );
            $value = get_field('project_status',$portfolio->ID);
//            if(($value) == 'private' || ($value) == 'protected') {
//                echo '<li><a style="cursor: pointer;">' . $post->post_title . '</a>';
//            }else{
                echo '<li><a href="' . $permalink . '">' . $post->post_title . '</a>';
            //}
        }
        echo '</li></ol>';
        wp_reset_postdata();
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
        } else {
            $title = '';
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
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
        return $instance;
    }
}
/*
 * Registrations widget
 */
function check_our_latest_projectsWidget_load() {
    register_widget( 'check_our_latest_projectsWidget' );
}
add_action( 'widgets_init', 'check_our_latest_projectsWidget_load' );
?>
