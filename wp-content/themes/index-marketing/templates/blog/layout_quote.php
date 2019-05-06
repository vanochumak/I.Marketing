<?php
$quote_blog = get_sub_field('quote_blog');
?>
<div class="article-quote">
    <i class="icon ion-quote"></i>
    <p><?php echo $quote_blog; ?></p>
    <div class="quote-meta">
        by <span><?php the_author(); ?></span>
    </div>
</div>
