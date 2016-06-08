<?php
/*
Template Name: Homepage
*/

?>
<?php $easy_options = get_option("easy_page_options");?>
<!DOCTYPE html>
<html lang="fr">
      <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Accueil - <?php _e('Sur un Baobab','b');?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/styles.css';?>">
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/2.9.10/ie8.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/ie8.css';?>">
<![endif]-->
</head>
<body>
      <div class="site-container">
            <div class="site-pusher">
                  <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'full' ); ?>
                  <style media="screen" scoped>
                    .header-main{
                      background: url("<?php echo get_template_directory_uri() . '/assets/img/png/pattern.png';?>") repeat, url("<?php echo $url[0]; ?>") no-repeat center center/cover;
                    }
                  </style>
                  <header class="header header-main">
                        <div class="header__title header__title-main">
                              <h1 class="header__title__main header__title-main__main" aria-level="1">Sur un Baobab</h1>
                              <span class="header__title__sub header__title-main__sub">Animation Workshop</span>
                        </div>
                        <nav class="menu">
                              <a href="<?php echo get_home_url(); ?>" class="header__logo">Logo</a>
                              <input type="checkbox" class="menu__icon" id="menu__icon">
                              <label for="menu__icon" class="menu__icon__label" id="menu__icon__label"><?php _e('Menu','b');?>
                                    <span></span>
                              </label>
                              <div class="menu__container">
                                    <h2 class="menu__title" aria-level="2"><?php _e('Menu de navigation','b');?></h2>
                                    <div class="menu__lang__deskopt">
                                          <a href="http://baobab.letecheur.me/fr/" class="menu__lang__deskopt__item" lang="fr">FR</a>
                                          <a href="http://baobab.letecheur.me/es/" class="menu__lang__deskopt__item" lang="es">ES</a>
                                          <a href="http://baobab.letecheur.me/en/" class="menu__lang__deskopt__item" lang="en">EN</a>
                                    </div>
                                    <div class="menu__lang">
                                          <a href="http://baobab.letecheur.me/fr/" class="menu__lang__item" lang="fr">Français</a>
                                          <a href="http://baobab.letecheur.me/es/" class="menu__lang__item" lang="es">Spanish</a>
                                          <a href="http://baobab.letecheur.me/en/" class="menu__lang__item" lang="en">English</a>
                                    </div>
                                    <?php
                          						global $post;
                          						$thePostID = $post->ID;
                          					?>
                                    <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                                          <a href="<?php echo $navItem->url;?>" class="menu__link"><span class="menu__item menu__item-<?php echo $navItem->icon;?> menu__item--<?php echo $thePostID == $navItem->id ? "active" : "" ;?>" title="Vers la page <?php echo $navItem->label;?>"><?php echo $navItem->label;?></span></a>
                                    <?php endforeach; ?>
                              </div>
                              <span aria-hidden="true" class="menu__icon-bg"></span>
                        </nav>
</header>

