<?php
/*
 * Template Name: Ateliers list
 */



get_header(); ?>

</header>
<div class="site-content">
    <div class="container">

        <?php the_breadcrumb_article();?>

        <?php
          if(is_page()){
            query_posts([
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'ateliers'
            ]);
        };?>

        <main>
            <section class="ateliers">
                <h2 aria-level="2" class="ateliers__section-title">Nos différents ateliers de cinéma</h2>
                <div class="ateliers__container">
                    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <article class="ateliers-article">
                        <div class="ateliers-article__background1">
                            <div class="ateliers-article__background2">
                                <h3 aria-level="3" class="ateliers-article__title">
                                    <?php the_title();?>
                                </h3>
                                <figure class="ateliers-article__figure">
                                    <!-- Recup thumbnail et size -->
                                    <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-article-home' ); ?>
                                    <!-- Recup alt -->
                                    <?php $thumb_id = get_post_thumbnail_id($post->id);
                                    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>
                                    <img class="article__img"
                                         src="<?php echo $url[0] ?>"
                                         alt="<?php echo $alt;?>" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
                                </figure>
                            </div>
                        </div>
                        <a href="<?php the_permalink();?>" title="Aller vers l'atelier <?php the_title();?>" class="ateliers__button">Allez-y <span class="visuallyhidden"> vers l'atelier<?php the_title();?></span></a>
                    </article>
                    <?php endwhile; endif; ?>

                </div>
            </section>
        </main>
    </div>
<?php

get_footer();
