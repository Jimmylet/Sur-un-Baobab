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

      <main>

            <section class="prod-view">

              <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="breadcrumb__link" itemprop="title">

                          <a href="<?php echo get_home_url();?>" class="breadcrumb__link__text" itemprop="url">
                                <span class="visuallyhidden">Accueil</span>
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
                                          <a href="#section_diffuser" data-tab-target="tab-four" class="prod-view__tabs-link prod-view__tabs-link-4">Sélections</a>
                                    </li><!--
										--><li class="prod-view__tabs-list">
                                          <a href="#section_presse" data-tab-target="tab-five" class="prod-view__tabs-link prod-view__tabs-link-5">


                                            <svg xmlns="http://www.w3.org/2000/svg" class="partner-logo" viewBox="0 0 48 48" height="48" width="48">
                                            <path fill="none" stroke="#90a6b1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M31.8887997,29.8834686c-3.7631493-1.2955112-3.800621-1.6039658-3.800621-3.084549 c1.3983479-0.411293,4.8791904,0.3714714,6.083189-1.23382c1.1104355-1.4805832-0.2129669-2.6987381-1.2955132-4.5651321 c-1.7890377-3.084547-1.8042793-4.2701702-1.9741096-5.9223318c-0.4687672-4.560071-3.1778679-6.6577454-6.8972797-6.9081841 c-3.7194099,0.2504387-6.4285126,2.3481131-6.8972797,6.9081841c-0.1698303,1.6521616-0.1850719,2.8377848-1.9741106,5.9223318 c-1.0825434,1.866394-2.4059477,3.084549-1.2955103,4.5651321c1.2039385,1.6052914,4.6848392,0.8225269,6.0831871,1.23382 c0,1.4805832-0.0374718,1.7890377-3.800621,3.084549c-3.1518641,1.0850067-4.8798647,7.1710243-5.8650036,9.5214577 c-0.3455439,0.8244324-0.1301603,1.7951851,0.5668821,2.354847c3.4930782,2.8046303,8.1034765,3.0722733,13.1703463,3.0722733 c5.0747185,0,9.6913223-0.2735291,13.1862373-3.0870934c0.6964188-0.5606499,0.9105873-1.531826,0.5639229-2.3559303 C36.7555962,37.0428886,35.0288925,30.9644451,31.8887997,29.8834686z"/>
                                            <path fill="none" stroke="#90a6b1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M37.9348679,38.6132278c3.1799355-0.1842918,5.6098595-0.7673073,7.923172-2.629631 c0.6146202-0.4947968,0.8036385-1.351902,0.4976883-2.0792122c-0.8709984-2.0705662-2.3948898-5.6298351-5.1661644-6.5838451 c-3.3211479-1.1433468-3.3542175-1.4155712-3.3542175-2.7222519c1.2341042-0.3629856,4.3061028,0.3278389,5.3686829-1.0889015 c0.980011-1.3066807-0.1879501-2.3817577-1.1433449-4.0289326c-1.578907-2.7222519-1.5923576-3.7686176-1.7422409-5.2267237 c-0.4137077-4.0244665-2.8046112-5.8757572-6.0871582-6.0967808c-2.047184,0.1378431-3.7475643,0.9097757-4.8378181,2.4474916"/>
                                            <path fill="none" stroke="#90a6b1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M9.9532833,38.5652847c-3.179935-0.184288-5.4986486-0.7193642-7.8119626-2.5816879 c-0.6146201-0.4947968-0.8036356-1.351902-0.4976875-2.0792122c0.8710009-2.0705662,2.3948922-5.6298351,5.1661649-6.5838451 c3.321147-1.1433468,3.3542185-1.4155712,3.3542185-2.7222519C8.9299116,24.235302,5.857914,24.9261265,4.795332,23.5093861 c-0.9800107-1.3066807,0.187952-2.3817577,1.1433458-4.0289326c1.5789061-2.7222519,1.5923576-3.7686176,1.7422409-5.2267237 c0.4137077-4.0244665,2.8046103-5.8757572,6.0871572-6.0967808c2.047184,0.1378431,3.7475643,0.9097757,4.8378181,2.4474916"/>
                                          </svg>


                                            Soutiens</a>
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
                                    <h3 aria-level="3" class="prod-view__sections__title"><?php _e('Sélections','b');?></h3>



                                    <?php if( have_rows('prod_selections') ): ?>
                                    <?php while( have_rows('prod_selections') ): the_row();

                                    // Variables
                                    $title = get_sub_field('prod_selections_title');
                                    $logo = get_sub_field('prod_selections_logo');
                                    $description = get_sub_field('prod_selections_desc');
                                    $link = get_sub_field('prod_selections_link');
                                    ?>

                                    <div class="partenaires__block partenaires__block__tabs">
                                      <figure class="partenaires__block__content">
                                        <div class="partenaires__block__wrap-img">
                                          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>" class="partenaires__block__img">
                                        </div>
                                        <figcaption class="partenaires__block__figcaption">
                                          <span class="partenaires__block__title"><?php echo $title; ?></span>
                                          <p class="partenaires__block__description">
                                            <?php echo $description; ?>
                                          </p>
                                        </figcaption>
                                      </figure>
                                      <?php if( !empty($link) ): ?>
                                        <a href="<?php echo $link; ?>" class="partenaires__block__button partenaires__block__button--tabs" title="Vers le site de <?php echo $title; ?>"><?php _e('Vers le site du festival','b');?></a>
                                      <?php endif; ?>
                                    </div>


                                  <?php endwhile; ?>
                                  <?php endif; ?>


                              </section>

                              <section class="prod-view__sections" id="tab-five">
                                    <h3 aria-level="3" class="prod-view__sections__title"><?php _e('Partenaires','b');?></h3>

                                    <?php if( have_rows('prod_partner') ): ?>
                                    <?php while( have_rows('prod_partner') ): the_row();

                                    // Variables
                                    $title = get_sub_field('prod_partner_title');
                                    $logo = get_sub_field('prod_partner_logo');
                                    $description = get_sub_field('prod_partner_desc');
                                    $link = get_sub_field('prod_partner_link');
                                    ?>

                                    <div class="partenaires__block partenaires__block__tabs">
                                      <figure class="partenaires__block__content">
                                        <div class="partenaires__block__wrap-img">
                                          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>" class="partenaires__block__img">
                                        </div>
                                        <figcaption class="partenaires__block__figcaption">
                                          <span class="partenaires__block__title"><?php echo $title; ?></span>
                                          <p class="partenaires__block__description">
                                            <?php echo $description; ?>
                                          </p>
                                        </figcaption>
                                      </figure>
                                      <?php if( !empty($link) ): ?>
                                        <a href="<?php echo $link; ?>" class="partenaires__block__button partenaires__block__button--tabs" title="Vers le site de <?php echo $title; ?>"><?php _e('Vers le site du partenaire','b');?></a>
                                      <?php endif; ?>
                                    </div>


                                  <?php endwhile; ?>
                                  <?php endif; ?>

                              </section>
                        </div>
                  </div>
            </section>

      </main>

      <?php endwhile; endif; ?>

            <?php get_footer(); ?>
