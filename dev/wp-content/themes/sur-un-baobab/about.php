<?php
/*
Template Name: A propos de notre projet
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

        <main>
            <section class="desc-projet">
                <div class="desc-projet__container">
                <?php the_breadcrumb(); ?>
								<span class="desc-projet__subtitle">
									<?php the_field('about_subtitle'); ?>
								</span>
                    <h2 aria-level="2" class="desc-projet__title">
                        <?php the_field('about_title');?>
                    </h2>
                    <p class="desc-projet__min-desc">
                        <?php the_field('small_desc'); ?>
                    </p>
                    <?php

                    $image = get_field('about_main_img');
                    if( !empty($image) ): ?>
                    <img class="desc-projet__main-img" src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt']; ?>">
                    <?php endif; ?>
                        <?php the_field('about_desc'); ?>
                    <span class="desc-projet__sousrubrique"><?php _e('Nos objectifs','b');?></span>
                        <?php the_field('about_obj'); ?>
                </div>
            </section>
            <div class="desc-projet__quote">
								<span class="desc-projet__quote-1"><?php the_field('about_quote_1'); ?></span>
                <span class="desc-projet__quote-2"><?php the_field('about_quote_2'); ?></span>
            </div>
            <section class="desc-technique">
                <div class="desc-technique__container">
                    <div class="desc-technique__title-container title_section_project">
                        <h2 aria-level="2" class="desc-technique__title">
                            La&nbsp;technique
                        </h2>
                    </div>
                        <?php the_field('about_technique_top'); ?>
                    <figure class="desc-technique__figure">
                        <?php the_field('about_gif');?>
                    </figure>
                        <?php the_field('about_technique_left'); ?>
                    <a href="#" title="Vers le projet Safidin’i Pela" class="desc-technique__button"><?php _e('Voir la fabrication du film Safidin’i Pela','b');?></a>
                </div>
            </section>
            <section class="whoarewe">
                <div class="whoarewe__container">
                    <div class="whoarewe__title-container">
                        <h2 aria-level="2" class="whoarewe__title">
                            <?php _e('A propos de nous','b');?>
                        </h2>
                    </div>
                        <?php the_field('about_elena_francois'); ?>

                    <div class="whoarewe__about-container">
                        <div class="whoarewe__about-container-2">
                            <section itemscope itemtype="http://schema.org/Person" class="whoarewe__about whoarewe__about-elena">
                                <?php
                                $image = get_field('photo_elena_photo');
                                if( !empty($image) ): ?>
                                    <img class="whoarewe__about__img" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
                                <?php endif; ?>
                                <h3 aria-level="3" class="whoarewe__about__name" itemprop="familyName givenName"><?php the_field('about_elena_name');?></h3>
                                <p class="whoarewe__about__text">
                                    <?php the_field('about_elena');?>
                                </p>


                            </section>
                            <section itemscope itemtype="http://schema.org/Person" class="whoarewe__about whoarewe__about-francois">
                                <?php
                                $image = get_field('about_francois_photo');
                                if( !empty($image) ): ?>
                                    <img class="whoarewe__about__img" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
                                <?php endif; ?>
                                <h3 itemprop="familyName givenName" aria-level="3"  class="whoarewe__about__name"><?php the_field('about_francois_name');?></h3>
                                <p class="whoarewe__about__text">
                                    <?php the_field('about_francois');?>
                                </p>
                            </section>
                        </div>
                        <div class="whoarewe__background"></div>
                    </div>
                    <?php $easy_options = get_option("easy_page_options");?>
                    <div class="projet-helpus">
                        <a href="<?php the_permalink('311');?>" class="projet-helpus__donate" title="Vers la page Faire un don"><?php _e('Soutenez-nous','b');?></a>
                        <span class="projet-helpus__follow-us-text"><?php _e('Ou suivez-nous','b');?></span>
                        <a href="<?php echo $easy_options['footer_fb'];?>" class="projet-helpus__item follow-us__item follow-us__item-fb"
                           title="Vers Facebook" rel="external" target="_blank">
                            <span class="visuallyhidden">Facebook</span>
                        </a>
                        <a href="<?php echo $easy_options['footer_tw'];?>" class="projet-helpus__item follow-us__item follow-us__item-tw"
                           title="Vers Twitter" rel="external" target="_blank">
                            <span class="visuallyhidden">Twitter</span>
                        </a>
                        <a href="<?php echo $easy_options['footer_inst'];?>" class="projet-helpus__item follow-us__item follow-us__item-inst"
                           title="Vers Instagram" rel="external" target="_blank">
                            <span class="visuallyhidden">Instagram</span>
                        </a>
                        <a href="<?php echo $easy_options['footer_vim'];?>" class="projet-helpus__item follow-us__item follow-us__item-vim"
                           title="Vers Viméo" rel="external" target="_blank">
                            <span class="visuallyhidden">Viméo</span>
                        </a>
                        <a href="<?php echo $easy_options['footer_yout'];?>" class="projet-helpus__item follow-us__item follow-us__item-yout"
                           title="Vers Youtube" rel="external" target="_blank">
                            <span class="visuallyhidden">Youtube</span>
                        </a>

                    </div>
                </div>

            </section>
        </main>
<?php

get_footer();
