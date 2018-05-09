<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/> <!-- leave this for stats please -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="swDF0tWKFS1NKqLfZC2ZqDCerDFVAKvyiIFVK2jepio"/>
    <meta content="Nearshore web and mobile development company, Nearshore web and mobile development services, Nearshore e-commerce development services" name="keywords">
    <title>
        <?php is_home() ? bloginfo('description') : wp_title('|'); ?>| <?php bloginfo('name'); ?></title>
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class($class); ?> id="post-<?php the_ID(); ?>">
