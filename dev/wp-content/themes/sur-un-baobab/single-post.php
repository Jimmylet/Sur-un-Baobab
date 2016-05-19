<?php

/*
      Template Name: Single Article
*/

get_header();
?>

      </header>

      <div class="site-content">
            <div class="container">
                  <?php the_breadcrumb_article(); ?>
                  <main>
                        <div class="news-view__container">
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
                                    <!-- Partager l'article -->
                                    <div class="news-view__partager">
                                          <span class="news__view-partager__text"><?php _e('Partager','b');?>&nbsp;:</span>
                                          <a href="#" class="news-view__link follow-us__item follow-us__item-fb">
                                                <span class="visuallyhidden">Facebook</span>
                                          </a>
                                          <a href="#" class="news-view__link follow-us__item follow-us__item-tw">
                                                <span class="visuallyhidden">Twitter</span>
                                          </a>
                                          <a href="#" class="news-view__link follow-us__item follow-us__item-inst">
                                                <span class="visuallyhidden">Instagram</span>
                                          </a>
                                    </div>
                                    <!-- TAGS-->
									<span class="news-view__tags">Tags&nbsp;:
                                          <?php the_tags( '<a>', '</a>, '); ?>
                                    </span>
                              </article>
                              <?php endwhile; endif; ?>

                        </div>
                  </main>
            </div>
      </div>

<?php

get_footer();