<?php
$home_page_second_block = array(
    'title'            => get_field('title_block_2'),
    'sub_title'        => get_field('sub_title_block_2'),
    'content'          => get_field('content_block_2'),
    'first_button'     => get_field('button'),
    'image'            => get_field('image'),
    'button'           => get_field('button'),
    'button_link'      => get_field('button_link'),
    'button_internal'  => get_field('button_internal'),
    'button_external'  => get_field('button_external')
);
$button = button_link(
    $home_page_second_block['button_link'],
    $home_page_second_block['button_external'],
    $home_page_second_block['button_internal']
);

?>
<section class="s-about">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col col-md-10 col-lg-10">
                <div class="row justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-md-12 col-lg-6 col-xl-5">
                        <?php
                        echo $home_page_second_block['title'] ? '<h2 class="h2 title">'. $home_page_second_block['title'] .'</h2>' : '';
                        if($home_page_second_block['sub_title']) {
                            echo '<div class="subtitle" >';
                                echo '<p>'. $home_page_second_block['sub_title'] .'</p>';
                            echo '</div>';
                        }
                        if($home_page_second_block['content']) {
                            echo '<div class="desc">';
                                echo '<p>'.$home_page_second_block['content'].'</p>';
                            echo '</div>';
                        }
                        if($home_page_second_block['button']) {
                            echo '<a href="'.$button.'" class="btn btn-bg">' . $home_page_second_block['button'] . '</a>';
                        }
?>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <?php
                        $image = $home_page_second_block['image'];
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