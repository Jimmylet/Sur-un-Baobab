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
      <script type="text/javascript">
          window.addEventListener('scroll', function(event) {
              var depth, i, layer, layers, len, movement, topDistance, translate3d;
              topDistance = this.pageYOffset;
              layers = document.querySelectorAll("[data-type='parallax']");
              for (i = 0, len = layers.length; i < len; i++) {
                  layer = layers[i];
                  depth = layer.getAttribute('data-depth');
                  movement = -(topDistance * depth);
                  translate3d = 'translate3d(0, ' + movement + 'px, 0)';
                  layer.style['-webkit-transform'] = translate3d;
                  layer.style['-moz-transform'] = translate3d;
                  layer.style['-ms-transform'] = translate3d;
                  layer.style['-o-transform'] = translate3d;
                  layer.style.transform = translate3d;
              }
          });
      </script>
    <?php wp_head(); ?>
  </head>
<body <?php echo body_class(); ?>>
      <div class="site-container">
            <div class="site-pusher">
                  <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'full' ); ?>
                  <header class="header header-main">
                      <div class="header__lang">
                          <?php foreach (b_get_menu_items('menu-lang') as $navItem): ?>
                              <a href="<?php echo $navItem->url;?>" class="header__lang__link">
                                  <?php echo $navItem->label; ?>
                              </a>
                          <?php endforeach; ?>
                      </div>
                        <div class="header__title header__title-main">
                              <h1 class="header__title__main header__title-main__main visuallyhidden" aria-level="1">Sur un Baobab - Animation Workshop</h1>
                        </div>
                        <div class="parallax">
                          <div class="parallax__layer parallax__layer-01" data-type="parallax" data-depth="0"></div>
                          <!--<div class="parallax__layer parallax__layer-02" data-type="parallax" data-depth="0.025"></div>-->
                          <div class="parallax__layer parallax__layer-03" data-type="parallax" data-depth=""0.75"></div>
                          <div class="parallax__layer parallax__layer-04" data-type="parallax" data-depth="0.1"></div>
                          <div class="parallax__layer parallax__layer-05" data-type="parallax" data-depth="0.15"></div>
                          <div class="parallax__layer parallax__layer-06" data-type="parallax" data-depth="0.2"></div>
                          <div class="parallax__layer parallax__layer-07" data-type="parallax" data-depth="0.3"></div>
                          <div class="parallax__layer parallax__layer-08" data-type="parallax" data-depth="0.4"></div>
                          <div class="parallax__layer parallax__layer-10" data-type="parallax" data-depth="0.5"></div>
                          <div class="parallax__layer parallax__layer-11" data-type="parallax" data-depth="0.6"></div>
                          <div class="parallax__layer parallax__layer-12" data-type="parallax" data-depth="0.7"></div>
                          <div class="parallax__layer parallax__layer-13" data-type="parallax" data-depth="0.8"></div>
                          <div class="parallax__layer parallax__layer-14" data-type="parallax" data-depth="0.9"></div>
                          <div class="parallax__layer parallax__layer-15" data-type="parallax" data-depth="1"></div>
                          <div class="parallax__layer parallax__layer-09" data-type="parallax" data-depth="1"></div>
                          <div class="fix-parallax"></div>

                        </div>
                        <!-- <img class="layer-mask" src="<?php bloginfo('template_directory'); ?>/assets/img/parallax/mask.svg" alt=""> -->

                        <nav class="menu">
                              <!-- <a href="<?php echo get_home_url(); ?>" class="header__logo">Logo</a> -->
                              <input type="checkbox" class="menu__icon" id="menu__icon">
                              <label for="menu__icon" class="menu__icon__label" id="menu__icon__label"><?php _e('Menu','b');?>
                                    <span></span>
                              </label>
                              <div class="menu__container">
                                    <h2 class="menu__title" aria-level="2"><?php _e('Menu de navigation','b');?></h2>

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
                                          <a href="<?php echo $navItem->url;?>" class="menu__link">
                                            <span class="menu__item menu__item-<?php echo $navItem->icon;?> menu__item--<?php echo $thePostID == $navItem->id ? "active" : "" ;?>" title="Vers la page <?php echo $navItem->label;?>">
                                              <?php echo $navItem->label;?>
                                            </span>
                                          </a>
                                    <?php endforeach; ?>
                              </div>
                              <span aria-hidden="true" class="menu__icon-bg"></span>
                        </nav>
