<?php

/*
 * Define post types
 */

add_theme_support('post-thumbnails'); // FAIRE FONCTIONNER LES THUMBNAILS

// Créer de nouveaux post types (des customs post type)
/*register_post_type( $post_type, $args );*/ // VOIR COMMENT CA S'ECRIT
// Ici on définit l'interface d'administrations, avec les ongles comme celui de l'article. Ici c'est un projet
register_post_type( 'project', [
      'label' => 'Court-métrages',
      'labels' => [
            'singular_name' => 'Court-métrage',
            'add_new' => 'Ajouter un nouveau projet'
      ],
      'description' => 'La liste de tous les projets (court-métrages, ateliers, …) affichés sur le site.',
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-editor-video',  // Voir les dashs icons dans wordpress
      'supports' => ['title', 'editor', 'thumbnail'],
      "has_archive" => true
] );

register_taxonomy('project-type', 'project', [
      'label' => 'Types de projets',
      'labels' => [
            'singular_name' => 'Type de projet'
      ],
      'public' => true,
      'description' => 'Le procédé utilisé pour créer ce projet',
      'hierarchical' => true
]);

/*
 * Generate an exercpt based on custom rules, used on the homepage.
 */

function get_the_custom_excerpt($length = 150)
{
      $excerpt = get_the_content();
      $excerpt = strip_shortcodes( $excerpt );
      $excerpt = strip_tags( $excerpt );
      return substr($excerpt, 0, $length);
}

function the_custom_excerpt($length = 150)
{
      echo get_the_custom_excerpt($length);
}


/// Mettre un text dans un lien et mettre dedans un %s,
//// Generate a link label containing the post_title
function get_the_link($string, $replace = '%s')
{
      // On remplace le symbole '%s' (par défaut) par le titre du post courant, entouré d'un span (avec une classe "sro" = "Screen readers only" qui sera cachée en CSS. Le but étant de créer un lien unique sur la page, tout en gardant un lien formaté de façon simple et surtout de façon ) pouvoir le traduire.
      return str_replace('$replace', '<span class="sro">' . get_the_title() . '</span>', __($string, 'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link(replace);
}