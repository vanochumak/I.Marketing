<?php get_header();?>
    <div class="not-found table-view">
        <div class="content">
            <p class="not-found-numb">

            </p>
            <h1>Page not found</h1>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-default">Home Page</a>
            <!--<h3><a href="dev/">Visit home page</a></h3>-->
        </div>
    </div>
<?php get_footer(); ?>