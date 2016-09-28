<?php

/*
      Template Name: Single Article
*/

include('head.php');
?>
<body <?php body_class('no-index'); ?>>
      <div class="site-container">
            <div class="site-pusher">
                  <header class="header">
                        <div class="header__lang">
                              <?php foreach (b_get_menu_items('menu-lang') as $navItem): ?>
                                    <a href="<?php echo $navItem->url;?>" class="header__lang__link">
                                          <?php echo $navItem->label; ?>
                                    </a>
                              <?php endforeach; ?>
                        </div>
                        <div class="header__title header__title-main">
                              <h1 class="header__title__main header__title-main__main visuallyhidden" aria-level="1"><?php the_title(); ?></h1>
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
                        <div class="news-view__container">
                          <?php the_breadcrumb_article(); ?>
                              <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                              <article class="news-view__article">
                                    <figure class="news-view__img-container">
                                          <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-article' ); ?>
                                          <img class="news-view__img"
                                               src="<?php echo $url[0] ?>"
                                               alt="" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>">
                                    </figure>
                                    <div class="news-view__infos article__infos">
                                          <span class="news-view__infos__author article__infos__author"><?php _e('Par','b');?> <?php the_author();?></span>
                                          <span class="news-view__infos__date article__infos__date"><?php _e('Le','b');?> <?php the_date();?></span>
                                    </div>
                                    <h2 aria-level="2" class="news-view__title">
                                          <?php the_title();?>
                                    </h2>
                                    <div class="news-view__the-content">
                                          <?php the_content(); ?>
                                    </div>

                                    <!-- TAGS-->
									<span class="news-view__tags">Tags&nbsp;:
                                          <?php the_tags(''); ?>
                                    </span>
                              </article>
                              <?php endwhile; endif; ?>

                              <?php comments_template();?>

                        </div>
                  </main>

<?php

get_footer();