</header>

<div class="site-content">
      <div class="container">

            <section class="intro-text">
                  <h2 class="intro-text__title">Sur un baobab</h2>
                  <div class="intro-text__container">
                        <img class="intro-text__img" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/baobab_logo_svg.svg" alt="Logo Surunbaobab"
                             width="220"
                             height="177">
                              <?php the_field('home_description'); ?>
                  </div>
                  <a class="intro-text__button" href="<?php the_permalink('27');?>"><?php _e('En savoir plus','b');?></a>
            </section>

            <!-- DERNIERES PRODUCTIONS -->
            <section class="last-prod">
              <h2 class="last-prod__title">Nos dernières réalisations</h2>
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
                  <a href="<?php echo get_page_link(200); ?>" class="last-prod__button" title="<?php _e('Aller vers la page productions','b');?>">
                        <span><?php _e('Voir toutes nos réalisations','b');?></span>
                  </a>
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
                  <a href="<?php the_permalink('311');?>" class="donate__button" title="Vers la page Faire un don">
                        <span class="donate__animdon"><?php _e('Faites un don','b');?>&nbsp;!</span>
                        <h2 class="donate__animsoutien"><?php _e('Soutenez-nous','b');?>&nbsp;!</h2>
                  </a>
                  <div class="follow-us">
								<span class="follow-us__text">
									<?php _e('Nous suivre, c’est nous soutenir','b');?> &nbsp;!
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
            <section class="last-news" style="position: relative;">
              <svg class="intro-text__deco" width="23" height="212"
                   >
                    <g transform="translate(1 1.542)" stroke="#DAA700" stroke-width="2" fill="none"
                       fill-rule="evenodd">
                          <circle cx="10.5" cy="10.5" r="10.5"/>
                          <path d="M10 21v212.458069" stroke-linecap="square"/>
                    </g>
              </svg>
                  <h2 class="last-news__title" aria-level="2"><?php _e('Nos dernières nouvelles','b');?></h2>
							<span class="last-news__newsletters">
								<?php _e('Ne ratez plus rien','b');?>, <a href="#" class="last-news__newsletters__link"><?php _e('abonnez-vous','b');?></a> &nbsp;!
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
                              <a href="<?php the_permalink();?>" class="last-news__articles__img" title="<?php _e('Vers l’article');?> <?php echo the_title();?>">
                                    <img src="<?php echo $url[0] ?>" alt="<?php echo $alt;?>" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
                              </a>
                              <a href="<?php the_permalink();?>" title="<?php _e('Vers l’article');?> <?php echo the_title();?>">
                                <div class="last-news__articles__container-text">
                                      <h3 class="last-news__articles__top__title" aria-level="3">
                                            <?php the_title();?>
                                      </h3>
                                      <p class="last-news__articles__top__intro">
                                            <?php custom_excerpt(); ?>
                                      </p>
                                      <span href="<?php the_permalink();?>" class="last-news__articles__top__link"><?php _e('Lire l’article','b');?></span>
                                </div>
                              </a>
                        </article>



                        <?php wp_reset_postdata(); ?>
                        <?php endwhile; endif; ?>
                        <div class="last-news__container-bottom-articles">
                              <!-- Debut WP_QUERY 2 -->
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

