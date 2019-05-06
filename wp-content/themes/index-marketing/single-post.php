<?php
get_header();
$d = 'F, j Y g:i a';
$date = get_the_date( $d, get_the_ID() );
$title_single_blog_page = get_field('title_single_blog_page', 'option');
$image_single_blog      = get_field('image_single_blog', 'option');
$img = get_image_by_id(get_the_ID()); $src = $img[0];
?>
    <section class="s-top-2 bg-top" style="background-image: url('<?php echo $src ? $src : $image_single_blog['url']; ?>')">
        <?php echo $title_single_blog_page ? '<h1 class="h1 title">'. $title_single_blog_page .'</h1>' : ''; ?>
        <ul class="breadcrumbs">
            <li>
                <a href="<?php echo get_home_url(); ?>"><?php _e('Home', 'index-marketing'); ?></a>
                <i class="icon ion-android-arrow-forward"></i>
            </li>
            <li>
                <a href="<?php echo get_home_url(); ?>/blog/"><?php _e('Blog', 'index-marketing'); ?></a>
                <i class="icon ion-android-arrow-forward"></i>
            </li>
            <li class="active">
                <?php echo get_the_title(get_the_ID()); ?>
            </li>
        </ul>
    </section>
    <section class="s-blog-single">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-7">
                    <article class="blog-article">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h2 class="title h2 h2-alt"><?php the_title(); ?></h2>
                        <ul class="meta">
                            <li class="meta-author">
                                <i class="icon ion-android-person"></i> <?php _e('by', 'index-marketing'); ?>
                                <a href="#"><?php the_author(); ?></a>
                            </li>
                            <li class="meta-author">
                                <i class="icon ion-calendar"></i>
                                <?php echo $date;  ?>
<!--                                Feb, 27 2017 at 5:47 pm-->
                            </li>
                        </ul>
                        <?php require( get_template_directory() . '/templates/blog/blog-layout.php'); ?>
                        <div class="article-btn-wrap">
                            <a href="#" class="btn btn-icon btn-fb">
                                <span><i class="icon ion-social-facebook"></i></span>
                                Facebook
                            </a>
                            <a href="#" class="btn btn-icon btn-twitter">
                                <span><i class="icon ion-social-twitter"></i></span>
                                Twitter
                            </a>
                            <a href="#" class="btn btn-icon btn-google">
                                <span><i class="icon ion-social-google"></i></span>
                                Google
                            </a>
                        </div>
                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </article>

                </div>
            </div>
        </div>
    </section>

    <section class="s-comments">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-6">
                    <h2 class="title h2 h2-alt">Comments</h2>
                    <div class="comment-group">
                        <!-- Comment-->
                        <article class="comment">
                            <div class="comment-avatar"><img src="images/user-01.jpg" alt=""></div>
                            <div class="comment-body">
                                <div class="comment-header">
                                    <p class="comment-title">Catherine Payne</p>
                                    <time class="comment-time" datetime="2017">2 days ago</time>
                                </div>
                                <div class="comment-text">
                                    <p>Thank you for such an amazing and informative article! It’s useful to know how to use social platforms for business’s benfit and how to do it correctly.</p>
                                </div>
                                <div class="comment-footer"><a class="comment-link-reply" href="#"><i class="icon ion-reply"></i>Reply</a></div>
                            </div>
                        </article>
                        <div class="comment-group">
                            <!-- Comment-->
                            <article class="comment">
                                <div class="comment-avatar"><img src="images/user-01.jpg" alt=""></div>
                                <div class="comment-body">
                                    <div class="comment-header">
                                        <p class="comment-title">Ronald Chen</p>
                                        <time class="comment-time" datetime="2017">2 days ago</time><span class="comment-reply"><i class="icon ion-reply"></i>Catherine Payne</span>
                                    </div>
                                    <div class="comment-text">
                                        <p>Thank you for your comment! I will publish more tips on social media management in my forthcoming posts, so stay tuned and subscribe to our newsletter.</p>
                                    </div>
                                    <div class="comment-footer"><a class="comment-link-reply" href="#"><i class="icon ion-reply"></i>Reply</a></div>
                                </div>
                            </article>
                        </div>
                        <!-- Comment-->
                        <article class="comment">
                            <div class="comment-avatar"><img src="images/user-01.jpg" alt=""></div>
                            <div class="comment-body">
                                <div class="comment-header">
                                    <p class="comment-title">Philip Bowman</p>
                                    <time class="comment-time" datetime="2017">2 days ago</time>
                                </div>
                                <div class="comment-text">
                                    <p>Your tips helped me change my attitude to SMM, and I’m already planning to hire an expert form your company to help me with my SEO &amp; SMM strategy.</p>
                                </div>
                                <div class="comment-footer"><a class="comment-link-reply" href="#"><i class="icon ion-reply"></i>Reply</a></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-send-comment">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-6">
                    <h2 class="title h2 h2-alt">Send a Comment</h2>
                    <div class="form-big">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-wrap">
                                        <label for="form-comment-1">First name</label>
                                        <input type="text" class="input input-alt" id="form-comment-1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-wrap">
                                        <label for="form-comment-2">Last name</label>
                                        <input type="text" class="input input-alt" id="form-comment-2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-wrap">
                                        <label for="form-comment-3">E-mail</label>
                                        <input type="email" class="input input-alt" id="form-comment-3">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-wrap">
                                        <label for="form-comment-4">Phone</label>
                                        <input type="text" class="input input-alt" id="form-comment-4">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-wrap">
                                        <label for="form-comment-5">Message</label>
                                        <textarea class="input input-alt textarea" id="form-comment-5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-bg">send comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-newsletter">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <h2 class="h2 title">NewsLetter</h2>
                    <div class="desc">
                        <p>Keep up with our always upcoming product features and technologies. Enter your e-mail and subscribe to our newsletter.</p>
                    </div>
                    <form class="form ph-dark" action="">
                        <div class="input-wrap input-wrap-btn">
                            <input type="text" class="input" placeholder="Enter your e-mail">
                            <button class="btn btn-bg btn-sm" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();