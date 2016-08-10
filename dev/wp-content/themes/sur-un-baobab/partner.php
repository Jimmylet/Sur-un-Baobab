<?php
/*
 * Template Name: Partenaires
 */

get_header();
?>

</header>
<div class="site-content">
    <div class="container">

        <?php the_breadcrumb();?>

        <main>

          <section class="partenaires">
              <h2 aria-level="2" class="partenaires-titlesection">
                  <?php _e('Nos partenaires','b');?>
              </h2>
              <div class="partenaires__container">

              <?php if( have_rows('partner-fiche') ): ?>
              <?php while( have_rows('partner-fiche') ): the_row();

              // Variables
              $title = get_sub_field('partner-title');
              $logo = get_sub_field('partner-photo');
              $description = get_sub_field('partner-desc');
              $link = get_sub_field('partner-link');
              ?>

                <div class="partenaires__block">
                  <figure class="partenaires__block__content">
                    <div class="partenaires__block__wrap-img">
                      <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>" class="partenaires__block__img">
                    </div>
                    <figcaption class="partenaires__block__figcaption">
                      <span class="partenaires__block__title"><?php echo $title; ?></span>
                      <p class="partenaires__block__description">
                        <?php echo $description; ?>
                      </p>
                    </figcaption>
                  </figure>
                  <?php if( !empty($link) ): ?>
                    <a href="<?php echo $link; ?>" class="partenaires__block__button" title="Vers le site Ong Bel Avenir"><?php _e('Vers le site du partenaire','b');?></a>
                  <?php endif; ?>
                </div>


                <?php endwhile; ?>
                <?php endif; ?>


              </div>
          </section>
      </main>

  <?php get_footer();?>
