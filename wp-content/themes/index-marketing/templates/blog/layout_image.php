<?php
$image_blog = get_sub_field('image_blog');
?>
<div class="img">
    <?php
    if($image_blog) {
        ?>
        <img src="<?php echo $image_blog['url']; ?>" alt="<?php echo $image_blog['alt']; ?>">
        <?php
    }
    ?>
</div>
