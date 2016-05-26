<?php
/*
 * Template Name: Productions list
 */

if(is_page()){
    query_posts([
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'project'
    ]);
}


get_header();?>

</header>
<div class="site-content">
    <div class="container">

        <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <li class="breadcrumb__link" itemprop="title">
                <a href="<?php echo get_home_url(); ?>" class="breadcrumb__link__text" itemprop="url">
                    Accueil
                </a>
            </li>
            <li class="breadcrumb__link" itemprop="title">
                <a href="<?php echo get_permalink();?>" class="breadcrumb__link__text" itemprop="url">
                    Productions
                </a>
            </li>
        </ol>
        <main>
            <section class="productions">
                <h2 aria-level="2" class="productions__sectiontitle">
                    Les productions de Surunbaobab
                </h2>
                <div class="productions__container">

                    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <article class="productions__article">
                        <div class="productions__title-container">
                            <h3 aria-level="3" class="productions__title">
                                <?php the_title();?>
                            </h3>
                            <span class="productions__title-partner">
                                <?php the_field('prod_association');?>
                            </span>
                        </div>
                        <div class="productions__background">
                            <figure class="productions__figure">
                                <!-- Recup thumbnail et size -->
                                <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-affiche' ); ?>
                                <!-- Recup alt -->
                                <?php $thumb_id = get_post_thumbnail_id($post->id);
                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>
                                <img src="<?php echo $url[0] ?>" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>" alt="<?php echo $alt;?>" class="productions__img">
                            </figure>
                            <div class="productions__text">
                                <div class="productions__text-infos">
                                    <span class="productions__text-infos__item productions__text-infos__duration"><?php the_field('prod_duree');?></span>
                                    <span class="productions__text-infos__item productions__text-infos__location"><?php the_field('prod_location');?></span>
                                    <span class="productions__text-infos__item productions__text-infos__date"><?php the_field('prod_creation');?></span>
                                </div>
                                <ul class="productions__details">
                                    <li class="productions__details__item">
                                        <b><?php _e('Thème','b');?>&nbsp;: </b><?php the_field('prod_theme');?>
                                    </li>
                                    <li class="productions__details__item">
                                        <b><?php _e('Participants','b');?>&nbsp;: </b><?php the_field('prod_participants');?>
                                    </li>
                                    <li class="productions__details__item">
                                        <b><?php _e('Technique','b');?>&nbsp;: </b><?php the_field('prod_technique');?>
                                    </li>
                                    <li class="productions__details__item">
                                        <b><?php _e('Langue','b');?>&nbsp;: </b><?php the_field('prod_langue');?>
                                    </li>
                                    <li class="productions__details__item">
                                        <b><?php _e('Sous-titres','b');?>&nbsp;: </b><?php the_field('prod_sous-titres');?>
                                    </li>
                                </ul>
                                <div class="productions__synopsis">
													<span class="productions__synopsis__title">
														<?php _e('Synopsis','b');?>&nbsp;:
													</span>
                                    <p class="productions__synopsis__paragraph">
                                        <?php the_field('prod_synopsis');?>
                                    </p>
                                </div>
                            </div>
                            <a href="<?php the_permalink();?>" class="productions__button" title="<?php _e('Voir le film','b');?> <?php the_title();?>"><?php _e('Voir le film','b');?> <span class="visuallyhidden"><?php the_title();?></span></a>

                        </div>
                    </article>
                    <?php endwhile; endif; ?>


                </div>
            </section>
        </main>

<?php

get_footer();

