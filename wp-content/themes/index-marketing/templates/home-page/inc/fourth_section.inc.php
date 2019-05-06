<section class="s-news content-section">
    <div class="container-fluid">
        <h2 class="h2 h2-center title"><?php _e('Latest News', 'index-marketing'); ?></h2>
        <?php
        $args = array(
            'post_type' => array('post'),
            'posts_per_page' => 3,
            'paged' => $paged,
            'order' => 'DESC',
            'orderby' => 'date',
        );

        // The Query
        $blog = new WP_Query($args);

        // The Loop

        ?>
        <div class="row">
            <?php
            if ($blog->have_posts()) {
                while ($blog->have_posts()) {
                    $blog->the_post();
                    $d = 'j F d, Y, g:i a';
                    $date = get_the_date($d, get_the_ID());
                    $image_main_blog_page = get_field('image_main_blog_page');
                    //print_r($image_main_blog_page);
                    $src = get_image_by_id(get_the_ID());
                    ?>
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="news-item">
                            <div class="img">
                                <img src="<?php echo $src[0]; ?>" alt="<?php echo $image_main_blog_page['alt']; ?>">
                                <div class="caption">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-bg btn-sm"><?php _e('Book now', 'index-marketing'); ?></a>
                                </div>
                            </div>
                            <?php
                            if ($date) {
                                ?>
                                <div class="date">
                                    <i class="icon ion-calendar"></i>
                                    <?php echo $date; ?>
                                </div>
                                <?php
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                        </div>
                    </div>

                    <?php
                }
            } else {
                ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                <?php
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </div>
        <div class="text-center">
            <a href="<?php echo site_url('/blog/');  ?>" class="btn btn-bg"><?php _e('view all blog posts', 'index-marketing'); ?></a>
        </div>

    </div>
</section>
