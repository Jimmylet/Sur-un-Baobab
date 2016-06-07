<?php
/*
 * Template Name: Photos
 */

get_header();
?>


</header>
<div class="site-content">
    <div class="container">

        <?php the_breadcrumb();?>

        <main>
            <section class="photos">
                <h2 aria-level="2" class="photos-titlesection">
                    <?php _e('Quelques-unes de nos photos','b');?>
                </h2>
                <div class="photos__container">
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
                                <span class="photos__intro__button-text"><?php _e('Pour que les enfants en profitent !','b');?></span>
                            </div>
                        </div>
                    </div>

                    <?php echo photo_gallery(1); ?>

                </div>
            </section>
        </main>

    <?php get_footer();?>
