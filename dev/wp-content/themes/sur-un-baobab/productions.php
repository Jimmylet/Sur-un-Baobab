<?php
/*
 * Template Name: Productions list
 */

if(is_page()){
    query_posts([
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'project',
        'paged' => get_query_var('paged')
    ]);
}


include('head.php');

?>
<body <?php body_class('no-index'); ?>>
      <div class="site-container">
            <div class="site-pusher">
                  <header class="header">
                        <div class="header__title header__title-main">
                              <h1 class="header__title__main header__title-main__main visuallyhidden" aria-level="1"><?php the_title(); ?> - Sur un Baobab</h1>
                        </div>
                        <nav class="menu">
                              <input type="checkbox" class="menu__icon" id="menu__icon">
                              <label for="menu__icon" class="menu__icon__label" id="menu__icon__label"><?php _e('Menu','b');?>
                                    <span></span>
                              </label>
<?php get_header(); ?>

</header>
<div class="site-content">
    <div class="container">


        <main>
            <section class="productions">

                <h2 aria-level="2" class="productions__sectiontitle">
                    <?php _e('Les productions de Surunbaobab','b');?>
                </h2>
                <div class="productions__container">

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

                    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <article class="productions__article">
                        <div class="productions__title-container">
                            <h3 aria-level="3" class="productions__title">
                                <?php the_title();?>
                            </h3>
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
                                    <?php if( get_field('prod_theme') ): ?>
                                    <li class="productions__details__item">
                                        <b><?php _e('Thème','b');?>&nbsp;: </b><?php the_field('prod_theme');?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if( get_field('prod_participants') ): ?>
                                    <li class="productions__details__item">
                                        <b><?php _e('Participants','b');?>&nbsp;: </b><?php the_field('prod_participants');?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if( get_field('prod_technique') ): ?>
                                    <li class="productions__details__item">
                                        <b><?php _e('Technique','b');?>&nbsp;: </b><?php the_field('prod_technique');?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if( get_field('prod_langue') ): ?>
                                    <li class="productions__details__item">
                                        <b><?php _e('Langue','b');?>&nbsp;: </b><?php the_field('prod_langue');?>
                                    </li>
                                    <?php endif; ?>
                                    <?php if( get_field('prod_sous-titres') ): ?>
                                    <li class="productions__details__item">
                                        <b><?php _e('Sous-titres','b');?>&nbsp;: </b><?php the_field('prod_sous-titres');?>
                                    </li>
                                    <?php endif; ?>
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
                <?php wp_pagenavi();?>

            </section>
        </main>

<?php

get_footer();
