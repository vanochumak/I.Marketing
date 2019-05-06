<?php
$args = array( 
    'post_type' => 'slider',
);
$slider = new WP_Query( $args );
global $post;
?>
<div id="home-carousel" class="carousel owl-carousel" data-auto-height="false">
    <?php while ( $slider->have_posts() ) : $slider->the_post(); 
        if($img = get_image_by_id($slider->ID)) $src = $img[0]; else $src =''; ?>
            <div class="item <?php echo (($i == 0)?'active':' '); ?>" style="background-image: url('<?php echo $src; ?>')" data-change="large">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="description">
                                <?php
                                if($post->ID == '5'){
                                    echo '<h1>' .$title = get_the_title().'</h1>';
                                    echo '<h2>' .get_field('second_title_on_slider', $slider->ID).'</h2>';
                                }else {
                                    echo '<h3>' .$title = get_the_title().'</h3>';
                                    echo '<h4>' .get_field('second_title_on_slider', $slider->ID).'</h4>';
                                }
                                    the_content();
                                    $play_market = get_field('play_market', $slider->ID);
                                    $app_store = get_field('app_store', $slider->ID);
                                    if($play_market){
                                ?>
                                      <a href="<?php echo $play_market; ?>" class="">
                                          <img src="<?php echo get_template_directory_uri(); ?>/images/play_market.png" alt=""/>
                                      </a>
                                      <a href="<?php echo $app_store; ?>" class="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/app_store.png" alt=""/>
                                      </a>
                                <?php
                                    }else{
                                ?>
                                    <a href="<?php echo get_field ('first_button_link', $post->ID ); ?>" class="btn btn-primary paper-plane"><?php echo get_field('first_button', $slider->ID); ?></a>
                                    <a href="#contact-us" class="btn btn-default"><?php echo get_field('second_button_on_slider',$slider->ID); ?></a>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 padding-0">
                            <div class="image-cont visible-xs">
                                <img class="img-responsive" src="<?php echo $src; ?>" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php $i++; 
    endwhile; ?>
</div>