<?php
/*
Template Name: Homepage
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
      <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Accueil - <?php _e('Sur un Baobab','b');?></title>
<!--[if lt IE 9]>
<!--<link rel="stylesheet" HREF="css/ie.css" TYPE="text/css">-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/styles.css';?>">
</head>
<body>
      <div class="site-container">
            <div class="site-pusher">
                  <header class="header header-main">
                        <div class="header__title header__title-main">
                              <h1 class="header__title__main header__title-main__main" aria-level="1">Sur un Baobab</h1>
                              <span class="header__title__sub header__title-main__sub">Animation Workshop</span>
                        </div>
                        <nav class="menu">
                              <a href="<?php echo get_home_url(); ?>" class="header__logo">Logo</a>
                              <input type="checkbox" class="menu__icon" id="menu__icon">
                              <label for="menu__icon" class="menu__icon__label" id="menu__icon__label">Menu
                                    <span></span>
                              </label>
                              <div class="menu__container">
                                    <h2 class="menu__title" aria-level="2">Menu de navigation</h2>
                                    <div class="menu__lang__deskopt">
                                          <a href="" class="menu__lang__deskopt__item" lang="fr">FR</a>
                                          <a href="" class="menu__lang__deskopt__item" lang="es">ES</a>
                                          <a href="" class="menu__lang__deskopt__item" lang="en">EN</a>
                                    </div>
                                    <div class="menu__lang">
                                          <a href="" class="menu__lang__item" lang="fr">Français</a>
                                          <a href="" class="menu__lang__item" lang="es">Spanish</a>
                                          <a href="" class="menu__lang__item" lang="en">English</a>
                                    </div>
                                    <a href="<?php echo get_home_url(); ?>" class="menu__link">
                                          <span class="menu__item menu__item-home">Accueil</span>
                                    </a>
                                    <a href="./html/projet.html" class="menu__link">
                                          <span class="menu__item menu__item-projet">Projet</span>
                                    </a>
                                    <a href="./html/news.html" class="menu__link">
                                          <span class="menu__item menu__item-news">Actualités</span>
                                    </a>
                                    <a href="./html/productions.html" class="menu__link">
                                          <span class="menu__item menu__item-prod">Productions</span>
                                    </a>
                                    <a href="./html/photos.html" class="menu__link">
                                          <span class="menu__item menu__item-pics">Photos</span>
                                    </a>
                                    <a href="./html/ateliers.html" class="menu__link">
                                          <span class="menu__item menu__item-tutos">Ateliers</span>
                                    </a>
                                    <a href="./html/contact.html" class="menu__link menu__link--last">
                                          <span class="menu__item menu__item-contact">Contact</span>
                                    </a>
                              </div>
                              <span aria-hidden="true" class="menu__icon-bg"></span>
                        </nav>

<div class="bottom-header">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <a href="#" class="bottom-header__button"><?php _e('Aidez-nous','b');?></a>
      <a href="#" class="bottom-header__button"><?php _e('Visionnez nos films','b');?></a>
                        <span class="bottom-header__text">
                            <?php bloginfo('description');?>
                        </span>
      <?php endwhile; endif; ?>
</div>
</header>

<div class="site-content">
      <div class="container">
            <section class="intro-img">
                  <h2 class="intro-img__title" aria-level="2"><?php _e('Un projet d’animation pour les enfants','b');?></h2>
                  <br>
                  <a class="intro-img__button" href="#"><?php _e('En savoir plus','b');?></a>
            </section>
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <section class="intro-text">
                  <h2 class="intro-text__title">Rencontrer. Animer. Aider.</h2>
                  <div class="intro-text__container">
                        <img class="intro-text__img" src="<?php bloginfo('template_directory'); ?>/assets/img/svg/baobab_logo_svg.svg" alt="Logo Surunbaobab"
                             width="220"
                             height="177">
                        <p class="intro-text__paragraph">
                              <?php the_field('home_description'); ?>
                        </p>
                  </div>
            </section>
            <?php endwhile; endif; ?>
            <div class="img-baobab">
                  <div class="img-baobab__title">
                        <div class="img-baobab__title__img"></div>
                  </div>
                  <svg class="img-baobab__deco" width="23" height="336" viewBox="0 0 23 336"
                       xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(1 1.542)" stroke="#FFF" stroke-width="2" fill="none"
                           fill-rule="evenodd">
                              <circle cx="10.5" cy="10.5" r="10.5"/>
                              <path d="M10 21v312.458069" stroke-linecap="square"/>
                        </g>
                  </svg>

            </div>
            <section class="last-news">
                  <h2 class="last-news__title" aria-level="2">Nos dernières nouvelles</h2>
							<span class="last-news__newsletters">
								Ne manquez plus rien, <a href="#" class="last-news__newsletters__link">abonnez-vous &nbsp;!</a>
							</span>
                  <svg class="last-news__line2" width="2" height="98" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5V97" stroke="#FFF" stroke-width="2" fill="none" fill-rule="evenodd"
                              stroke-linecap="square"/>
                  </svg>
                  <div class="last-news__articles">
                        <article class="last-news__articles__top">
                              <a href="#" class="last-news__articles__img">
                                    <img src="./img/jpg/article_top_min.jpg" alt="" width="450" height="303">
                              </a>
                              <div class="last-news__articles__container-text">
                                    <h3 class="last-news__articles__top__title" aria-level="3">
                                          Tongasoa et le vazaha diffusé au Cambodge et en Taïlande
                                    </h3>
                                    <p class="last-news__articles__top__intro">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                          quis nostrud exercitation ullamco laboris nis.
                                    </p>
                                    <a href="#" class="last-news__articles__top__link">Lire l’article</a>
                              </div>
                        </article>
                        <div class="last-news__container-bottom-articles">
                              <a href="#" class="last-news__bottom-link">
                                    <article class="article__vignette">
                                          <img class="article__vignette__img" src="./img/jpg/preview_article1.jpg"
                                               alt="" width="362" height="241">
                                          <div class="article__vignette__container">
                                                <h3 class="article__vignette__title" aria-level="3">
                                                      Tongasoa et le vazaha diffusé au Cambodge et en Thaïlande
                                                </h3>
                                                <div class="article__vignette__more-container">
                                                      <div class="article__vignette__more">
                                                            <svg width="13" height="13" viewBox="0 0 13 13"
                                                                 xmlns="http://www.w3.org/2000/svg">
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
                              <a href="#" class="last-news__bottom-link">
                                    <article class="article__vignette">
                                          <img class="article__vignette__img" src="./img/jpg/preview_article2.jpg"
                                               alt="" width="362" height="241">
                                          <div class="article__vignette__container">
                                                <h3 class="article__vignette__title" aria-level="3">
                                                      Tongasoa et le vazaha diffusé au Cambodge et en Thaïlande
                                                </h3>
                                                <div class="article__vignette__more-container">
                                                      <div class="article__vignette__more">
                                                            <svg width="13" height="13" viewBox="0 0 13 13"
                                                                 xmlns="http://www.w3.org/2000/svg">
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
                              <a href="#" class="last-news__bottom-link">
                                    <article class="article__vignette">
                                          <img class="article__vignette__img" src="./img/jpg/preview_article3.jpg"
                                               alt="" width="362" height="241">
                                          <div class="article__vignette__container">
                                                <h3 class="article__vignette__title" aria-level="3">
                                                      Tongasoa et le vazaha diffusé au Cambodge et en Thaïlande
                                                </h3>
                                                <div class="article__vignette__more-container">
                                                      <div class="article__vignette__more">
                                                            <svg width="13" height="13" viewBox="0 0 13 13"
                                                                 xmlns="http://www.w3.org/2000/svg">
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
                        </div>
                  </div>
            </section>
            <section class="donate">
                  <svg class="donate__img" width="397" height="37" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#FFF" fill-rule="evenodd" fill-opacity=".6">
                              <path d="M396.574243 36.767081h-36l18-36M360.574243 36.767081h-36l18-36M324.574243 36.767081h-36l18-36M288.574243 36.767081h-36l18-36M252.574243 36.767081h-36l18-36M216.574243 36.767081h-36l18-36M180.574243 36.767081h-36l18-36M144.574243 36.767081h-36l18-36M108.574243 36.767081h-36l18-36M72.574243 36.767081h-36l18-36"/>
                              <path d="M36.574243 36.767081h-36l18-36"/>
                        </g>
                  </svg>

							<span class="donate__text1">
								Offrons un sourire à tous
							</span>
							<span class="donate__text2">
								les enfants
							</span>
                  <a href="#" class="donate__button">
                        <h2>Faire un don</h2>
                  </a>
                  <div class="follow-us">
								<span class="follow-us__text">
									Nous suivre, c’est nous aider &nbsp;!
								</span>
                        <a href="" class="follow-us__item follow-us__item-fb" title="Vers Facebook"><span
                                  class="visuallyhidden">Facebook</span></a>
                        <a href="" class="follow-us__item follow-us__item-tw" title="Vers Twitter"><span
                                  class="visuallyhidden">Twitter</span></a>
                        <a href="" class="follow-us__item follow-us__item-inst" title="Vers Instagram"><span
                                  class="visuallyhidden">Instagram</span></a>
                        <a href="" class="follow-us__item follow-us__item-vim" title="Vers Viméo"><span
                                  class="visuallyhidden">Viméo</span></a>
                        <a href="" class="follow-us__item follow-us__item-yout" title="Vers Youtube"><span
                                  class="visuallyhidden">Youtube</span></a>
                  </div>
            </section>
            <section class="last-prod">
                  <div class="last-prod__container">
                        <div class="last-prod__item">
                              <a href="" class="last-prod__item__link"
                                 title="Vers la fiche de Tongasoa et le Vazaha">
                                    Tongasoa et le Vazaha
                                    <img src="./img/jpg/Tongasoa_Poster_FR.jpg"
                                         alt="Affiche de Tongasoa et le Vazaha" class="last-prod__item__img"
                                         width="408" height="576">
                                    <div class="last-prod__item__hovereffect"></div>
                              </a>
                        </div>
                        <div class="last-prod__item">
                              <a href="" class="last-prod__item__link" title="Vers la fiche de Safidin’i Pela">
                                    Safidin’i Pela
                                    <img src="./img/jpg/SafidinIPela_Poster_FR.jpg" alt="Affiche de Safidin’i Pela"
                                         class="last-prod__item__img" width="408" height="576">
                                    <div class="last-prod__item__hovereffect"></div>
                              </a>
                        </div>
                  </div>
                  <a href="#" class="last-prod__button" title="Voir toutes nos production">
                        <h2>Voir nos productions</h2>
                  </a>
            </section>