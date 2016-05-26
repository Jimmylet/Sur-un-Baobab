<?php

/*
 * Define post_types & taxonomies
 */

add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-article', 931, 621, true );
add_image_size('thumb-article-home', 405, 303, true);
add_image_size( 'thumb-article-list', 585, 390, true);
add_image_size( 'thumb-article-bottom-list', 362, 241, true);
add_image_size('thumb-affiche', 420, 593, true);
add_image_size('thumb-affiche-home', 408, 576, true);

add_filter( 'thumb-article', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
      return array_merge( $sizes, array(
          'thumb-article' => __( 'image article' ),
      ) );
}

function baobab_custom_thumbnail_size(){
      add_image_size( 'thumb-article', 931, 621 );
}
add_action( 'after_setup_baobab', 'baobab_custom_thumbnail_size' );



register_post_type( 'project', [
            'label' => __('Productions','b'),
            'labels' => [
                        'singular_name' => __('Court-métrage','b'),
                        'add_new' => __('Ajouter un nouveau projet','b')
                  ],
            'description' => __('La liste de tous les projets (court-métrages, ateliers, ...) affichés sur le site.','b'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-editor-video',
            'supports' => ['title','thumbnail'],
            'has_archive' => true
      ] );

register_post_type( 'ateliers', [
    'label' => __('Ateliers','b'),
    'labels' => [
        'singular_name' => __('Ateliers','b'),
        'add_new' => __('Ajouter un nouvel atelier','b')
    ],
    'description' => __('La liste de tous les ateliers du site','b'),
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-smiley',
    'supports' => ['title','thumbnail']
] );

/*
 * Defines navigation menus.
 */

register_nav_menu( 'main-nav', __('Menu principal, affiché dans le header.','b') );

/*
 * Generates a custom excerpt, used on the homepage
 */

function custom_excerpt($new_length = 38, $new_more = '…') {
      // use the variable passed from $new_length as the length of the excerpt
      add_filter('excerpt_length', function () use ($new_length) {
            return $new_length;
      }, 999);
      // determine what comes at the end of the excerpt (in this case ...)
      add_filter('excerpt_more', function () use ($new_more) {
            return $new_more;
      });
      // generate the current excerpt
      $output = get_the_excerpt();
      // use wptexturize to basically sanitize the excerpt
      $output = apply_filters('wptexturize', $output);
      // convert_chars to remove metadata tags and convert others to unicode
      $output = apply_filters('convert_chars', $output);
      // the above line may not be needed depending on the status of wpautop
      // echo that sucker
      echo $output;
}

/*
 * Generates a link label containing the post_title (from the loop)
 */

function get_the_link($string, $replace = '%s')
{
      // Mode opératoire :
      // - On remplace la string "%s" (ou celle fournie par $replace) par le titre du post courant dans the_loop, entouré d'un span.
      // - Ne pas oublier d'ajouter une classe sur ce span (dans ce cas, une classe "sro" pour "Screen Readers Only"
      // - Via le CSS, on cible cette classe afin de lui attribuer les styles nécessaires pour la cacher.
      // Le but étant de créer un lien unique, tout en respectant un design demandant une répétition de liens qui, à priori, seraient identiques (par exemple : "Lire la suite", "Voir plus", ...).
      // Cette amélioration va impacter l'accessibilité de votre site, mais donc aussi son référencement.
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}

/*
 * Generates a custom menu array
 */

function b_get_menu_id( $location )
{
      $a = get_nav_menu_locations();
      if (isset($a[$location])) return $a[$location];
      return false;
}

function b_get_menu_items( $location )
{
      $navItems = [];
      foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
            // Si vous avoir un contrôle sur les liens affichés, c'est ici. (Par exemple: mettre $item->isCurrent à true|false)
            $item = new stdClass();
            $item->url = $obj->url;
            $item->label = $obj->title;
            $item->icon = $obj->classes[0];
            array_push($navItems, $item);
      }
      return $navItems;
}

/*
 *    Generates a languages menu
 *    Based on Polylang (plugin)
 */

