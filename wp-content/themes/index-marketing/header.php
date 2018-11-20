<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/> <!-- leave this for stats please -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="swDF0tWKFS1NKqLfZC2ZqDCerDFVAKvyiIFVK2jepio"/>
    <title>
        <?php wp_title(''); ?>
    </title>
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <?php wp_head(); ?>
</head>
<?php $theme_options = get_option('theme_options'); ?>
<body <?php body_class($class); ?> id="post-<?php the_ID(); ?>">
<div class="min-height">
    <header class="header">
        <div class="container-fluid">
            <div class="header-inner">

                <nav class="header-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => '',
                    ));
                    ?>
                </nav>

                <div class="header-left">
                    <div class="hamburger">
                        <span></span>
                    </div>
                    <!-- error404 ? logo-inverse.png : logo.png -->
                    <a class="header-logo" href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SEOMarket"></a>
                </div>

                <div class="hamburger-2">
                    <span></span>
                </div>

                <div class="header-right">
                    <div class="header-search">
                        <div class="header-search-btn">
                            <i class="icon ion-android-search i-search"></i>
                            <i class="icon ion-android-close i-close"></i>
                        </div>
                        <form class="form" action="">
                            <div class="input-wrap input-wrap-icon">
                                <input type="text" class="input" placeholder="Search...">
                                <button type="submit"><i class="icon ion-android-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="header-tel btn"
                       href="tel:<?php echo $theme_options['theme_phone_number']; ?>"><?php echo $theme_options['theme_phone_number']; ?></a>
                </div>
            </div>
        </div>
    </header>
    <div id="content">