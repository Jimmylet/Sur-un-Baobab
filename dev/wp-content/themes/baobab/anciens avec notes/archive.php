<?php
/**
 * archive.php
 * Créé par : Jimmy Letecheur
 * Date : 4/05/16
 */

get_header();
?>


    <section class="archive">
        <h2 aria-level="2" class="archive__title">Tous mes posts</h2>
        <div class="archive__container">
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

                <article class="item">
                    <h3 aria-level="3" class="item__title">
                        <?php the_title();?>
                    </h3>
                    <div class="item__excerpt">
                        <?php the_custom_excerpt();?>
                    </div>
                    <a href="<?php the_permalink();?>" class="item__link">
                        <?php
                        echo str_replace('[nom-article]', '<span class="sro">' . get_the_title() . '</span>', __('Voir l’item [nom-article]', 'b')); ?> <!-- ou %s à la place de nom-article -->
                    </a> <!-- Ensuite cacher le nom en css avec position absolute top -9999px left -9999px -->
                </article>

            <?php endwhile; endif; ?>
        </div>
    </section>







<?php
get_footer();
