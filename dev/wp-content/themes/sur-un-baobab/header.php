<!DOCTYPE html>
<html lang="fr">
      <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php the_title();?> - <?php _e('Sur un Baobab','b');?></title>
            <!--[if lt IE 9]>
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
                                    <label for="menu__icon" class="menu__icon__label" id="menu__icon__label"><?php _e('Menu','b');?>
                                          <span></span>
                                    </label>
                                    <div class="menu__container">
                                          <h2 class="menu__title" aria-level="2"><?php _e('Menu de navigation','b');?></h2>
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
                                          <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                                                <a href="<?php echo $navItem->url;?>" class="menu__link"><span class="menu__item menu__item-<?php echo $navItem->icon;?>" title="Vers la page <?php echo $navItem->label;?>"><?php echo $navItem->label;?></span></a>
                                          <?php endforeach; ?>
                                    </div>
                                    <span aria-hidden="true" class="menu__icon-bg"></span>
                              </nav>