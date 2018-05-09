<?php
/**
 * THE WIDGET FOR DISPLANING UKRINSOFT IN NUMBERS IN THE BACKEND
 ******************************************************************************/
class ukrinsoft_in_numbersWidget extends WP_Widget {
    /**
     * Add widget 
     */
    function __construct() {
        parent::__construct(
            'ukrinsoft_in_numbersWidget', 
            'UKRINSOFT IN NUMBERS', // titel widget
            array( 'description' => '' ) 
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
        $title_ukrinsoft_in_numbers = apply_filters('widget_title', $instance['title_ukrinsoft_in_numbers']);
        
        
        $title_years_of_experience  = $instance['title_years_of_experience'];
        $number_years_of_experience = $instance['number_years_of_experience'];
        
        //FINISHED PROJECTS
        $title_finished_projects  = $instance['title_finished_projects'];
        $number_finished_projects = $instance['number_finished_projects'];
        
        //TALENTED SPECIALISTS
        $title_talented_specialists  = $instance['title_talented_specialists'];
        $number_talented_specialists = $instance['number_talented_specialists'];
        
        //WRITTEN LINES of CODE
        $title_written_lines_of_code  = $instance['title_written_lines_of_code'];
        $number_written_lines_of_code = $instance['number_written_lines_of_code'];
        
        //COFFEES DRUNK IN 2015
        $title_coffees_drunk  = $instance['title_coffees_drunk'];
        $number_coffees_drunk = $instance['number_coffees_drunk'];
        
        //NUMBER of CREATIVE IDEAS
        $title_number_of_creative_ideas  = $instance['title_number_of_creative_ideas'];
        $number_number_of_creative_ideas = $instance['number_number_of_creative_ideas'];  
         
        //CONTENT
        //$content_block_1   = $instance['content_block_1'];
        //$content_block_2   = $instance['content_block_2']; ?>
        
        <div class="section mosaic" id="who-we-are">
            <img class="bg" src="<?php echo get_template_directory_uri(); ?>/images/bg.jpg" alt=""/>
            <div class="container">
                <h3>
                <?php 
                    if($title_ukrinsoft_in_numbers){
                        //echo  $title_ukrinsoft_in_numbers;
                        $words       = explode(' ', $title_ukrinsoft_in_numbers);
                        $first_word  = $words[0];
                        $second_word = $words[1];
                        $third_word  = $words[2];  
                        echo $first_word;
                        echo ' ';
                        echo $second_word;
                        echo ' ';
                        echo '<span>'.$third_word.'</span>';                    
                    }
                ?>
                </h3>
                <div class="row numbers">
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <p class="num"><?php echo $number_years_of_experience; ?></p>
                        <p><?php echo $title_years_of_experience; ?></p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <p class="num"><?php echo $number_finished_projects; ?></p>
                        <p><?php echo $title_finished_projects; ?></p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <p class="num"><?php echo $number_talented_specialists; ?></p>
                        <p><?php echo $title_talented_specialists; ?></p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <p class="num"><?php echo $number_written_lines_of_code; ?></p>
                        <p><?php echo $title_written_lines_of_code; ?></p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <p class="num"><?php echo $number_coffees_drunk; ?></p>
                        <p><?php echo $title_coffees_drunk; ?></p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <p class="num">
                            <img src="<?php echo $number_number_of_creative_ideas; ?>" alt=""/>
                        </p>
                        <p><?php echo $title_number_of_creative_ideas; ?></p>
                    </div>
                </div>
<!--                <p class="numbers-description">--><?php //echo $content_block_1; ?><!--</p>-->
<!--                <p class="kaushan">--><?php //echo $content_block_2; ?><!--</p>-->
            </div>
        </div>
        <?
                     
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
            $title_ukrinsoft_in_numbers = esc_attr($instance['title_ukrinsoft_in_numbers']);
            
            
            $title_years_of_experience  = $instance['title_years_of_experience'];
            $number_years_of_experience = $instance['number_years_of_experience'];
            //FINISHED PROJECTS
            $title_finished_projects  = $instance['title_finished_projects'];
            $number_finished_projects = $instance['number_finished_projects'];
            //TALENTED SPECIALISTS
            $title_talented_specialists  = $instance['title_talented_specialists'];
            $number_talented_specialists = $instance['number_talented_specialists'];
            //WRITTEN LINES of CODE
            $title_written_lines_of_code  = $instance['title_written_lines_of_code'];
            $number_written_lines_of_code = $instance['number_written_lines_of_code'];
            //COFFEES DRUNK IN 2015
            $title_coffees_drunk  = $instance['title_coffees_drunk'];
            $number_coffees_drunk = $instance['number_coffees_drunk'];
            //NUMBER of CREATIVE IDEAS
            $title_number_of_creative_ideas  = $instance['title_number_of_creative_ideas'];
            $number_number_of_creative_ideas = $instance['number_number_of_creative_ideas'];
            //CONTENT
            $content_block_1   = $instance['content_block_1']; 
            $content_block_2   = $instance['content_block_2'];
            
        } else {
            $title_ukrinsoft_in_numbers = ''; $title_years_of_experience = ''; $number_years_of_experience = ''; $title_finished_projects = ''; $number_finished_projects = ''; $title_talented_specialists = ''; $number_talented_specialists = '';  $title_written_lines_of_code  = ''; $number_written_lines_of_code  = ''; $title_coffees_drunk = ''; $number_coffees_drunk = '';$title_number_of_creative_ideas = '';$number_number_of_creative_ideas = '';$content_block_1 = ''; $content_block_2 = '';
        }
?>
        <p>
            <label for="<?php echo $this->get_field_id('title_ukrinsoft_in_numbers'); ?>"><?php _e('UKRINSOFT IN NUMBERS', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_ukrinsoft_in_numbers'); ?>" name="<?php echo $this->get_field_name('title_ukrinsoft_in_numbers'); ?>" type="text" value="<?php echo $title_ukrinsoft_in_numbers; ?>" />
        </p><hr>
        <p>
            <label for="<?php echo $this->get_field_id('title_years_of_experience'); ?>"><?php _e('YEARS OF EXPERIENCE:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_years_of_experience'); ?>" name="<?php echo $this->get_field_name('title_years_of_experience'); ?>" type="text" value="<?php echo $title_years_of_experience; ?>" />
            <label for="<?php echo $this->get_field_id('number_years_of_experience'); ?>"><?php _e('Number:', 'number_years_of_experience'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_years_of_experience'); ?>" name="<?php echo $this->get_field_name('number_years_of_experience'); ?>" type="text" value="<?php echo $number_years_of_experience; ?>" />
        </p><hr>
        <p>
            <label for="<?php echo $this->get_field_id('title_finished_projects'); ?>"><?php _e('FINISHED PROJECTS:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_finished_projects'); ?>" name="<?php echo $this->get_field_name('title_finished_projects'); ?>" type="text" value="<?php echo $title_finished_projects; ?>" />
            <label for="<?php echo $this->get_field_id('number_finished_projects'); ?>"><?php _e('Number:', 'number_finished_projects'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_finished_projects'); ?>" name="<?php echo $this->get_field_name('number_finished_projects'); ?>" type="text" value="<?php echo $number_finished_projects; ?>" />
        </p><hr>
        <p>
            <label for="<?php echo $this->get_field_id('title_talented_specialists'); ?>"><?php _e('TALENTED SPECIALISTS:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_talented_specialists'); ?>" name="<?php echo $this->get_field_name('title_talented_specialists'); ?>" type="text" value="<?php echo $title_talented_specialists; ?>" />
            <label for="<?php echo $this->get_field_id('number_talented_specialists'); ?>"><?php _e('Number:', 'number_talented_specialists'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_talented_specialists'); ?>" name="<?php echo $this->get_field_name('number_talented_specialists'); ?>" type="text" value="<?php echo $number_talented_specialists; ?>" />
        </p><hr>
        <p>
            <label for="<?php echo $this->get_field_id('title_written_lines_of_code'); ?>"><?php _e('WRITTEN LINES OF CODE:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_written_lines_of_code'); ?>" name="<?php echo $this->get_field_name('title_written_lines_of_code'); ?>" type="text" value="<?php echo $title_written_lines_of_code; ?>" />
            <label for="<?php echo $this->get_field_id('number_written_lines_of_code'); ?>"><?php _e('Number:', 'number_written_lines_of_code'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_written_lines_of_code'); ?>" name="<?php echo $this->get_field_name('number_written_lines_of_code'); ?>" type="text" value="<?php echo $number_written_lines_of_code; ?>" />
        </p><hr>
        <p>
            <label for="<?php echo $this->get_field_id('title_coffees_drunk'); ?>"><?php _e('COFFEES DRUNK IN:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_coffees_drunk'); ?>" name="<?php echo $this->get_field_name('title_coffees_drunk'); ?>" type="text" value="<?php echo $title_coffees_drunk; ?>" />
            <label for="<?php echo $this->get_field_id('number_coffees_drunk'); ?>"><?php _e('Number:', 'number_coffees_drunk'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_coffees_drunk'); ?>" name="<?php echo $this->get_field_name('number_coffees_drunk'); ?>" type="text" value="<?php echo $number_coffees_drunk; ?>" />
        </p><hr>
        <p>
            <label for="<?php echo $this->get_field_id('title_number_of_creative_ideas'); ?>"><?php _e('NUMBER OF CREATIVE IDEAS:', 'wp_widget_plugin'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title_number_of_creative_ideas'); ?>" name="<?php echo $this->get_field_name('title_number_of_creative_ideas'); ?>" type="text" value="<?php echo $title_number_of_creative_ideas; ?>" />
            <label for="<?php echo $this->get_field_id('number_number_of_creative_ideas'); ?>"><?php _e('Link on the image:', 'number_number_of_creative_ideas'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('number_number_of_creative_ideas'); ?>" name="<?php echo $this->get_field_name('number_number_of_creative_ideas'); ?>" type="text" value="<?php echo $number_number_of_creative_ideas; ?>" />
        </p><hr>  
        <p>
            <label><?php _e( 'CONTENT 1:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('content_block_1'); ?>" name="<?php echo $this->get_field_name('content_block_1'); ?>" rows="4" cols="20" ><?php echo $content_block_1; ?></textarea>
        </p><hr>
        <p>
            <label><?php _e( 'CONTENT 2:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('content_block_2'); ?>" name="<?php echo $this->get_field_name('content_block_2'); ?>" rows="4" cols="20" ><?php echo $content_block_2; ?></textarea>
        </p><hr>  
        
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
        $instance['title_ukrinsoft_in_numbers'] = strip_tags($new_instance['title_ukrinsoft_in_numbers']);
        
        $instance['title_years_of_experience']  = $new_instance['title_years_of_experience'];
        $instance['number_years_of_experience'] = $new_instance['number_years_of_experience']; 
        //FINISHED PROJECTS
        $instance['title_finished_projects']  = $new_instance['title_finished_projects'];
        $instance['number_finished_projects'] = $new_instance['number_finished_projects'];
        //TALENTED SPECIALISTS
        $instance['title_talented_specialists']  = $new_instance['title_talented_specialists'];
        $instance['number_talented_specialists'] = $new_instance['number_talented_specialists'];
        //WRITTEN LINES of CODE
        $instance['title_written_lines_of_code']  = $new_instance['title_written_lines_of_code'];
        $instance['number_written_lines_of_code'] = $new_instance['number_written_lines_of_code'];
        //COFFEES DRUNK IN
        $instance['title_coffees_drunk']  = $new_instance['title_coffees_drunk'];
        $instance['number_coffees_drunk'] = $new_instance['number_coffees_drunk'];
         //NUMBER of CREATIVE IDEAS
        $instance['title_number_of_creative_ideas']  = $new_instance['title_number_of_creative_ideas'];
        $instance['number_number_of_creative_ideas'] = $new_instance['number_number_of_creative_ideas'];
        //CONTENT
        $instance['content_block_1']   = $new_instance['content_block_1']; 
        $instance['content_block_2']   = $new_instance['content_block_2'];
         
    return $instance;
    }
}
/**
 * Registrations adressWidget
 * 
 */
function ukrinsoft_in_numbersWidget_load() {
    register_widget( 'ukrinsoft_in_numbersWidget' );
}
add_action( 'widgets_init', 'ukrinsoft_in_numbersWidget_load' );
?>
