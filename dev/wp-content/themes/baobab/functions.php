<?php

    function the_custom_excerpt(){ // The, dans la logique wordpress, c'est pour afficher.
        echo get_the_custom_excerpt();
}
    function get_the_custom_excerpt(){ // Get, dans la logique wordpress, c'est pour récupérer.
    $excerpt = get_the_content();
    $excerpt = strip_shortcode($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 150);
    return $excerpt;
}