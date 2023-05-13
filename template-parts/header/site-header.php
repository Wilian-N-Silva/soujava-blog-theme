<header class="header">
  <div class="header__container">



    <?php get_template_part('template-parts/header/site-brand'); ?>
    <?php get_template_part('template-parts/header/site-nav'); ?>


    <div class="header__options">
      <div class="navigation__search"></div>
      <div class="theme desktop-only">
        <button class="theme__button" id="change-theme-btn" title="Mudar tema">
          <img class="theme__icon--moon light-mode-only" src="<?php echo get_theme_file_uri('/assets/icons/moon.svg'); ?>" alt="" />
          <img class="theme__icon--sun dark-mode-only" src="<?php echo get_theme_file_uri('/assets/icons/sun.svg'); ?>" alt="" />
        </button>
      </div>
      <div class="navigation__menu mobile-only">
        <button class="menu__button">
          <img class="light-mode-only" src="<?php echo get_theme_file_uri('/assets/icons/list-dark.svg'); ?>" alt="" />
          <img class="dark-mode-only" src="<?php echo get_theme_file_uri('/assets/icons/list.svg'); ?>" alt="" />
        </button>
      </div>
    </div>
  </div>
</header>