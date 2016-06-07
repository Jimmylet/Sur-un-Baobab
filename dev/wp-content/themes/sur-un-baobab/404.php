<?php

get_header();

?>

      <section class="error404">
            <h2 class="error404__title">Oups&nbsp;! Erreur 404</h2>
            <p class="error404__description">La page demandée n’est pas ou n’est plus disonible.</p>
            <p class="error404__return">Vous pouvez retourner à <a class="error404__link" href="<?php echo home_url('/');?>" rel="home">la page d’accueil</a>.</p>
      </section>

<?php

get_footer();
