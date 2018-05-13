<?php
$home_page_first_block = array(
    'title'                       => get_field('title'),
    'sub_title'                   => get_field('sub_title'),
    'content'                     => get_field('content'),
    'first_button'                => get_field('first_button'),
    'second_button'               => get_field('second_button'),
    'link_first_button'           => get_field('link_first_button'),
    'external_link_first_button'  => get_field('external_link_first_button'),
    'internal_link_first_button'  => get_field('internal_link_first_button'),
    'link_second_button'          => get_field('link_second_button'),
    'external_link_second_button'  => get_field('external_link_first_button'),
    'internal_link_second_button' => get_field('internal_link_second_button'),
);
//print_r($home_page_first_block);
$first_button = button_link(
    $home_page_first_block['link_first_button'],
    $home_page_first_block['external_link_first_button'],
    $home_page_first_block['internal_link_first_button']
);
$second_button = button_link(
    $home_page_first_block['link_second_button'],
    $home_page_first_block['external_link_second_button'],
    $home_page_first_block['internal_link_second_button']
);
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col col-md-10 col-lg-8 col-xl-6">
            <?php
            echo $home_page_first_block['title'] ? '<h1 class="h1 title">'. $home_page_first_block['title'] .'</h1>' : '';
            echo $home_page_first_block['sub_title'] ? '<h2 class="h2 h2-center subtitle">'. $home_page_first_block['sub_title'] .'</h2>' : '';
            echo $home_page_first_block['content'] ? '<div class="desc">'. $home_page_first_block['content'] .'</div>' : '';
                if($home_page_first_block['first_button'] || $home_page_first_block['second_button']) {
                echo '<div class="btns">';
                    if($home_page_first_block['first_button']){
                        echo '<a href="' . $first_button . '" class="btn btn-bg">' . $home_page_first_block['first_button'] . '</a>';
                    }
                    if($home_page_first_block['second_button']) {
                        echo '<a href="' . $second_button . '" class="btn">' . $home_page_first_block['second_button'] . '</a>';
                    }
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