<?php $easy_options = get_option("easy_page_options");?>
<footer class="footer">
    <div class="footer__container">
        <section class="footer__section footer__help-us">
            <h2 class="footer__section__title footer__help-us__title">Aidez-nous</h2>
            <a href="<?php the_permalink('311');?>#donate" class="footer__help-us__link"><?php _e('Faites un don','b');?></a>
            <a href="<?php the_permalink('311');?>#acheteralbum" class="footer__help-us__link"><?php _e('Achetez notre album photo','b');?></a>
            <a href="<?php the_permalink('311');?>#diffuser" class="footer__help-us__link"><?php _e('Promouvoir nos vidéos','b');?></a>
        </section>
        <section class="footer__section footer__last-news">
            <h2 class="footer__section__title footer__last-news__title"><?php _e('Nos derniers articles','b');?></h2>

            <?php
            $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'post'] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
            ?>

            <a href="<?php the_permalink();?>"
               class="footer__last-news__item"
               title="<?php _e('Vers l’article');?> <?php echo the_title();?>"
            >
              <?php echo the_title();?>
            </a>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; endif; ?>

        </section>
        <section class="footer__section footer__section__contactsocial">
            <h2 aria-level="2" class="visuallyhidden">Contactez-nous et suivez-nous</h2>
            <div class="footer__contact">
                <span class="footer__contact__title footer__section__title"><?php _e('Contactez-nous','b');?></span>
                <a href="<?php the_permalink('142');?>"
                   class="footer__contact__item"><?php _e('Envoyer un e-mail','b');?></a>
            </div>
            <div class="footer__social">
                <span class="footer__social__title footer__section__title">Suivez-nous </span>
                <a href="<?php echo $easy_options['footer_fb'];?>" class="footer__social__item footer__social__item-fb"
                   title="<?php _e('Vers','b');?> Facebook">
                    <span class="visuallyhidden">Facebook</span>
                </a>
                <a href="<?php echo $easy_options['footer_tw'];?>" class="footer__social__item footer__social__item-tw"
                   title="<?php _e('Vers','b');?> Twitter">
                    <span class="visuallyhidden">Twitter</span>
                </a>
                <a href="<?php echo $easy_options['footer_inst'];?>" class="footer__social__item footer__social__item-inst"
                   title="<?php _e('Vers','b');?> Instagram">
                    <span class="visuallyhidden">Instagram</span>
                </a>
                <a href="<?php echo $easy_options['footer_vim'];?>" class="footer__social__item footer__social__item-vim"
                   title="<?php _e('Vers','b');?> Viméo">
                    <span class="visuallyhidden">Viméo</span>
                </a>
                <a href="<?php echo $easy_options['footer_yout'];?>" class="footer__social__item footer__social__item-yout"
                   title="<?php _e('Vers','b');?> Youtube">

                    <span class="visuallyhidden">Youtube</span>
                </a>
            </div>
        </section>
    </div>

    <div class="footer__copyright">
        <div class="footer__copyright__container">
            © Sur un Baobab - Made with &nbsp;♥&nbsp;  by <a href="http://letecheur.me"
                                           title="<?php _e('Vers le site du développeur','b');?>" target="_blank">
                Jimmy Letecheur</a>
        </div>
    </div>

</footer>
</div>
</div>
<div class="site-cache" id="site-cache"></div>
</div>
</div>
<?php wp_enqueue_script( 'jquery' ); ?>
<script type="text/javascript">
  (function($){

    var $window = $(window)

    $('#menu__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
    })

    $(window).on('resize', function () {
        if ($window.width() > 787 ){
            $('body').removeClass('with--sidebar');
        }
    })

  })(jQuery);
</script>
<script type="text/javascript">
  $(function() {

    var header = $(".menu");
        siteContent = $(".site-content")
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
            width = $(window).width();

        /*if (scroll >= 30 ) {
            $(".header__lang").css({"display":"none"});
        }*/

        if (scroll >= 736 && width >= 1000  ) {
            header.addClass("headerwhite");
            siteContent.addClass("withfixed");
        } else {
            header.removeClass("headerwhite");
            siteContent.removeClass("withfixed");
        }

        if (scroll >= 850 && width >= 1000 ) {
            header.addClass("headerwhite--min")
        } else {
            header.removeClass("headerwhite--min")
        }
    });
  });
</script>
</body>
</html>
