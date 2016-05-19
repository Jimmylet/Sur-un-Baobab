<?php

/*
Template Name: archive
*/

/*global $wp_query;*/

if(is_page()){
    query_posts([
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post'
    ]);
}


get_header(); ?>


</header>
<div class="site-content">
    <div class="container">

        <?php the_breadcrumb();?>
        <main>
            <section class="news">
                <h2 aria-level="2" class="news-titlesection">
                    <?php _e('Les articles sur notre actualité','b');?>
                </h2>
                <div class="news__container">

                    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <article class="article__container">
                        <div class="article__title-container">
                            <a href="news_view.html" title="Vers l'article Sur un Baobab, un an déjà"
                               class="article__title-link">
                                <h3 aria-level="3" class="article__title">
                                    <?php the_title();?>
                                </h3>
                            </a>
                        </div>
                        <a href="news_view.html" title="Vers l'article Sur un Baobab, un an déjà"
                           class="article__img-link">
                            <figure class="article__img-container">
                                <img class="article__img"
                                     src="../img/jpg/article_photo_min.jpg"
                                     alt="" width="585" height="390">
                            </figure>
                        </a>
                        <div class="article__text-container">
                            <div class="article__infos">
                                <span class="article__infos__author">Par Éléna</span>
                                <span class="article__infos__date">Le 31 septembre 2016</span>
                            </div>
                            <p class="article__intro">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa est
                                impedit, in natus numquam quia vel. A adipisci aliquam, dignissimos
                                earum, esse id nisi nulla omnis repudiandae, sequi soluta sunt!
                            </p>
                            <a href="news_view.html" class="article__button-more">Lire la suite</a>
                        </div>

                    </article>
                    <?php endwhile; endif; ?>
                </div>

            </section>
        </main>
    </div>


