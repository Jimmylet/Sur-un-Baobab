<?php
/*
      Template Name: Single Ateliers
*/
get_header();
?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
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
                    Ateliers
                </a>
            </li>
        </ol>
        <main>
            <section class="ateliers-view">
                <h2 aria-level="2" class="ateliers-view__section-title">Les étapes pour la réalisation de l'atelier</h2>
                <article class="step">
                    <div class="step__container">
                        <div class="step__title-container">
                            <span class="step__number">1.</span>
                            <h3 aria-level="3" class="step__title">Titre de l'étape numéro 1</h3>
                        </div>
                        <div class="step__content-container">
                            <div class="step__text-container">
												<span class="step__text__title">
													Lorem ipsum
												</span>
                                <p class="step__text__paragraph">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus est eum hic laudantium perferendis quaerat quis ut voluptatibus! Cupiditate eligendi exercitationem harum perspiciatis quisquam repellendus vero. Aliquid libero omnis quod.
                                </p>
                            </div>
                            <figure class="step__figure">
                                <img src="../img/png/ateliers-img.png" alt="" class="step__figure__img">
                            </figure>
                        </div>
                    </div>
                </article>



                <article class="step">
                    <div class="step__container">
                        <div class="step__title-container">
                            <span class="step__number">2.</span>
                            <h3 aria-level="3" class="step__title">Titre de l'étape numéro 2</h3>
                        </div>
                        <div class="step__content-container">
                            <div class="step__text-container">
												<span class="step__text__title">
													Lorem ipsum
												</span>
                                <p class="step__text__paragraph">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus est eum hic laudantium perferendis quaerat quis ut voluptatibus! Cupiditate eligendi exercitationem harum perspiciatis quisquam repellendus vero. Aliquid libero omnis quod.
                                </p>
                            </div>
                            <figure class="step__figure">
                                <img src="../img/png/ateliers-img.png" alt="" class="step__figure__img">
                            </figure>
                        </div>
                    </div>
                </article>

                <article class="step">
                    <div class="step__container">
                        <div class="step__title-container">
                            <span class="step__number">3.</span>
                            <h3 aria-level="3" class="step__title">Titre de l'étape numéro 3</h3>
                        </div>
                        <div class="step__content-container">
                            <div class="step__text-container">
												<span class="step__text__title">
													Lorem ipsum
												</span>
                                <ul class="step__ul">
                                    <li class="step__li">Lorem ipsum dolor</li>
                                    <li class="step__li">Lorem ipsum dolor</li>
                                    <li class="step__li">Lorem ipsum dolor</li>
                                    <li class="step__li">Lorem ipsum dolor</li>
                                    <li class="step__li">Lorem ipsum dolor</li>
                                </ul>
                            </div>
                            <figure class="step__figure">
                                <img src="../img/png/ateliers-img.png" alt="" class="step__figure__img">
                            </figure>
                        </div>
                    </div>
                </article>


            </section>
        </main>
    </div>
    <?php endwhile; endif; ?>

    <?php get_footer();?>