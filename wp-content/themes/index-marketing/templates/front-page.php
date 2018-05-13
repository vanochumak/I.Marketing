<?php
/**
 * Template Name: Home page
 */
get_header();
?>
<section class="s-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg-01.jpg')">
    <?php include( get_template_directory() . '/templates/home-page/home-page-first-block.php'); ?>
</section>
<?php include( get_template_directory() . '/templates/home-page/home-page-second-block.php'); ?>
<?php
get_footer();