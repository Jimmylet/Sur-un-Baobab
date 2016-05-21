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
                  <a href="../index.html" class="breadcrumb__link__text" itemprop="url">
                        Accueil
                  </a>
            </li>
            <li class="breadcrumb__link" itemprop="title">
                  <a href="news.html" class="breadcrumb__link__text" itemprop="url">
                        Productions
                  </a>
            </li>
            <li class="breadcrumb__link" itemprop="title">
                  <a href="news.html" class="breadcrumb__link__text" itemprop="url">
                        Safidin’i Pela
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
                                    <figure class="prod-view__sections__figure">
                                          <img src="../img/jpg/safidini_img1_projet.jpg" width="800" height="288" alt="" class="prod-view__sections__figure-img">
                                    </figure>
                                    <div class="prod-view__sections__bloc-txt">
                                          <span aria-level="4" class="prod-view__sections__subtitle">Safidin’i Pela: un projet proposé aux jeunes malgaches</span>
                                          <p class="prod-view__sections__paragraph">
                                                Le court métrage « Safidin’i Pela » est le fruit d’un atelier cinéma d’animation qui s’est déroulé entre le mois de septembre et octobre 2015 à Tuléar, ville côtière du sud-ouest de Madagascar. L’atelier a été proposé aux bénéficiaires du Centre Art et Musique et du Foyer Social de l’ONG Bel Avenir, foyer dédié aux adolescentes en risque d’exclusion sociale et de grossesse précoce. Fin octobre, les 9 jeunes participant(e)s volontaires âgé(e)s de 11 à 19 ans présentent fièrement et en avant première leur création devant près de 200 spectateurs dans le vieux cinéma Le Tropic à Tuléar.
                                          </p>
                                    </div>
                                    <div class="prod-view__sections__bloc-txt prod-view__sections__bloc-txt-50%">
                                          <span aria-level="4" class="prod-view__sections__subtitle">La grossesse précoce</span>
                                          <img src="../img/jpg/vony.jpg" width="624" height="602" alt="" class="prod-view__sections__paragraph-img-float">
                                          <p class="prod-view__sections__paragraph">
                                                Selon le rapport 2011 « Les jeunes à Madagascar: faits et chiffres » de l’Unicef, 48,1% des jeunes filles entre 15 et 19 ans de la région de Atsimo-Andrefana, dont Tuléar est le chef-lieu, sont mères ou sont enceintes. En 2015, pour la même région et la même tranche d’âge, le Southern Africa Gender Protocol Alliance indique 56,2%. En d’autres termes, actuellement dans la région de Tuléar plus d’une adolescente sur deux tombe enceinte pour la première fois entre 15 et 19 ans et la situation à tendance à s’aggraver.
                                          </p>
                                          <p class="prod-view__sections__paragraph">
                                                Malheureusement les grossesses précoces contribuent (avec les grossesses tardives, rapprochées et multiples) pour beaucoup aux taux élevés de mortalité, de mortalité infantile et juvénile, en particulier dans les pays pauvres. Les grossesses des adolescentes sont à risques. Elles augmentent également les taux de mortalité maternelle. Enfin, être une jeune maman réduit fortement la possibilité pour les jeunes femmes de faire des études et de travailler. Ces grossesses précoces risquent de porter un préjudice durable à leur qualité de vie et à celle de leurs enfants. (Binet, Gastineau et Rakotoson, 2010 : 257-272)
                                          </p>
                                          <p class="prod-view__sections__paragraph">
                                                De cette constatation inquiétante est partie l’idée d’aborder la problématique de la grossesse précoce et plus particulièrement des relations entre adultes et jeunes filles car c’est une des causes courantes de grossesse précoce à Madagascar.
                                          </p>
                                    </div>
                              </section>

                              <section class="prod-view__sections" id="tab-two">
                                    <h3 aria-level="3" class="prod-view__sections__title">Making of</h3>
                                    <div class="prod-view__sections__bloc-txt">
                                          <span aria-level="4" class="prod-view__sections__subtitle">Des déchets pour un décor</span>
                                          <p class="prod-view__sections__paragraph">
                                                Une des étapes de fabrication d’un petit film d’animation est la création du décors. Pour celui-ci, les enfants ont créé une maquette d’un paysage malgache en matériaux « recyclés » ! Pour cela ils ont utilisé des déchets et des éléments trouvés dans la rue, par exemple des boites de conserves, un vieux grillage, un peu d’argile, du sable, un reste de moustiquaire, des vieux journaux, etc. Et on a mangé un ananas pour utiliser ses feuilles dans la fabrication de minis cocotiers.
                                          </p>
                                          <img src="../img/jpg/decors.jpg" width="624" height="420" alt="" class="prod-view__sections__paragraph-img">
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
