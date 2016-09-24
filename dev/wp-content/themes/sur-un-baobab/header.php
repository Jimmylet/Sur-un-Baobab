


<div class="menu__container">
      <h2 class="menu__title" aria-level="2"><?php _e('Menu de navigation','b');?></h2>
      <div class="menu__lang__deskopt">

            <a href="<?php echo get_home_url(); ?>" class="menu__lang__deskopt__item" lang="fr">FR</a>
            <a href="<?php echo get_home_url(); ?>" class="menu__lang__deskopt__item" lang="es">ES</a>
            <a href="<?php echo get_home_url(); ?>" class="menu__lang__deskopt__item" lang="en">EN</a>
      </div>
      <!--
      <div class="menu__lang">
            <a href="" class="menu__lang__item" lang="fr">Français</a>
            <a href="" class="menu__lang__item" lang="es">Spanish</a>
            <a href="" class="menu__lang__item" lang="en">English</a>
      </div> -->
      <?php
				global $post;
				$thePostID = $post->ID;
			?>
      <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
            <a href="<?php echo $navItem->url;?>" class="menu__link"><span class="menu__item menu__item-<?php echo $navItem->icon;?> menu__item--<?php echo $thePostID == $navItem->id ? "active" : "" ;?>" title="Vers la page <?php echo $navItem->label;?>"><?php echo $navItem->label;?></span></a>
      <?php endforeach; ?>
</div>
<span aria-hidden="true" class="menu__icon-bg"></span>
</nav>
