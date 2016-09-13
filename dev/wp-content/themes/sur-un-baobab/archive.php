<?php

/*
Template Name: archive
*/


get_header(); ?>


</header>
<div class="site-content">
    <div class="container">


      <?php
        if(is_page()){
          query_posts([
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
            'paged' => get_query_var('paged')
          ]);
        }
      ?>


        <main>
            <section class="news">
                <h2 aria-level="2" class="news-titlesection">
                    <?php _e('Les articles sur notre actualité','b');?>
                </h2>
                <div class="news__container">

                  <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="breadcrumb__link" itemprop="title">

                              <a href="<?php echo get_home_url();?>" class="breadcrumb__link__text" itemprop="url">
                                    <span class="visuallyhidden">Accueil</span>
                              </a>
                        </li>
                        <li class="breadcrumb__link" itemprop="title">
                              <a href="<?php the_permalink();?>" class="breadcrumb__link__text" itemprop="url">
                                    <?php the_title();?>
                              </a>
                        </li>
                  </ol>


                    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

                      <article class="article__container" style="transition: translateZ(0);">
                        <a title="<?php _e('Vers l’article','b');?> <?php the_title();?>" href="<?php the_permalink();?>" class="article__main-link">
                        <div class="article__title-container">
                            <span class="article__title-link">
                                <h3 aria-level="3" class="article__title">
                                    <?php the_title();?>
                                </h3>
                          </span>
                        </div>
                        <span class="article__img-link">
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
                        </span>
                        <div class="article__text-container">
                            <div class="article__infos">
                                <span class="article__infos__author"><?php _e('Par','b');?> <?php the_author();?></span>
                                <span class="article__infos__date"><?php _e('Le','b');?> <?php the_date();?></span>
                            </div>
                            <p class="article__intro">
                                <?php custom_excerpt_article(); ?>
                            </p>
                            <span class="article__button-more">Lire la suite <span class="visuallyhidden">à propos de l'article <?php the_title();?></span></span>
                        </div>
                        </a>

                    </article>

                    <?php endwhile; endif; ?>

                <?php wp_pagenavi();?>



            </section>
        </main>
<?php

get_footer();
