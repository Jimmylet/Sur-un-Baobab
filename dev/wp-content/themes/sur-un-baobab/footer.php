<?php $easy_options = get_option("easy_page_options");?>
<footer class="footer">
    <div class="footer__container">
        <section class="footer__section footer__help-us">
            <h2 class="footer__section__title footer__help-us__title">Aidez-nous</h2>
            <a href="<?php the_permalink('311');?>#donate" class="footer__help-us__link"><?php _e('Faites un don','b');?></a>
            <a href="<?php the_permalink('311');?>#acheteralbum" class="footer__help-us__link"><?php _e('Achetez notre album photo','b');?></a>
            <a href="<?php the_permalink('311');?>#diffuser" class="footer__help-us__link"><?php _e('Promouvoir nos vidéos','b');?></a>
        </section>
        <section class="footer__section footer__last-news">
            <h2 class="footer__section__title footer__last-news__title"><?php _e('Nos derniers articles','b');?></h2>

            <?php
            $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'post'] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                ?>

                <a href="<?php the_permalink();?>"
                   class="footer__last-news__item"
                   title="<?php _e('Vers l’article');?> <?php echo the_title();?>"
                >
                    <?php echo the_title();?>
                </a>
                <?php wp_reset_postdata(); ?>
            <?php endwhile; endif; ?>

        </section>
        <section class="footer__section footer__section__contactsocial">
            <h2 aria-level="2" class="visuallyhidden">Contactez-nous et suivez-nous</h2>
            <div class="footer__contact">
                <span class="footer__contact__title footer__section__title"><?php _e('Contactez-nous','b');?></span>
                <a href="<?php the_permalink('142');?>"
                   class="footer__contact__item"><?php _e('Envoyer un e-mail','b');?></a>
            </div>
            <div class="footer__social">
                <span class="footer__social__title footer__section__title">Suivez-nous </span>
                <a href="<?php echo $easy_options['footer_fb'];?>" class="footer__social__item footer__social__item-fb"
                   title="<?php _e('Vers','b');?> Facebook">
                    <span class="visuallyhidden">Facebook</span>
                </a>
                <a href="<?php echo $easy_options['footer_tw'];?>" class="footer__social__item footer__social__item-tw"
                   title="<?php _e('Vers','b');?> Twitter">
                    <span class="visuallyhidden">Twitter</span>
                </a>
                <a href="<?php echo $easy_options['footer_inst'];?>" class="footer__social__item footer__social__item-inst"
                   title="<?php _e('Vers','b');?> Instagram">
                    <span class="visuallyhidden">Instagram</span>
                </a>
                <a href="<?php echo $easy_options['footer_vim'];?>" class="footer__social__item footer__social__item-vim"
                   title="<?php _e('Vers','b');?> Viméo">
                    <span class="visuallyhidden">Viméo</span>
                </a>
                <a href="<?php echo $easy_options['footer_yout'];?>" class="footer__social__item footer__social__item-yout"
                   title="<?php _e('Vers','b');?> Youtube">

                    <span class="visuallyhidden">Youtube</span>
                </a>
            </div>
        </section>
    </div>

    <div class="footer__copyright">
        <div class="footer__copyright__container">
            © Sur un Baobab - Made with &nbsp;♥&nbsp;  by <a href="http://letecheur.me"
                                                             title="<?php _e('Vers le site du développeur','b');?>" target="_blank">
                Jimmy Letecheur</a>
        </div>
    </div>

</footer>
</div>
</div>
<div class="site-cache" id="site-cache"></div>
</div>
</div>
<?php /*var_dump(wp_enqueue_script( 'jquery' )) ; */?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<!--<script type="text/javascript">
  (function($){

    var $window = $(window)

    $('#menu__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
    })

    $(window).on('resize', function () {
        if ($window.width() > 787 ){
            $('body').removeClass('with--sidebar');
        }
    })

  })(jQuery);
</script>
<script type="text/javascript">
  $(function() {
    var header = $(".menu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 30 ) {
            header.css({"position":"fixed"});
            $(".site-content").css({"bottom":"-10.5em"});
            if (scroll >= 300) {
                header.addClass("minheader");
            } else {
                header.removeClass("minheader");
            }
        } else {
            header.css({"position":"relative"});
            $(".site-content").css({"bottom":"0"});
        }
    });
  });
</script>
<script type="text/javascript" src="<?php /*echo get_template_directory_uri() . '/assets/scripts/tabs2.js';*/?>"></script>-->
</body>
</html>
