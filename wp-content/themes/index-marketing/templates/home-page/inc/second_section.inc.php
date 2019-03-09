<?php
$second_section = array(
    'add_background_section' => get_sub_field('add_background_section'),
    'title'                  => get_sub_field('title_block_2'),
    'sub_title'              => get_sub_field('sub_title_block_2'),
    'content'                => get_sub_field('content_block_2'),
    'first_button'           => get_sub_field('button'),
    'image'                  => get_sub_field('image'),
    'button'                 => get_sub_field('button'),
    'button_link'            => get_sub_field('button_link'),
    'button_internal'        => get_sub_field('button_internal'),
    'button_external'        => get_sub_field('button_external')
);
$button = button_link(
    $second_section['button_link'],
    $second_section['button_external'],
    $second_section['button_internal']
);
?>
<section class="s-about content-section <?php echo $second_section['add_background_section'] == 'true' ? 'add-background-section' : '' ?>">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col col-md-10 col-lg-12">
                <div class="row justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <?php
                        echo $second_section['title'] ? '<h2 class="h2 title">'. $second_section['title'] .'</h2>' : '';
                        if($second_section['sub_title']) {
                            echo '<div class="subtitle" >';
                            echo '<p>'. $second_section['sub_title'] .'</p>';
                            echo '</div>';
                        }
                        if($second_section['content']) {
                            echo '<div class="desc">';
                            echo '<p>'.$second_section['content'].'</p>';
                            echo '</div>';
                        }
                        if($second_section['button']) {
                            echo '<a href="'.$button.'" class="btn btn-bg">' . $second_section['button'] . '</a>';
                        }
                        ?>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <?php
                        $image = $second_section['image'];
                        if($image) {
                            ?>
                            <img class="img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>