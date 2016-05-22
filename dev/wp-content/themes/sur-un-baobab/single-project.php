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
										---><li class="prod-view__tabs-list">
                                          <a href="#section_makingof" data-tab-target="tab-two" class="prod-view__tabs-link prod-view__tabs-link-2">Making of</a>
                                    </li><!--
										 --><li class="prod-view__tabs-list">
                                          <a href="#section_fichetech" data-tab-target="tab-three" class="prod-view__tabs-link prod-view__tabs-link-3">Fiche technique</a>
                                    </li><!--
										---><li class="prod-view__tabs-list">
                                          <a href="#section_diffuser" data-tab-target="tab-four" class="prod-view__tabs-link prod-view__tabs-link-4">Diffuser</a>
                                    </li><!--
										---><li class="prod-view__tabs-list">
                                          <a href="#section_presse" data-tab-target="tab-five" class="prod-view__tabs-link prod-view__tabs-link-5">Presse</a>
                                    </li>
                              </ul>
                        </div>

                        <div class="prod-view__content-container">
                              <section class="prod-view__sections active" id="tab-one">
                                    <h3 aria-level="3" class="prod-view__sections__title">Le projet</h3>
                                    <?php the_field('prod_projet');?>
                              </section>

                              <section class="prod-view__sections" id="tab-two">
                                    <h3 aria-level="3" class="prod-view__sections__title">Making of</h3>
                                    <div class="prod-view__sections__bloc-txt">
                                          <?php the_field('prod_makingof');?>
                                    </div>
                              </section>

                              <section class="prod-view__sections" id="tab-three">
                                    <h3 aria-level="3" class="prod-view__sections__title">Fiche technique</h3>
                                    <img src="../img/jpg/affiche-min-safidinipela.jpg" alt="" class="prod-view__sections__affiche">
                                    <?php the_field('prod_fichetechnique');?>
                                    <!--<table class="prod-view__table">
                                          <tr class="table__row">
                                                <th class="table__head">Titre français</th>
                                                <td class="table__data">Le choix de Pela</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Durée</th>
                                                <td class="table__data">6min 17sec</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Pays</th>
                                                <td class="table__data">Madagascar</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Année</th>
                                                <td class="table__data">2015</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Technique</th>
                                                <td class="table__data">2D, papier-découpé, image par image, déchets recyclés</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Thème</th>
                                                <td class="table__data">La grossesse précoce</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Participants</th>
                                                <td class="table__data">9 enfants et adolescents de Tuléar bénéficiaires du Centre Art et Musique et du Foyer Social de l’ONG Bel Avenir</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Direction et coordination</th>
                                                <td class="table__data">Elena CABEDO GARCIA et François CHENOT</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Assistants</th>
                                                <td class="table__data">Henrmine ANDRY, Virginie Olivia ANDRIAMPENOSOA Razandry M. LAFINIARIVO</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Histoire originale</th>
                                                <td class="table__data">Emma LIDON et Josué AHIAVAO</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Musique</th>
                                                <td class="table__data">MIKEBO</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Montage son</th>
                                                <td class="table__data">Elena Cabedo Garcia</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Montage image</th>
                                                <td class="table__data">François Chenot</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Production</th>
                                                <td class="table__data">Sur un baobab</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Langue</th>
                                                <td class="table__data">Vezo(dialecte malgache)</td>
                                          </tr>
                                          <tr class="table__row">
                                                <th class="table__head">Sous-titres disponibles</th>
                                                <td class="table__data">ES / FR / EN / MG /CAT /IT</td>
                                          </tr>
                                    </table>-->


                              </section>

                              <section class="prod-view__sections" id="tab-four">
                                    <h3 aria-level="3" class="prod-view__sections__title">Diffuser</h3>
                              </section>

                              <section class="prod-view__sections" id="tab-five">
                                    <h3 aria-level="3" class="prod-view__sections__title">Presse</h3>

                              </section>
                        </div>
                  </div>
            </section>

      </main>

      <?php endwhile; endif; ?>

            <?php get_footer(); ?>