<div class="site-content">
      <div class="container">

            <section class="intro-text">
                  <h2 class="intro-text__title">Rencontrer. Animer. Aider.</h2>
                  <div class="intro-text__container">
                        <img class="intro-text__img" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/baobab_logo_svg.svg" alt="Logo Surunbaobab"
                             width="220"
                             height="177">
                              <?php the_field('home_description'); ?>
                  </div>
                  <a class="intro-text__button" href="<?php the_permalink('27');?>"><?php _e('En savoir plus','b');?></a>
                  <svg class="intro-text__deco" width="23" height="212"
                       >
                        <g transform="translate(1 1.542)" stroke="#DAA700" stroke-width="2" fill="none"
                           fill-rule="evenodd">
                              <circle cx="10.5" cy="10.5" r="10.5"/>
                              <path d="M10 21v212.458069" stroke-linecap="square"/>
                        </g>
                  </svg>
            </section>

            <section class="last-news">
                  <h2 class="last-news__title" aria-level="2"><?php _e('Nos dernières nouvelles','b');?></h2>
							<span class="last-news__newsletters">
								<?php _e('Ne ratez plus rien','b');?>, <a href="#" class="last-news__newsletters__link"><?php _e('abonnez-vous','b');?> &nbsp;!</a>
							</span>
                  <svg class="last-news__line2" width="2" height="98" >
                        <path d="M1 1.5V97" stroke="#DAA700" stroke-width="2" fill="none" fill-rule="evenodd"
                              stroke-linecap="square"/>
                  </svg>
                  <div class="last-news__articles">
                        <!-- Debut WP_QUERY -->
                        <?php
                        $posts = new WP_Query( ['posts_per_page' => 1, 'post_type' => 'post'] );
                        if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                        ?>
                        <!-- Recup thumbnail et size -->
                        <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-article-home' ); ?>
                        <!-- Recup alt -->
                        <?php $thumb_id = get_post_thumbnail_id($post->id);
                        $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>

                        <article class="last-news__articles__top">
                              <a href="<?php the_permalink();?>" class="last-news__articles__img">
                                    <img src="<?php echo $url[0] ?>" alt="<?php echo $alt;?>" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
                              </a>
                              <div class="last-news__articles__container-text">
                                    <h3 class="last-news__articles__top__title" aria-level="3">
                                          <?php the_title();?>
                                    </h3>
                                    <p class="last-news__articles__top__intro">
                                          <?php custom_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink();?>" class="last-news__articles__top__link"><?php _e('Lire l’article','b');?></a>
                              </div>
                        </article>
                        <?php wp_reset_postdata(); ?>
                        <?php endwhile; endif; ?>
                        <div class="last-news__container-bottom-articles">
                              <!-- Debut WP_QUERY -->
                              <?php
                              $posts = new WP_Query( ['posts_per_page' => 3, 'offset' => 1, 'post_type' => 'post'] );
                              if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                                    ?>
                                    <!-- Recup thumbnail et size -->
                                    <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-article-homebottom' ); ?>
                                    <!-- Recup alt -->
                                    <?php $thumb_id = get_post_thumbnail_id($post->id);
                                    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>

                              <a href="<?php the_permalink();?>" class="last-news__bottom-link" title="<?php _e('Vers l’article','b');?> <?php the_title();?>">

                                    <article class="article__vignette">
                                          <img class="article__vignette__img" src="<?php echo $url[0] ?>"
                                               alt="<?php echo $alt;?>" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
                                          <div class="article__vignette__container">
                                                <h3 class="article__vignette__title" aria-level="3">
                                                      <?php the_title();?>
                                                </h3>
                                                <div class="article__vignette__more-container">
                                                      <div class="article__vignette__more">
                                                            <svg width="13" height="13" viewBox="0 0 13 13"
                                                                 >
                                                                  <g stroke="#282828" fill="none" fill-rule="evenodd"
                                                                     stroke-linecap="square">
                                                                        <path d="M6.6848156 1.29920082V12.0870395M1.29920082 6.6848156H12.0870395"/>
                                                                  </g>
                                                            </svg>
                                                      </div>
                                                </div>
                                          </div>
                                    </article>
                              </a>
                              <?php wp_reset_postdata(); ?>
                              <?php endwhile; endif; ?>
                        </div>
                  </div>
            </section>
            <!-- FAIRE UN DON ET CITATION -->
            <section class="donate">
                  <svg class="donate__img" width="397" height="37" >
                        <g fill="#FFF" fill-rule="evenodd" fill-opacity=".6">
                              <path d="M396.574243 36.767081h-36l18-36M360.574243 36.767081h-36l18-36M324.574243 36.767081h-36l18-36M288.574243 36.767081h-36l18-36M252.574243 36.767081h-36l18-36M216.574243 36.767081h-36l18-36M180.574243 36.767081h-36l18-36M144.574243 36.767081h-36l18-36M108.574243 36.767081h-36l18-36M72.574243 36.767081h-36l18-36"/>
                              <path d="M36.574243 36.767081h-36l18-36"/>
                        </g>
                  </svg>

							<span class="donate__text1">
								<?php _e('Offrons un sourire à tous','b');?>
							</span>
							<span class="donate__text2">
								<?php _e('les enfants','b');?>
							</span>
                  <a href="<?php the_permalink('311');?>" class="donate__button">
                        <h2><?php _e('Soutenez-nous','b');?>&nbsp;!</h2>
                  </a>
                  <div class="follow-us">
								<span class="follow-us__text">
									<?php _e('Nous suivre, c’est nous aider','b');?> &nbsp;!
								</span>
                        <a href="<?php echo $easy_options['footer_fb'];?>" class="follow-us__item follow-us__item-fb" rel="external" title="<?php _e('Vers','b');?> Facebook"><span
                                  class="visuallyhidden">Facebook</span></a>
                        <a href="<?php echo $easy_options['footer_tw'];?>" class="follow-us__item follow-us__item-tw" rel="external" title="<?php _e('Vers','b');?> Twitter"><span
                                  class="visuallyhidden">Twitter</span></a>
                        <a href="<?php echo $easy_options['footer_inst'];?>" class="follow-us__item follow-us__item-inst" rel="external" title="<?php _e('Vers','b');?> Instagram"><span
                                  class="visuallyhidden">Instagram</span></a>
                        <a href="<?php echo $easy_options['footer_vim'];?>" class="follow-us__item follow-us__item-vim" rel="external" title="<?php _e('Vers','b');?> Viméo"><span
                                  class="visuallyhidden">Viméo</span></a>
                        <a href="<?php echo $easy_options['footer_yout'];?>" class="follow-us__item follow-us__item-yout" rel="external" title="<?php _e('Vers','b');?> Youtube"><span
                                  class="visuallyhidden">Youtube</span></a>
                  </div>
            </section>
            <!-- DERNIERES PRODUCTIONS -->
            <section class="last-prod">
                  <div class="last-prod__container">
                        <?php
                        $posts = new WP_Query( ['posts_per_page' => 2, 'post_type' => 'project'] );
                        if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                              ?>
                              <!-- Recup thumbnail et size -->
                              <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-affiche-home' ); ?>
                              <!-- Recup alt -->
                              <?php $thumb_id = get_post_thumbnail_id($post->id);
                              $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>
                        <div class="last-prod__item">
                                    <a href="<?php the_permalink();?>" class="last-prod__item__link"
                                       title="<?php _e('Vers la fiche de','b');?> <?php the_title();?>">
                                          <?php the_title();?>
                                          <img src="<?php echo $url[0] ?>"
                                               alt="<?php echo $alt;?>" class="last-prod__item__img"
                                               width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
                                          <div class="last-prod__item__hovereffect"></div>
                                    </a>
                              </div>
                              <?php wp_reset_postdata(); ?>
                        <?php endwhile; endif; ?>
                  </div>
                  <a href="<?php echo get_page_link(200); ?>" class="last-prod__button" title="<?php _e('Voir toutes nos productions','b');?>">
                        <h2><?php _e('Voir nos réalisations','b');?></h2>
                  </a>
            </section>

<?php

get_footer();
