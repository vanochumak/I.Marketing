<?php wp_footer(); ?>
</div>
<?php
$theme_settings_footer = get_field('theme_settings_footer', 'option');
?>
<footer class="footer">
    <div class="container-fluid">
        <?php
        if( have_rows('theme_settings_footer', 'option') ):

        while( have_rows('theme_settings_footer', 'option') ): the_row();
        ?>
        <div class="row justify-content-center justify-content-xl-between">
            <?php
            if( have_rows('footer_section') ):

                // loop through the rows of data
                while ( have_rows('footer_section') ) : the_row();

                    if( get_row_layout() == 'footer_first_section' ):
                        $footer_first_section = array(
                            'title'      => get_sub_field('title'),
                            'sub_title'  => get_sub_field('sub_title'),
                            'content'    => get_sub_field('content'),
                        );
                        ?>
                        <div class="col-12 col-xl-4">
                            <div class="footer-text">
                                <h3 class="h3 title"><?php echo $footer_first_section['title']; ?></h3>
                                <h4 class="h4 subtitle"><?php echo $footer_first_section['sub_title']; ?></h4>
                                <p><?php echo $footer_first_section['content']; ?></p>
                            </div>
                        </div>
                        <?

                    elseif( get_row_layout() == 'footer_second_section' ):
                        $footer_second_section = array(
                            'title'      => get_sub_field('title'),
                            'sub_title'  => get_sub_field('sub_title'),
                            'content'    => get_sub_field('content'),
                        );
?>
                        <div class="col-12 col-xl-4">
                            <div class="footer-instagram">
                                <h3 class="h3 title"><?php echo isset($footer_second_section['title']); ?></h3>
                                <div class="i-items" id="lightgallery">
                                    <a class="i-item" href="https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg" style="background-image: url('https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg')">
                            <span class="caption">
                                <ul>
                                    <li><i class="icon ion-android-favorite"></i> 15001</li>
                                    <li><i class="icon ion-android-textsms"></i>148</li>
                                </ul>
                            </span>
                                    </a>
                                    <a class="i-item" href="https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg" style="background-image: url('https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg')">
                            <span class="caption">
                                <ul>
                                    <li><i class="icon ion-android-favorite"></i> 15001</li>
                                    <li><i class="icon ion-android-textsms"></i>148</li>
                                </ul>
                            </span>
                                    </a>
                                    <a class="i-item" href="https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg" style="background-image: url('https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg')">
                            <span class="caption">
                                <ul>
                                    <li><i class="icon ion-android-favorite"></i> 15001</li>
                                    <li><i class="icon ion-android-textsms"></i>148</li>
                                </ul>
                            </span>
                                    </a>
                                    <a class="i-item" href="https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg" style="background-image: url('https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg')">
                            <span class="caption">
                                <ul>
                                    <li><i class="icon ion-android-favorite"></i> 15001</li>
                                    <li><i class="icon ion-android-textsms"></i>148</li>
                                </ul>
                            </span>
                                    </a>
                                    <a class="i-item" href="https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg" style="background-image: url('https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg')">
                            <span class="caption">
                                <ul>
                                    <li><i class="icon ion-android-favorite"></i> 15001</li>
                                    <li><i class="icon ion-android-textsms"></i>148</li>
                                </ul>
                            </span>
                                    </a>
                                    <a class="i-item" href="https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg" style="background-image: url('https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg')">
                            <span class="caption">
                                <ul>
                                    <li><i class="icon ion-android-favorite"></i> 15001</li>
                                    <li><i class="icon ion-android-textsms"></i>148</li>
                                </ul>
                            </span>
                                    </a>
                                    <a class="i-item" href="https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg" style="background-image: url('https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg')">
                            <span class="caption">
                                <ul>
                                    <li><i class="icon ion-android-favorite"></i> 15001</li>
                                    <li><i class="icon ion-android-textsms"></i>148</li>
                                </ul>
                            </span>
                                    </a>
                                    <a class="i-item" href="https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg" style="background-image: url('https://scontent.cdninstagram.com/vp/4bb11d29ff40074b9f3226dbff4a5cd7/5B46D0DD/t51.2885-15/sh0.08/e35/p640x640/28154670_1347242648755551_3596834320678912000_n.jpg')">
                            <span class="caption">
                                <ul>
                                    <li><i class="icon ion-android-favorite"></i> 15001</li>
                                    <li><i class="icon ion-android-textsms"></i>148</li>
                                </ul>
                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    elseif( get_row_layout() == 'footer_third_section' ):
                        $footer_third_section = array(
                            'title'      => get_sub_field('title'),
                            'content'    => get_sub_field('content'),
                        );
                        ?>
                        <div class="col-12 col-xl-3">
                            <div class="footer-newsletter">
                                <h3 class="h3 title"><?php echo isset($footer_third_section['title']); ?></h3>
                                <div class="desc">
                                    <p><?php echo isset($footer_third_section['content']); ?></p>
                                </div>
                                <form class="form" action="">
                                    <div class="input-wrap input-wrap-btn">
                                        <input type="text" class="input input-sm" placeholder="Enter your e-mail">
                                        <button class="btn btn-bg btn-sm" type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                    endif;
                endwhile;

            else :

                // no layouts found

            endif;
            ?>
        </div>
        <?php endwhile; ?>

        <?php endif; ?>
        <?php
        if($theme_settings_footer['copyright']) {
            ?>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                    <div class="copyright">
                        <?php echo '<span>&copy;' . date("Y") . '</span> ' . $theme_settings_footer['copyright'];  ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</footer>

<div id="to-top" class="to-top"><i class="icon ion-chevron-up"></i></div>

</div>
</body>
</html>