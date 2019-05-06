<?php
/**
 * Template Name: Blog
 */
get_header();
$title_on_the_blog_page  = get_field('title_on_the_blog_page', 'option');
$image_on_the_blog_page  = get_field('image_on_the_blog_page', 'option');
?>
<section class="s-top-2 bg-top" style="background-image: url('<?php echo $image_on_the_blog_page['url']; ?>')">
    <?php echo $title_on_the_blog_page ? '<h2 class="h1 title">'. $title_on_the_blog_page .'</h2>' : ''; ?>
    <ul class="breadcrumbs">
        <li>
            <a href="<?php echo get_home_url(); ?>"><?php _e('Home', 'index-marketing'); ?></a>
            <i class="icon ion-android-arrow-forward"></i>
        </li>
        <li class="active">
            <?php echo get_the_title(get_the_ID()); ?>
        </li>
    </ul>
</section>
<section class="s-blog">
    <div class="container-md">
        <div class="mas-grid">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type'      => array( 'post' ),
                'posts_per_page' => -1,
                'paged'          => $paged,
                'order'          => 'DESC',
                'orderby'        => 'date',
            );

            // The Query
            $blog = new WP_Query( $args );

            // The Loop
            if ( $blog->have_posts() ) {
                while ( $blog->have_posts() ) {
                    $blog->the_post();
                    $category = get_the_category( $blog->ID );
                    //custom_print_r($category);
                    $d = 'j F d, Y, g:i a';
                    $date = get_the_date( $d, get_the_ID() );
                    $content_main_blog_page = get_field('content_main_blog_page');
                    $image_main_blog_page = get_field('image_main_blog_page');
                    $quote_main_blog_page = get_field('quote_main_blog_page');
                    $video_main_blog_page = get_field('video_main_blog_page');
                    $type_content = get_field('type_content');
                    ?>
                    <div class="grid-item">
                        <div class="blog-item <?php echo type_content_main_blog($type_content); ?>">
                            <div class="blog-item-body">
                                <a href="" class="blog-item-img">
                                    <?php
                                           if($type_content == 'quote') {
                                               ?>
                                               <i class="icon ion-quote"></i>
                                               <?php
                                               echo $quote_main_blog_page;
                                           }elseif($type_content == 'video'){
                                              ?>
                                               <img src="./images/news-02.jpg" alt="">
                                               <div class="play">
                                                   <i class="icon ion-ios-play"></i>
                                               </div>
                                               <?php
                                           }else{
                                               echo '<img src="'. $image_main_blog_page['url'] .'" alt="'. $image_main_blog_page['alt'] .'">';
                                           }
                                    ?>
                                </a>
                                <div class="blog-caption">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-sm-6">
                                            <div class="blog-item-tag"><a href="#"><?php echo $category[0]->name; ?></a></div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="blog-item-author"><?php _e('by', 'index-marketing'); ?> <a href="#"><?php the_author(); ?></a></div>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="blog-item-title">
                                        <?php the_title(); ?>
                                    </a>
                                    <div class="blog-item-text">
                                        <?php
                                            echo $content_main_blog_page;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item-footer align-items-center">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="blog-item-date">
                                            <?php echo $date; ?>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <a href="#" class="blog-item-comments">
                                            <i class="icon ion-android-chat"></i>3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                    ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php
            }

            // Restore original Post Data
            wp_reset_postdata();
                ?>
        </div>

<!--        <div class="row">-->
<!--            <div class="col-md-8 offset-md-2">-->
<!--                <button class="btn btn-light">load more posts</button>-->
<!--            </div>-->
<!--        </div>-->
        <?php
        if (function_exists('vb_pagination')) {
            vb_pagination($blog);// loop
        }
        ?>
    </div>
</section>
<?php

get_footer();