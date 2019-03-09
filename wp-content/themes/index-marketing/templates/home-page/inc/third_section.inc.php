<?php
$title_third_section = get_sub_field('title_third_block');
$add_background_section_third_section = get_sub_field('add_background_section');
?>
<section class="s-services content-section <?php echo $add_background_section_third_section == 'true' ? 'add-background-section' : '' ?>">
    <div class="container-fluid">
        <?php echo ($title_third_section) ? '<h2 class="h2 h2-center title">'. $title_third_section .'</h2>' : ''; ?>
        <div class="row">
            <?php
            if( have_rows('repeater_third') ):
                while ( have_rows('repeater_third') ) : the_row();
                    $repeater_title   = get_sub_field('repeater_title');
                    $repeater_content = get_sub_field('repeater_content');
                    $choose_icon      = get_sub_field('choose_icon');
                    //print_r($choose_icon);
                    $field = get_sub_field_object('choose_icon');
                    $value = $field['value'];
                    ?>
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="article">
                            <div class="article-title-wrap">
                                <div class="article-icon <?php echo $value; ?>"></div>
                                <h3 class="h3 article-title"><?php echo $repeater_title; ?></h3>
                            </div>
                            <div class="article-desc">
                                <p><?php echo $repeater_content; ?></p>
                            </div>
                        </article>
                    </div>
                    <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
</section>
