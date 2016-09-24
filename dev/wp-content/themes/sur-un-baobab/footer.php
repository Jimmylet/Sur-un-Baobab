<?php $easy_options = get_option("easy_page_options");?>
<footer class="footer">
    <div class="footer__container">
        <section class="footer__section footer__help-us">
            <div class="footer__container-section footer__container-section-1">
                <h2 class="footer__section__title footer__help-us__title">Aidez-nous</h2>
                <a href="<?php the_permalink('311');?>#donate" class="footer__help-us__link"><?php _e('Faites un don','b');?></a>
                <a href="<?php the_permalink('311');?>#acheteralbum" class="footer__help-us__link"><?php _e('Achetez notre album photo','b');?></a>
                <a href="<?php the_permalink('311');?>#diffuser" class="footer__help-us__link"><?php _e('Promouvoir nos vidéos','b');?></a>
            </div>
        </section>
        <section class="footer__section footer__contact-us">
            <div class="footer__container-section footer__container-section-2">
                <h2 class="footer__section__title footer__contact-us__title"><?php _e('Nos derniers articles','b');?></h2>

                <?php
                $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'post'] );
                if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                ?>

                <a href="<?php the_permalink();?>"
                   class="footer__last-article__item"
                   title="<?php _e('Vers l’article');?> <?php echo the_title();?>"
                >
                  <?php echo the_title();?>
                </a>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; endif; ?>
            </div>

        </section>
        <div class="footer__section__newsletter-social-container">
            <section class="footer__section footer__contact-us">
                <div class="footer__container-section footer__container-section-3">
                    <h2 class="footer__section__title footer__contact-us__title"><?php _e('Contactez-nous','b');?></h2>
                        <a href="<?php the_permalink('142');?>"
                           class="footer__contact-us__item footer__contact-us__item-form">
                           <?php _e('Envoyer un e-mail','b');?>
                        </a>
                </div>
            </section>
            <section class="footer__section footer__social">
                <h2 class="footer__section__title footer__social__title">Suivez-nous </h2>
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
            </section>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="footer__copyright__container">
            © Sur un Baobab - Design by <a href="http://letecheur.me"
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
<?php wp_enqueue_script( 'jquery' ); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
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
    //caches a jQuery object containing the header element
    var header = $(".menu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 300) {
            header.addClass("minheader");
        } else {
            header.removeClass("minheader");
        }
    });
  });
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/scripts/tabs2.js';?>"></script>
</body>
</html>
