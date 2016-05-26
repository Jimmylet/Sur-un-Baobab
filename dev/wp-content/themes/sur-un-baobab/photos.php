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
                    Quelques-unes de nos photos
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
                                <a href="#" class="photos__intro__button">Acheter notre album photo</a>
                                <span class="photos__intro__button-text">Pour que les enfants en profite&nbsp;!</span>
                            </div>
                        </div>
                    </div>

                    <?php echo photo_gallery(1); ?>

                </div>
            </section>
        </main>
    </div>

    <?php get_footer();?>


