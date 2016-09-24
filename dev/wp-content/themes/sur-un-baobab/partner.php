<?php
/*
 * Template Name: Partenaires
 */

 include('head.php');

 ?>
 <body <?php body_class('no-index'); ?>>
       <div class="site-container">
             <div class="site-pusher">
                   <header class="header">
                         <div class="header__title header__title-main">
                               <h1 class="header__title__main header__title-main__main visuallyhidden" aria-level="1">Partenaires - Sur un Baobab</h1>
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

          <section class="partenaires">
              <h2 aria-level="2" class="partenaires-titlesection">
                  <?php _e('Nos partenaires','b');?>
              </h2>
              <div class="partenaires__container">
              <?php the_breadcrumb();?>

              <?php if( have_rows('partner-fiche') ): ?>
              <?php while( have_rows('partner-fiche') ): the_row();

              // Variables
              $title = get_sub_field('partner-title');
              $logo = get_sub_field('partner-photo');
              $description = get_sub_field('partner-desc');
              $link = get_sub_field('partner-link');
              ?>

                <div class="partenaires__block">
                  <figure class="partenaires__block__content">
                    <div class="partenaires__block__wrap-img">
                      <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>" class="partenaires__block__img">
                    </div>
                    <figcaption class="partenaires__block__figcaption">
                      <span class="partenaires__block__title"><?php echo $title; ?></span>
                      <p class="partenaires__block__description">
                        <?php echo $description; ?>
                      </p>
                    </figcaption>
                  </figure>
                  <?php if( !empty($link) ): ?>
                    <a href="<?php echo $link; ?>" class="partenaires__block__button" title="Vers le site Ong Bel Avenir"><?php _e('Vers le site du partenaire','b');?></a>
                  <?php endif; ?>
                </div>


                <?php endwhile; ?>
                <?php endif; ?>


              </div>
          </section>
      </main>

  <?php get_footer();?>
