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

                </header>
                <div class="site-content">
                    <div class="container">

                        <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <li class="breadcrumb__link" itemprop="title">
                                <a href="../index.html" class="breadcrumb__link__text" itemprop="url">
                                    Accueil
                                </a>
                            </li>
                            <li class="breadcrumb__link" itemprop="title">
                                <a href="news.html" class="breadcrumb__link__text" itemprop="url">
                                    Contact
                                </a>
                            </li>
                        </ol>
                        <main>
                            <section class="contact">
                                <div class="contact__title-container">
                                    <h2 aria-level="2" class="contact__title">
                                        Prenez contact avec nous&nbsp;!
                                    </h2>
									<span class="contact__subtitle">
										Un avis, un projet&nbsp;? Nous serons ravis de vous répondre.
									</span>
                                </div>
                                <div class="contact__numero-container">
                                    <div class="contact__telephone-container">
										<span class="contact__telephone__title">
											Téléphone
										</span>
                                        <a href="tel:+32491363975" class="contact__telephone__link">+32 497 36 39 75
                                            (Belgique)</a>
                                    </div>
                                    <div class="contact__whatsapp-container">
										<span class="contact__whatsapp__title">
											WhatsApp
										</span>
                                        <a href="tel:+32495348966" class="contact__telephone__link">+32 495 34 89 66</a>
                                    </div>
                                </div>
                                <div class="contact__form-container">
                                    <?php echo do_shortcode( '[contact-form-7 id="146" title="Formulaire de contact"]' ); ?>
                                </div>


                            </section>
                        </main>
                    </div>

                </div>
                <div class="site-cache" id="site-cache"></div>
            </div>

        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="../scripts/menu-res.js"></script>
    </body>
</html>
