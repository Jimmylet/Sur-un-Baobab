<?php
/*
Template Name: Faire un don
*/
include 'head.php';
?>


<body>
    <div class="site-container">
        <div class="site-pusher">
            <header class="header header-main header-makedonate">
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

        <?php the_breadcrumb();?>

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
    </div>



