<?php
/*
Template Name: Contact
*/

include 'head.php';

?>


    <body class="body-contact">
        <div class="site-container">
            <div class="site-pusher">
                <header class="header header-main header-contact">
                    <div class="header__title">
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

                </header>
                <div class="site-content">
                    <div class="container">

                        <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <li class="breadcrumb__link" itemprop="title">
                                <a href="<?php echo get_home_url();?>" class="breadcrumb__link__text" itemprop="url">
                                    <?php _e('Accueil','b');?>
                                </a>
                            </li>
                            <li class="breadcrumb__link" itemprop="title">
                                <a href="<?php the_permalink();?>" class="breadcrumb__link__text" itemprop="url">
                                    <?php _e('Contactez-nous','b');?>
                                </a>
                            </li>
                        </ol>
                        <main>
                            <section class="contact">
                                <div class="contact__title-container">
                                    <h2 aria-level="2" class="contact__title">
                                        <?php the_field('contact_titre1');?>
                                    </h2>
									<span class="contact__subtitle">
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


                            </section>
                        </main>

<?php

get_footer();