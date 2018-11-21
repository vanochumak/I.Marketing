<?php
$first_section = array(
    'add_background_section'      => get_sub_field('add_background_section'),
    'background_image'            => get_sub_field('background_image'),
    'title'                       => get_sub_field('title'),
    'sub_title'                   => get_sub_field('sub_title'),
    'content'                     => get_sub_field('content'),
    'first_button'                => get_sub_field('first_button'),
    'second_button'               => get_sub_field('second_button'),
    'link_first_button'           => get_sub_field('link_first_button'),
    'external_link_first_button'  => get_sub_field('external_link_first_button'),
    'internal_link_first_button'  => get_sub_field('internal_link_first_button'),
    'link_second_button'          => get_sub_field('link_second_button'),
    'external_link_second_button' => get_sub_field('external_link_first_button'),
    'internal_link_second_button' => get_sub_field('internal_link_second_button'),
);
//print_r($first_section);
$first_button = button_link(
    $first_section['link_first_button'],
    $first_section['external_link_first_button'],
    $first_section['internal_link_first_button']
);
$second_button = button_link(
    $first_section['link_second_button'],
    $first_section['external_link_second_button'],
    $first_section['internal_link_second_button']
);
//if ($img = get_image_by_id(get_the_ID())) $src = $img[0]; else $src = '';
?>
<section class="s-top <?php echo $first_section['add_background_section'] == 'true' ? 'add-background-section' : '' ?>"
         style="background-image: url('<?php echo $first_section['background_image']['url']; ?>')">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col col-md-10 col-lg-8 col-xl-6">
                <?php
                echo $first_section['title'] ? '<h1 class="h1 title">'. $first_section['title'] .'</h1>' : '';
                echo $first_section['sub_title'] ? '<h2 class="h2 h2-center subtitle">'. $first_section['sub_title'] .'</h2>' : '';
                echo $first_section['content'] ? '<div class="desc">'. $first_section['content'] .'</div>' : '';
                if($first_section['first_button'] || $first_section['second_button']) {
                    echo '<div class="btns">';
                    if($first_section['first_button']){
                        echo '<a href="' . $first_button . '" class="btn btn-bg">' . $first_section['first_button'] . '</a>';
                    }
                    if($first_section['second_button']) {
                        echo '<a href="' . $second_button . '" class="btn">' . $first_section['second_button'] . '</a>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
