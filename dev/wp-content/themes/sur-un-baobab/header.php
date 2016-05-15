<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
      <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php _e('Sur un Baobab','b');?></title>
            <!--[if lt IE 9]>
            <!--<link rel="stylesheet" HREF="css/ie.css" TYPE="text/css">-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
            <![endif]-->
            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/styles.css';?>">
      </head>
      <body>
            <div class="site-container">
                  <div class="site-pusher">
                        <header class="header">
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