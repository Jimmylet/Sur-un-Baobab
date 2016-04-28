<?php

/*
    Template Name: Homepage
*/
get_header();

?>

        <main class="ma-page">
        <section class="ma-page__content">
            <?php if ( have_posts() ):
                while ( have_posts() ):
                    the_post();
                    ?>
            <h2 class="ma-page__title"><?php the_title();?></h2>

            <div class="ma-page__text">
                <!-- contenu du wisywig -->
                <?php the_content(); ?>
            </div>

            <aside class="about">
                <h3 class="about__title"><?php the_field('about_title');?></h3>
                <div class="about__content"><?php the_field('about_content');?></div>
            </aside>
                <?php endwhile; // end while
            endif; // end if
            ?>

            <section class="last-articles">
                <h3 class="last-articles__title">Derniers articles</h3>

                <div class="last-articles__container">
                    <?php

                    $post = new WP_Query(['posts_per_page' => 2]);
                    if ($post->have_posts() ) :
                    //THE LOOP
                    while ( $post->have_posts() ):
                        $post->the_post(); ?>


                        <article class="article">
                            <h4 class="article__title"><?php the_title();?></h4>
                            <p class="article__date">Publié le <time class="article__time" datetime="<?php the_date('c');?>"><?php the_date('l j F');?></time></p>
                            <p class="article__extrait"><?php the_custom_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="article__link">Lire la suite</a>

                        </article>
                        <?php
                        // END LOOP
                        endwhile;
                        wp_reset_postdata(); ?>
                        <?php endif; ?>
                </div>
            </section>

        </section>
    </main>




<?php
    get_footer();
?>