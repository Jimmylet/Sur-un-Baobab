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
                    <article class="productions__article">
                        <div class="productions__title-container">
                            <h3 aria-level="3" class="productions__title">
                                Safidin’i Pela
                            </h3>
											<span class="productions__title-partner">
												En association avec ONG Bel Avenir
											</span>
                        </div>
                        <div class="productions__background">
                            <figure class="productions__figure">
                                <img src="../img/jpg/affiche_safidinipela.jpg" width="420" height="593" alt="Affiche du film Safidin'i Pela" class="productions__img">
                            </figure>
                            <div class="productions__text">
                                <div class="productions__text-infos">
                                    <span class="productions__text-infos__item productions__text-infos__duration">6m 17s</span>
                                    <span class="productions__text-infos__item productions__text-infos__location">Tuléar, Madagascar</span>
                                    <span class="productions__text-infos__item productions__text-infos__date">Octobre 2015</span>
                                </div>
                                <ul class="productions__details">
                                    <li class="productions__details__item">
                                        <b>Thème&nbsp;: </b>La grossesse précoce
                                    </li>
                                    <li class="productions__details__item">
                                        <b>Participants&nbsp;: </b>9 enfants/adolescents
                                    </li>
                                    <li class="productions__details__item">
                                        <b>Technique&nbsp;: </b>2D, papier-découpé
                                    </li>
                                    <li class="productions__details__item">
                                        <b>Langue&nbsp;: </b>Veze (dialecte malgache)
                                    </li>
                                    <li class="productions__details__item">
                                        <b>Sous-titres&nbsp;: </b>ES / FR / EN / MG / CAT / IT
                                    </li>
                                </ul>
                                <div class="productions__synopsis">
													<span class="productions__synopsis__title">
														Synopsis&nbsp;:
													</span>
                                    <p class="productions__synopsis__paragraph">
                                        Pela, une jeune fille du sud de Madagascar, traîne les pieds sur le chemin de l’école. Elle hésite à suivre Ralay; cet homme, bien plus âgé qu’elle, l’invite à le suivre tout en lui donnant de l’argent. Elle rencontre alors son amie Vony, une très jeune maman qui lui raconte son histoire…
                                    </p>
                                </div>
                            </div>
                            <a href="productions_view.html" class="productions__button">Voir le film</a>

                        </div>
                    </article>
                    <article class="productions__article">
                        <div class="productions__title-container">
                            <h3 aria-level="3" class="productions__title">
                                Safidin’i Pela
                            </h3>
											<span class="productions__title-partner">
												En association avec ONG Bel Avenir
											</span>
                        </div>
                        <div class="productions__background">
                            <figure class="productions__figure">
                                <img src="../img/jpg/affiche_safidinipela.jpg" width="420" height="593" alt="Affiche du film Safidin'i Pela" class="productions__img">
                            </figure>
                            <div class="productions__text">
                                <div class="productions__text-infos">
                                    <span class="productions__text-infos__item productions__text-infos__duration">6m 17s</span>
                                    <span class="productions__text-infos__item productions__text-infos__location">Tuléar, Madagascar</span>
                                    <span class="productions__text-infos__item productions__text-infos__date">Octobre 2015</span>
                                </div>
                                <ul class="productions__details">
                                    <li class="productions__details__item">
                                        <b>Thème&nbsp;: </b>La grossesse précoce
                                    </li>
                                    <li class="productions__details__item">
                                        <b>Participants&nbsp;: </b>9 enfants/adolescents
                                    </li>
                                    <li class="productions__details__item">
                                        <b>Technique&nbsp;: </b>2D, papier-découpé
                                    </li>
                                    <li class="productions__details__item">
                                        <b>Langue&nbsp;: </b>Veze (dialecte malgache)
                                    </li>
                                    <li class="productions__details__item">
                                        <b>Sous-titres&nbsp;: </b>ES / FR / EN / MG / CAT / IT
                                    </li>
                                </ul>
                                <div class="productions__synopsis">
													<span class="productions__synopsis__title">
														Synopsis&nbsp;:
													</span>
                                    <p class="productions__synopsis__paragraph">
                                        Pela, une jeune fille du sud de Madagascar, traîne les pieds sur le chemin de l’école. Elle hésite à suivre Ralay; cet homme, bien plus âgé qu’elle, l’invite à le suivre tout en lui donnant de l’argent. Elle rencontre alors son amie Vony, une très jeune maman qui lui raconte son histoire…
                                    </p>
                                </div>
                            </div>
                            <a href="productions_view.html" class="productions__button">Voir le film</a>

                        </div>
                    </article>
                </div>
            </section>
        </main>


