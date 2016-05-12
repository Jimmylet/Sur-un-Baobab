<?php
/**
 * 404.Php.php
 * Créé par : Jimmy Letecheur
 * Date : 4/05/16
 */

get_header();
?>

<section class="error404">
    <h2 aria-level="2" class="error404__title"></h2>
    <p class="error404__description">La page que vous demandez n'existe pas ou n'est plus disponible</p>
    <p class="error404__return">Vous pouvez retourner à la page
        <a href="<?php echo home_url('/')?>" rel="home" class="error404__return__button">d'acceuil</a>.
    </p>
</section>

<?php
get_footer();