<?php
function vb_pagination($query = null){

    global $wp_query;
    $query = $query ? $query : $wp_query;
    $big = 999999999;

    $paginate = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'type' => 'array',
            'total' => $query->max_num_pages,
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
//            'prev_text' => '<img src="' . get_template_directory_uri() . '/images/btn-black-arrow.png" alt="image description">',
//            'next_text' => '<img src="' . get_template_directory_uri() . '/images/btn-black-arrow.png" alt="image description">',
            'prev_text' => '<',
            'next_text' => '>'
        )
    );
//      print_r($paginate);
    if ($query->max_num_pages > 1) :
        ?>
           <ul class="pagination">
                <?php
                foreach ($paginate as $page) {
                    ?>
                    <li class="<?php if (strpos($page, 'current') !== false) {
                        echo 'active';
                    } ?>"><?php echo $page; ?></li>
                    <?php
                }
                ?>
            </ul>
        <?php
    endif;
}