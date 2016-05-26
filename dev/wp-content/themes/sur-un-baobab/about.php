<?php
/*
Template Name: A propos de notre projet
*/

get_header();

?>

</header>
<div class="site-content">
    <div class="container">

        <?php the_breadcrumb(); ?>

        <main>
            <section class="desc-projet">
                <div class="desc-projet__container">
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
                    <p class="desc-projet__desc paragraph-style-projet">
                        <?php the_field('about_desc'); ?>
                    </p>
                    <span class="desc-projet__sousrubrique"><?php _e('Nos objectifs','b');?></span>
                    <p class="desc-projet__desc paragraph-style-projet">
                        <?php the_field('about_obj'); ?>
                    </p>
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
                    <p class="desc-technique__desc paragraph-style-projet">
                        <?php the_field('about_technique_top'); ?>
                    </p>
                    <figure class="desc-technique__figure">
                        <?php
                        $image = get_field('about_gif');
                        if( !empty($image) ): ?>
                            <img class="desc-technique__img" src="<?php echo $image['url']; ?>"
                                 alt="<?php echo $image['alt']; ?>">
                        <?php endif; ?>
                    </figure>
                    <p class="desc-technique__desc desc-technique__desc__txtleft paragraph-style-projet">
                        <?php the_field('about_technique_left'); ?>
                    </p>
                    <a href="#" title="Vers le projet Safidin’i Pela" class="desc-technique__button"><?php _e('Voir la fabrication du film Safidin’i Pela','b');?></a>
                </div>
            </section>
            <section class="whoarewe">
                <div class="whoarewe__container">
                    <div class="whoarewe__title-container">
                        <h2 aria-level="2" class="whoarewe__title">
                            <?php _e('À propos de nous','b');?>
                        </h2>
                    </div>
                    <p class="whoarewe__desc paragraph-style-projet">
                        <?php the_field('about_elena_francois'); ?>
                    </p>

                    <div class="whoarewe__about-container">
                        <div class="whoarewe__about-container-2">
                            <section class="whoarewe__about whoarewe__about-elena">
                                <?php
                                $image = get_field('photo_elena_photo');
                                if( !empty($image) ): ?>
                                    <img class="whoarewe__about__img" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>">
                                <?php endif; ?>
                                <h3 aria-level="3" class="whoarewe__about__name"><?php the_field('about_elena_name');?></h3>
                                <p class="whoarewe__about__text">
                                    <?php the_field('about_elena');?>
                                </p>
                                <div class="whoarewe__about__button-container">
                                    <a href="mailto:<?php the_field('about_elena_email');?>"
                                       class="whoarewe__about__button whoarewe__about__button-mail"><span
                                            class="visuallyhidden"><?php _e('Envoyer un email à Éléna','b');?></span></a>
                                    <a href="tel:+<?php the_field('about_elena_tel');?>"
                                       class="whoarewe__about__button whoarewe__about__button-tel"><span
                                            class="visuallyhidden"><?php _e('Téléphoner à Éléna','b');?></span></a>
                                </div>

                            </section>
                            <section class="whoarewe__about whoarewe__about-francois">
                                <?php
                                $image = get_field('about_francois_photo');
                                if( !empty($image) ): ?>
                                    <img class="whoarewe__about__img" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>">
                                <?php endif; ?>
                                <h3 aria-level="3" class="whoarewe__about__name"><?php the_field('about_francois_name');?></h3>
                                <p class="whoarewe__about__text">
                                    <?php the_field('about_francois');?>
                                </p>
                                <div class="whoarewe__about__button-container">
                                    <a href="mailto:<?php the_field('about_francois_email');?>"
                                       class="whoarewe__about__button whoarewe__about__button-mail"><span
                                            class="visuallyhidden"><?php _e('Téléphoner à François','b');?></span></a>
                                    <a href="tel:+<?php the_field('about_francois_tel');?>"
                                       class="whoarewe__about__button whoarewe__about__button-tel"><span
                                            class="visuallyhidden"><?php _e('Téléphoner à François','b');?></span></a>
                                </div>
                            </section>
                        </div>
                        <div class="whoarewe__background"></div>
                    </div>

                    <div class="projet-helpus">
                        <a href="#" class="projet-helpus__donate"><?php _e('Soutenez-nous','b');?></a>
                        <span class="projet-helpus__follow-us-text"><?php _e('Ou suivez-nous','b');?></span>
                        <a href="" class="projet-helpus__item follow-us__item follow-us__item-fb"
                           title="Vers Facebook" rel="external" target="_blank">
                            <span class="visuallyhidden">Facebook</span>
                        </a>
                        <a href="" class="projet-helpus__item follow-us__item follow-us__item-tw"
                           title="Vers Twitter" rel="external" target="_blank">
                            <span class="visuallyhidden">Twitter</span>
                        </a>
                        <a href="" class="projet-helpus__item follow-us__item follow-us__item-inst"
                           title="Vers Instagram" rel="external" target="_blank">
                            <span class="visuallyhidden">Instagram</span>
                        </a>
                        <a href="" class="projet-helpus__item follow-us__item follow-us__item-vim"
                           title="Vers Viméo" rel="external" target="_blank">
                            <span class="visuallyhidden">Viméo</span>
                        </a>
                        <a href="" class="projet-helpus__item follow-us__item follow-us__item-yout"
                           title="Vers Youtube" rel="external" target="_blank">
                            <span class="visuallyhidden">Youtube</span>
                        </a>

                    </div>
                </div>

            </section>
        </main>
        </div>
<?php

get_footer();