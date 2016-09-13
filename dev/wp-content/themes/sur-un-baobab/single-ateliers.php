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


        <main>
            <section class="ateliers-view">
                <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="breadcrumb__link" itemprop="title">
                        <a href="<?php echo get_home_url();?>" class="breadcrumb__link__text" itemprop="url">
                            Accueil
                        </a>
                    </li>
                    <li class="breadcrumb__link" itemprop="title">
                        <a href="<?php echo the_permalink(291);?>" class="breadcrumb__link__text" itemprop="url">
                            Ateliers
                        </a>
                    </li>
                    <li class="breadcrumb__link" itemprop="title">
                        <a href="<?php echo the_permalink();?>" class="breadcrumb__link__text" itemprop="url">
                            <?php echo the_title();?>
                        </a>
                    </li>
                </ol>
                <h2 aria-level="2" class="ateliers-view__section-title">Les étapes pour la réalisation de l'atelier</h2>

                <?php if( have_rows('ateliers') ): ?>
                <?php while( have_rows('ateliers') ): the_row();

                // Variables
                $number = get_sub_field('atelier_number');
                $title = get_sub_field('atelier_title');
                $image = get_sub_field('atelier_img');
                $description = get_sub_field('atelier_content');
                ?>

                <article class="step">
                    <div class="step__container">
                        <div class="step__title-container">
                            <span class="step__number"><?php echo $number; ?>.</span>
                            <h3 aria-level="3" class="step__title"><?php echo $title; ?></h3>
                        </div>
                        <div class="step__content-container">
                            <div class="step__text-container">
                              <?php echo $description; ?>
                            </div>
                            <figure class="step__figure">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" class="step__figure__img">
                            </figure>
                        </div>
                    </div>
                </article>

              <?php endwhile; ?>
              <?php endif; ?>



            </section>
        </main>
    <?php endwhile; endif; ?>

    <?php get_footer();?>
