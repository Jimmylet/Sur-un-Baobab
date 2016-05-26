<?php

/*
      Template Name: Single Project
*/

get_header();

?>

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      </header>
      <div class="site-content">
      <div class="container">

      <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <li class="breadcrumb__link" itemprop="title">
                  <a href="<?php echo get_home_url();?>" class="breadcrumb__link__text" itemprop="url">
                        Accueil
                  </a>
            </li>
            <li class="breadcrumb__link" itemprop="title">
                  <a href="<?php echo get_page_link(200); ?>" class="breadcrumb__link__text" itemprop="url">
                        Productions
                  </a>
            </li>
            <li class="breadcrumb__link" itemprop="title">
                  <a href="<?php the_permalink();?>" class="breadcrumb__link__text" itemprop="url">
                        <?php the_title();?>
                  </a>
            </li>
      </ol>
      <main>

            <section class="prod-view">
                  <h2 aria-level="2" class="prod-view__title">
                        <?php the_title();?>
                  </h2>
								<span class="prod-view__subtitle">
									<?php the_field('prod_association');?>
								</span>
                  <div class="prod-view__videoplayer video-container">
                        <?php the_field('prod_video');?>
                  </div>
                  <div class="prod-view__synopsis-container">
                        <span class="prod-view__synopsis"><?php _e('Synopsis','b');?>&nbsp;:</span>
                        <p class="prod-view__synopsis-paragraph">
                              <?php the_field('prod_synopsis');?>
                        </p>
                  </div>
                  <div class="prod-view__tabs-and-content-container">
                        <div class="prod-view__tabs-container">
                              <ul class="prod-view__tabs-ul">
                                    <li class="prod-view__tabs-list active">
                                          <a href="#section-projet" data-tab-target="tab-one" class="prod-view__tabs-link prod-view__tabs-link-1 active">Projet</a>
                                    </li><!--
										--><li class="prod-view__tabs-list">
                                          <a href="#section_makingof" data-tab-target="tab-two" class="prod-view__tabs-link prod-view__tabs-link-2">Making of</a>
                                    </li><!--
										 --><li class="prod-view__tabs-list">
                                          <a href="#section_fichetech" data-tab-target="tab-three" class="prod-view__tabs-link prod-view__tabs-link-3">Fiche technique</a>
                                    </li><!--
										--><li class="prod-view__tabs-list">
                                          <a href="#section_diffuser" data-tab-target="tab-four" class="prod-view__tabs-link prod-view__tabs-link-4">Diffuser</a>
                                    </li><!--
										--><li class="prod-view__tabs-list">
                                          <a href="#section_presse" data-tab-target="tab-five" class="prod-view__tabs-link prod-view__tabs-link-5">Presse</a>
                                    </li>
                              </ul>
                        </div>

                        <div class="prod-view__content-container">
                              <section class="prod-view__sections active" id="tab-one">
                                    <h3 aria-level="3" class="prod-view__sections__title"><?php _e('Le projet','b');?></h3>
                                    <?php the_field('prod_projet');?>
                              </section>

                              <section class="prod-view__sections" id="tab-two">
                                    <h3 aria-level="3" class="prod-view__sections__title"><?php _e('Making of','b');?></h3>
                                    <div class="prod-view__sections__bloc-txt">
                                          <?php the_field('prod_makingof');?>
                                    </div>
                              </section>

                              <section class="prod-view__sections" id="tab-three">
                                    <h3 aria-level="3" class="prod-view__sections__title"><?php _e('Fiche technique','b');?></h3>
                                    <figure class="prod-view__sections__affiche">
                                          <!-- Recup thumbnail et size -->
                                          <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-affiche' ); ?>
                                          <!-- Recup alt -->
                                          <?php $thumb_id = get_post_thumbnail_id($post->id);
                                          $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);?>
                                          <img src="<?php echo $url[0] ?>" width="<?php echo $url[1] ?>" height="<?php echo $url[2] ?>" alt="<?php echo $alt;?>" class="productions__img">
                                    </figure>
                                    <table class="prod-view__table">
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Titre français','b');?></th>
                                                <td class="table__data"><?php the_field('ft_titlefr');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Durée','b');?></th>
                                                <td class="table__data"><?php the_field('ft_duration');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Pays','b');?></th>
                                                <td class="table__data"><?php the_field('ft_pays');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Année','b');?></th>
                                                <td class="table__data"><?php the_field('ft_année');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Technique','b');?></th>
                                                <td class="table__data"><?php the_field('ft_technique');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Thème','b');?></th>
                                                <td class="table__data"><?php the_field('ft_theme');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Participants','b');?></th>
                                                <td class="table__data"><?php the_field('ft_participants');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Direction et coordination','b');?></th>
                                                <td class="table__data"><?php the_field('fiche_ft_direction');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Assistants','b');?></th>
                                                <td class="table__data"><?php the_field('ft_assistants');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Histoire originale','b');?></th>
                                                <td class="table__data"><?php the_field('ft_histoire');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Musique','b');?></th>
                                                <td class="table__data"><?php the_field('ft_musique');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Montage son','b');?></th>
                                                <td class="table__data"><?php the_field('ft_montageson');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Montage image','b');?></th>
                                                <td class="table__data"><?php the_field('ft_montageimage');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Production','b');?></th>
                                                <td class="table__data"><?php the_field('ft_production');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Langue','b');?></th>
                                                <td class="table__data"><?php the_field('ft_langue');?></td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head"><?php _e('Sous-titres disponibles','b');?></th>
                                                <td class="table__data"><?php the_field('ft_soustitres');?></td>
                                          </tr>
                                    </table>


                              </section>

                              <section class="prod-view__sections" id="tab-four">
                                    <h3 aria-level="3" class="prod-view__sections__title"><?php _e('Diffuser','b');?></h3>
                              </section>

                              <section class="prod-view__sections" id="tab-five">
                                    <h3 aria-level="3" class="prod-view__sections__title"><?php _e('Presse','b');?></h3>

                              </section>
                        </div>
                  </div>
            </section>

      </main>

      <?php endwhile; endif; ?>

            <?php get_footer(); ?>