function b_get_languages()
{
      $langItems = [];
      $rawItems = pll_the_languages( [
            'echo' => false,
            'hide_if_empty' => false,
            'hide_if_no_translation' => false,
            'raw' => true
      ] );

      foreach ($rawItems as $raw) {
            // Si vous souhaitez faire des manipulations sur le format des données, c'est ici. (Par exemple: changer les codes de langues de "es" à "ESP" pour des besoins en CSS)
            $item = new stdClass();
            $item->label = $raw['name'];
            $item->url = $raw['url'];
            $item->code = $raw['slug'];
            array_push($langItems, $item);
      }

      return $langItems;
}

/*
 * Breadcrumb Snippet
 */

function the_breadcrumb() {
      echo '<ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
      if (!is_home()) {
            echo '<li class="breadcrumb__link"  itemprop="title"><a class="breadcrumb__link__text" href="';
            echo get_home_url();
            echo '">';
            echo _e('Accueil','b');
            echo "</a></li>";
            if (is_category() || is_single()) {
                  echo '<li class="breadcrumb__link">';
                  echo '<a class="breadcrumb__link__text" href="';
                  the_category('</li><li class="breadcrumb__link>');
                  if (is_single()) {
                        echo '</li><li class=\"breadcrumb__link>';
                        the_title();
                        echo '</li>';
                  }
            } elseif (is_page()) {
                  echo '<li class="breadcrumb__link"><a class="breadcrumb__link__text"  itemprop="link" href="';
                  echo get_permalink();
                  echo '">';
                  echo the_title();
                  echo '</a>';
                  echo '</li>';
            }
      }
      elseif (is_tag()) {single_tag_title();}
      elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
      elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
      elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
      elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
      elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
      elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
      echo '</ol>';
}

function the_breadcrumb_article(){
      echo '<ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
      if (!is_home()) {
            echo '<li class="breadcrumb__link"  itemprop="title"><a class="breadcrumb__link__text" itemprop="url" href="';
            echo get_home_url();
            echo '">';
            echo _e('Accueil','b');
            echo "</a></li>";
            if (is_category() || is_single()) {
                  echo '<li class="breadcrumb__link">';
                  echo '<a class="breadcrumb__link__text" href="">';
                  echo _e('Actualités','b');
                  echo '</a>';
                  echo '</li>';
                  if (is_single()) {
                        echo '<li class="breadcrumb__link">';
                        echo '<a class="breadcrumb__link__text" href="">';
                        the_title();
                        echo '</a></li>';
                  }
            } elseif (is_page()) {
                  echo '<li class="breadcrumb__link"><a class="breadcrumb__link__text" href="';
                  echo get_permalink();
                  echo '">';
                  echo the_title();
                  echo '</a>';
                  echo '</li>';
            }
            elseif (is_tag()){
                  echo '<li class="breadcrumb__link">';
                  echo '<a class="breadcrumb__link__text" href="';
                  echo get_page_link(147);
                  echo '">';
                  echo _e('Actualités','b');
                  echo '</a>';
                  echo '</li>';
                  echo '<li class="breadcrumb__link"><a class="breadcrumb__link__text" href="';
                  echo get_tag_link();
                  echo '">';
                  echo single_tag_title();
                  echo '</a>';
                  echo '</li>';
            }
      }
      echo '</ol>';
}


    $phrase = get_the_content();
    // This is where wordpress filters the content text and adds paragraphs
    $phrase = apply_filters('the_content', $phrase);
    $replace = '<p class="news-view__paragraph" ">';

    echo str_replace('<p>', $replace, $phrase);

/*************************************************************************************/
/* TYNY MCE MODIFY */

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
      array_unshift( $buttons, 'styleselect' );
      return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
      // Define the style_formats array
      $style_formats = array(
            // Each array child is a format with it's own settings
          array(
              'title' => 'Sous-titre 1',
              'inline' => 'span',
              'classes' => 'sous-titre1',
              'wrapper' => false,

          ),
          array(
              'title' => 'Sous-titre 2',
              'block' => 'span',
              'classes' => 'sous-titre2',
              'wrapper' => false,
          ),
          array(
              'title' => 'Sous-titre 3',
              'block' => 'span',
              'classes' => 'sous-titre3',
              'wrapper' => false,
          ),
      );
      // Insert the array, JSON ENCODED, into 'style_formats'
      $init_array['style_formats'] = json_encode( $style_formats );

      return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

add_editor_style ( $stylesheet = './assets/css/editor-styles.css' );