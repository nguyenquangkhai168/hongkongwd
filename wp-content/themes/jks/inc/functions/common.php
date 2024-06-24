<?php
function get_youtube_embed_url( $url ){
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}

function hk_pagination( $custom_query = null, $paged = null ) {
    global $wp_query;

    if ( $custom_query ) {
        $main_query = $custom_query;
    } else {
        $main_query = $wp_query;
    }

    $paged = ( $paged ) ? $paged : get_query_var( 'paged' );
    $big   = 999999999;
    $total = isset( $main_query->max_num_pages ) ? $main_query->max_num_pages : '';
    if ( $total > 1 ) {
        echo '<div class="pagenavi">';
    }
    echo paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, $paged ),
        'total'     => $total,
        'mid_size'  => '4',
        'prev_text' => '<i class="far fa-long-arrow-alt-left"></i>',
        'next_text' => '<i class="far fa-long-arrow-alt-right"></i>',
    ) );
    if ( $total > 1 ) {
        echo '</div>';
    }
}