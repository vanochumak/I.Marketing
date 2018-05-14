<?php
/**
 * Template Name: Blog
 */
get_header();
?>
<section class="s-top-2 bg-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg-02.jpg')">
    <h1 class="h1 title">Masonry blog</h1>
    <ul class="breadcrumbs">
        <li>
            <a href="#">Home</a>
            <i class="icon ion-android-arrow-forward"></i>
        </li>
        <li class="active">
            Masonry blog
        </li>
    </ul>
</section>
<section class="s-blog">
    <div class="container-md">
        <div class="mas-grid">
            <?php
            $args = array(
                'post_type'              => array( 'post' ),
                'posts_per_page'         => '-1',
                'order'                  => 'DESC',
                'orderby'                => 'date',
            );

            // The Query
            $blog = new WP_Query( $args );

            // The Loop
            if ( $blog->have_posts() ) {
                while ( $blog->have_posts() ) {
                    $blog->the_post();
                    $category = get_the_category( $blog->ID );
                    //custom_print_r($category);
                    $image_blog_url = [];
                    $image_blog_title = [];
                    if ( have_rows( 'layout_blog' ) ) {
                        while ( have_rows( 'layout_blog' ) ) {
                            the_row();
                            $image_blog =  get_sub_field('image_blog');
                            $image_blog_url[]  = $image_blog['url'];
                            $image_blog_title[]    = get_sub_field('text_big');

                        }
                    }
//                    print_r($image_blog_url);
//                    print_r($image_blog_title);

                   ?>
                    <div class="grid-item">
                        <div class="blog-item">
                            <div class="blog-item-body">

                                <a href="" class="blog-item-img">
                                    <img src="<?php echo $image_blog_url[1]; ?>" alt="">
                                </a>
                                <div class="blog-caption">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-sm-6">
                                            <div class="blog-item-tag"><a href="#"><?php echo $category[0]->name; ?></a></div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="blog-item-author">by <a href="#"><?php the_author(); ?></a></div>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="blog-item-title"><?php the_title(); ?></a>
                                    <div class="blog-item-text">
                                        <?php
                                            echo $image_blog_title[0];
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item-footer align-items-center">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="blog-item-date">
                                            Feb 27, 2017 at 6:53 pm
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


<!--            <div class="grid-item">-->
<!--                <div class="blog-item b-video">-->
<!--                    <div class="blog-item-body">-->
<!--                        <a href="" class="blog-item-img">-->
<!--                            <img src="./images/news-02.jpg" alt="">-->
<!--                            <div class="play">-->
<!--                                <i class="icon ion-ios-play"></i>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <div class="blog-caption">-->
<!--                            <div class="row align-items-center">-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-tag"><a href="#">Tips & Tricks</a></div>-->
<!--                                </div>-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-author">by <a href="#">Ronald Chen</a></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="#" class="blog-item-title">Benefits of Using Modern Promotion Technologies in 2017</a>-->
<!--                            <div class="blog-item-text">-->
<!--                                <p>Technology is constantly changing, and it is obvious it takes our life to a whole new level. As the Internet has already become a powerful instrument of marketing, the technological advancement also plays...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blog-item-footer align-items-center">-->
<!--                        <div class="row">-->
<!--                            <div class="col-9">-->
<!--                                <div class="blog-item-date">-->
<!--                                    Feb 27, 2017 at 6:53 pm-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-3">-->
<!--                                <a href="#" class="blog-item-comments">-->
<!--                                    <i class="icon ion-android-chat"></i>3-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="grid-item">-->
<!--                <div class="blog-item b-quote">-->
<!--                    <div class="blog-item-body">-->
<!--                        <a href="" class="blog-item-img">-->
<!--                            <i class="icon ion-quote"></i>-->
<!--                            Local SEO is becoming an essential components to every business.-->
<!--                        </a>-->
<!--                        <div class="blog-caption">-->
<!--                            <div class="row align-items-center">-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-tag"><a href="#">news</a></div>-->
<!--                                </div>-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-author">by <a href="#">Ronald Chen</a></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="#" class="blog-item-title">How Google Search Works in 2017. Video Review</a>-->
<!--                            <div class="blog-item-text">-->
<!--                                <p>Many years ago we created an infographic about how search works, from the perspective of a content creator, starting with their content & following it through the indexing & ranking process. As users...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blog-item-footer align-items-center">-->
<!--                        <div class="row">-->
<!--                            <div class="col-9">-->
<!--                                <div class="blog-item-date">-->
<!--                                    Feb 27, 2017 at 6:53 pm-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-3">-->
<!--                                <a href="#" class="blog-item-comments">-->
<!--                                    <i class="icon ion-android-chat"></i>3-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="grid-item">-->
<!--                <div class="blog-item">-->
<!--                    <div class="blog-item-body">-->
<!--                        <a href="" class="blog-item-img">-->
<!--                            <img src="./images/news-01.jpg" alt="">-->
<!--                        </a>-->
<!--                        <div class="blog-caption">-->
<!--                            <div class="row align-items-center">-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-tag"><a href="#">news</a></div>-->
<!--                                </div>-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-author">by <a href="#">Ronald Chen</a></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="#" class="blog-item-title">How Google Search Works in 2017. Video Review</a>-->
<!--                            <div class="blog-item-text">-->
<!--                                <p>Many years ago we created an infographic about how search works, from the perspective of a content creator, starting with their content & following it through the indexing & ranking process. As users...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blog-item-footer align-items-center">-->
<!--                        <div class="row">-->
<!--                            <div class="col-9">-->
<!--                                <div class="blog-item-date">-->
<!--                                    Feb 27, 2017 at 6:53 pm-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-3">-->
<!--                                <a href="#" class="blog-item-comments">-->
<!--                                    <i class="icon ion-android-chat"></i>3-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="grid-item">-->
<!--                <div class="blog-item">-->
<!--                    <div class="blog-item-body">-->
<!--                        <a href="" class="blog-item-img">-->
<!--                            <img src="./images/news-02.jpg" alt="">-->
<!--                        </a>-->
<!--                        <div class="blog-caption">-->
<!--                            <div class="row align-items-center">-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-tag"><a href="#">news</a></div>-->
<!--                                </div>-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-author">by <a href="#">Ronald Chen</a></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="#" class="blog-item-title">Google Rethinking Payday Loans & Doorway Pages?</a>-->
<!--                            <div class="blog-item-text">-->
<!--                                <p>Best yet, not only does Google maintain their investment in payday loans via LendUp, but there is also a bubble in the personal loans space, so Google will be...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blog-item-footer align-items-center">-->
<!--                        <div class="row">-->
<!--                            <div class="col-9">-->
<!--                                <div class="blog-item-date">-->
<!--                                    Feb 27, 2017 at 6:53 pm-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-3">-->
<!--                                <a href="#" class="blog-item-comments">-->
<!--                                    <i class="icon ion-android-chat"></i>3-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="grid-item">-->
<!--                <div class="blog-item">-->
<!--                    <div class="blog-item-body">-->
<!--                        <a href="" class="blog-item-img">-->
<!--                            <img src="./images/news-03.jpg" alt="">-->
<!--                        </a>-->
<!--                        <div class="blog-caption">-->
<!--                            <div class="row align-items-center">-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-tag"><a href="#">Tips & Tricks</a></div>-->
<!--                                </div>-->
<!--                                <div class="col-12 col-sm-6">-->
<!--                                    <div class="blog-item-author">by <a href="#">Ronald Chen</a></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="#" class="blog-item-title">Benefits of Using Modern Promotion Technologies in 2017</a>-->
<!--                            <div class="blog-item-text">-->
<!--                                <p>Technology is constantly changing, and it is obvious it takes our life to a whole new level. As the Internet has already become a powerful instrument of marketing, the technological advancement also plays...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blog-item-footer align-items-center">-->
<!--                        <div class="row">-->
<!--                            <div class="col-9">-->
<!--                                <div class="blog-item-date">-->
<!--                                    Feb 27, 2017 at 6:53 pm-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-3">-->
<!--                                <a href="#" class="blog-item-comments">-->
<!--                                    <i class="icon ion-android-chat"></i>3-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <button class="btn btn-light">load more posts</button>
            </div>
        </div>
        <ul class="pagination">
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
        </ul>

    </div>
</section>
<?php

get_footer();