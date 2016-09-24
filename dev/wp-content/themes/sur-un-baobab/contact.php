<?php
/*
Template Name: Contact
*/

include('head.php');

?>
<body <?php body_class('no-index'); ?>>
      <div class="site-container">
            <div class="site-pusher">
                  <header class="header">
                        <div class="header__title header__title-main">
                              <h1 class="header__title__main header__title-main__main visuallyhidden" aria-level="1">Contactez-nous - Sur un Baobab</h1>
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
                            <section class="contact">
                                <div class="contact__container">
                                  <?php the_breadcrumb(); ?>
                                <div class="contact__title-container">


                                    <h2 aria-level="2" class="contact__title visuallyhidden">
                                        <?php the_field('contact_titre1');?>
                                    </h2>
                  									<span class="contact__subtitle visuallyhidden">
                  										<?php the_field('contact_sous-titre');?>
                  									</span>
                                </div>
                                <div class="contact__numero-container">
                                    <div class="contact__telephone-container">
										<span class="contact__telephone__title">
											<?php _e('Téléphone','b');?>
										</span>
                                        <a href="tel:<?php the_field('contact_telephone-link');?>" class="contact__telephone__link"><?php the_field('contact_tel');?>
                                            (<?php _e('Belgique','b');?>)</a>
                                    </div>
                                    <div class="contact__whatsapp-container">
										<span class="contact__whatsapp__title">
											WhatsApp
										</span>
                                        <a href="tel:<?php the_field('contact_whatsapp-link');?>" class="contact__telephone__link"><?php the_field('contact_whatsapp');?></a>
                                    </div>
                                </div>
                                <div class="contact__form-container">
                                    <?php echo do_shortcode( '[contact-form-7 id="146" title="Formulaire de contact"]' ); ?>
                                </div>
                              </div>
                            </section>
                        </main>

<?php

get_footer();
