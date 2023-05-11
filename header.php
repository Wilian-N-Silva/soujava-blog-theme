<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php wp_title('|', true, 'right'); ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />

  <!-- <link rel="stylesheet" href="./assets/style/main.min.css" /> -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>" />

  <?php wp_head(); ?>
</head>

<body>
  <script src="<?php echo get_theme_file_uri('/assets/js/theme.js'); ?>"></script>
  <header class="header">
    <div class="header__container">
      <div class="header__brand">
        <img class="light-mode-only" src="<?php echo get_theme_file_uri('/assets/images/brand/soujava-brand.svg'); ?>" alt="" />
        <img class="dark-mode-only" src="<?php echo get_theme_file_uri('/assets/images/brand/soujava-brand-pb.svg'); ?>" alt="" />
      </div>
      <nav class="navigation">
        <ul class="navigation__links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Como Participar</a></li>
          <li><a href="#">Eventos</a></li>
          <li><a href="#">Novidades</a></li>
          <li><a href="#">Associados</a></li>
          <li><a href="#">Lojinha</a></li>
        </ul>
      </nav>
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