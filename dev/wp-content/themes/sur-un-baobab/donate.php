<?php
/*
Template Name: Faire un don
*/
include('head.php');

?>
<body <?php body_class('no-index'); ?>>
      <div class="site-container">
            <div class="site-pusher">
                  <header class="header">
                        <div class="header__title header__title-main">
                              <h1 class="header__title__main header__title-main__main visuallyhidden" aria-level="1"><?php the_title(); ?> - Sur un Baobab</h1>
                        </div>
                        <nav class="menu">
                              <input type="checkbox" class="menu__icon" id="menu__icon">
                              <label for="menu__icon" class="menu__icon__label" id="menu__icon__label"><?php _e('Menu','b');?>
                                    <span></span>
                              </label>
<?php get_header(); ?>
</header>
<div class="site-content">
    <div class="container">



        <main>
            <section class="makedonate">
                <div class="makedonate__title-container">
                    <h2 aria-level="2" class="makedonate__main-title">
                        <?php the_field('don_titre');?>
                    </h2>
									<span class="makedonate__subtitle">
										<?php the_field('don_sous-titre');?>
									</span>
                </div>
                <div class="makedonate__container" id="donate">
                  <?php the_breadcrumb();?>

                    <div class="fixancre"></div>
                    <section class="makedonate__donate">
                        <h3 aria-level="3" class="makedonate__title">
                            <?php _e('Faites un don','b');?>
                        </h3>
                            <?php the_field("don_donate-text");?>
                        <a href="#" class="makedonate__button"><?php the_field("don_donate-b1");?></a>
                        <a href="#" class="makedonate__button"><?php the_field("don_donate-b2");?></a>
                    </section>
                    <div class="fixancre" id="acheteralbum"></div>
                    <section class="makedonate__donate">
                        <h3 aria-level="3" class="makedonate__title">
                            <?php _e('Achetez notre album photo','b');?>
                        </h3>
                        <?php the_field("don_album-text");?>
                        <a href="#" class="makedonate__button"><?php the_field("don_album-b1");?></a>
                    </section>
                    <div class="fixancre" id="diffuser"></div>
                    <section class="makedonate__donate">
                        <h3 aria-level="3" class="makedonate__title">
                            <?php _e('Diffusez l’un de nos films','b');?>
                        </h3>
                        <?php the_field("don_diffuser-text");?>
                        <a href="#" class="makedonate__button"><?php the_field("don_diffuser-b1");?></a>
                    </section>
                </div>



            </section>
        </main>

<?php

get_footer();
