<?php
/**
 * single-project.php
 * Créé par : Jimmy Letecheur
 * Date : 4/05/16
 */
get_header();
?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <section class="project">
        <h2 aria-level="2" class="project__title"><?php the_title();?></h2>
        <p class="project__type">
            <?php echo get_the_term_list( get_the_ID(), 'project-type', 'Type(s) de projet: ', ' - ', '&nbsp;!' );?>
        </p>
        <div class="project__content">
            <?php the_content();?>
        </div>
        <dl class="project__details">
            <dt class="project__label">Pays&nbsp;:</dt>
            <dd class="project__value"><?php the_field('country');?></dd> <!-- entre parenthese, mettre le nom du field dans ACF -->
            <dt class="project__label">Durée&nbsp;:</dt>
            <dd class="project__value"><?php the_field('time');?></dd>
        </dl>
    </section>

<?php endwhile; endif; ?>


<?php
get_footer();
