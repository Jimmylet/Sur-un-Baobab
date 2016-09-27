<?php
/*
 * Template Name: Ateliers list
 */



 include('head.php');

 ?>
 <body <?php body_class('no-index'); ?>>
       <div class="site-container">
             <div class="site-pusher">
                   <header class="header">
                       <div class="header__lang">
                           <?php foreach (b_get_menu_items('menu-lang') as $navItem): ?>
                               <a href="<?php echo $navItem->url;?>" class="header__lang__link">
                                   <?php echo $navItem->label; ?>
                               </a>
                           <?php endforeach; ?>
                       </div>
                         <div class="header__title header__title-main">
                               <h1 class="header__title__main header__title-main__main visuallyhidden" aria-level="1">Sur un Baobab - Notre projet</h1>
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

        <?php the_breadcrumb_article();?>

        <?php
          if(is_page()){
            query_posts([
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'ateliers'
            ]);
        };?>

        <main>
            <section class="ateliers">
                <h2 aria-level="2" class="ateliers__section-title">Nos différents ateliers de cinéma</h2>
                <div class="ateliers__container">
                    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <article class="ateliers-article">
                        <div class="ateliers-article__background1">
                            <div class="ateliers-article__background2">
                                <h3 aria-level="3" class="ateliers-article__title">
                                    <?php the_title();?>
                                </h3>
                                <figure class="ateliers-article__figure">
                                    <!-- Recup thumbnail et size -->
                                    <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-article-home' ); ?>
                                    <!-- Recup alt -->
                                    <?php $thumb_id = get_post_thumbnail_id($post->id);
                                    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>
                                    <img class="article__img"
                                         src="<?php echo $url[0] ?>"
                                         alt="<?php echo $alt;?>" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
                                </figure>
                            </div>
                        </div>
                        <a href="<?php the_permalink();?>" title="Aller vers l'atelier <?php the_title();?>" class="ateliers__button">Allez-y <span class="visuallyhidden"> vers l'atelier<?php the_title();?></span></a>
                    </article>
                    <?php endwhile; endif; ?>

                </div>
            </section>
        </main>
<?php

get_footer();
