<?php
/*
 * Template Name: Photos
 */

 include('head.php');

 ?>
 <body <?php body_class('no-index'); ?>>
       <div class="site-container">
             <div class="site-pusher">
                   <header class="header">
                         <div class="header__title header__title-main">
                               <h1 class="header__title__main header__title-main__main visuallyhidden" aria-level="1">Photos - Sur un Baobab</h1>
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
            <section class="photos">
                <h2 aria-level="2" class="photos-titlesection">
                    <?php _e('Quelques-unes de nos photos','b');?>
                </h2>
                <div class="photos__container">
                  <?php the_breadcrumb();?>
                    <div class="photos__intro-container">
                        <div class="photos__intro">
                            <p class="photos__intro__paragraph">
                                Dans cette rubrique, nous vous présentons quelques unes
                                des photos réalisées lors de nos voyages. N’hésitez pas à
                                les partager sur les réseaux sociaux ou à acheter notre
                                album photo, ça nous aiderait&nbsp;!
                            </p>
                            <div class="photos__intro__button-container">
                                <a href="<?php the_permalink('311');?>#acheteralbum" class="photos__intro__button"><?php _e('Acheter notre album photo','b');?></a>
                            </div>
                        </div>
                    </div>

                    <?php the_field('photos_gallery'); ?>



                </div>
            </section>
        </main>

    <?php get_footer();?>
