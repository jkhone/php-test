<?php 

// Shows only small portion of whole post by character limiting
function get_excerpt( $content, $length = 400 ) {
    if( strlen( $content ) <= $length) {
        return $content;
    }

    $excerpt = substr( $content, 0, $length);
    $excerpt = strip_tags($excerpt);

    return $excerpt;

}

?>