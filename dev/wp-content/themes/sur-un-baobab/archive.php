<?php

/*
Template Name: archive
*/

/*global $wp_query;*/

get_header(); ?>


</header>
<div class="site-content">
    <div class="container">
        <?php the_breadcrumb_article();?>
        <?php
        if(is_page()){
            query_posts([
                'posts_per_page' => 4,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'post'
            ]);
        };?>
        <main>
            <section class="news">
                <h2 aria-level="2" class="news-titlesection">
                    <?php _e('Les articles sur notre actualité','b');?>
                </h2>
                <div class="news__container">

                    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <article class="article__container">
                        <div class="article__title-container">
                            <a href="<?php the_permalink();?>" title="<?php _e('Vers l’article','b');?> <?php the_title();?>"
                               class="article__title-link">
                                <h3 aria-level="3" class="article__title">
                                    <?php the_title();?>
                                </h3>
                            </a>
                        </div>
                        <a href="<?php the_permalink();?>" title="<?php _e('Vers l’article','b');?> <?php the_title();?>"
                           class="article__img-link">
                            <figure class="article__img-container">
                                <!-- Recup thumbnail et size -->
                                <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-article-list' ); ?>
                                <!-- Recup alt -->
                                <?php $thumb_id = get_post_thumbnail_id($post->id);
                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>
                                <img class="article__img"
                                     src="<?php echo $url[0] ?>"
                                     alt="<?php echo $alt;?>" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
                            </figure>
                        </a>
                        <div class="article__text-container">
                            <div class="article__infos">
                                <span class="article__infos__author"><?php _e('Par','b');?> <?php the_author();?></span>
                                <span class="article__infos__date"><?php _e('Le','b');?> <?php the_date();?></span>
                            </div>
                            <p class="article__intro">
                                <?php custom_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink();?>" title="<?php _e('Vers l’article','b');?> <?php the_title();?>" class="article__button-more">Lire la suite <span class="visuallyhidden">à propos de l'article <?php the_title();?></span></a>
                        </div>

                    </article>

                    <?php endwhile; endif; ?>
                </div>

            </section>
        </main>
    </div>


