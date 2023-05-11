<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Blog - Sou Java</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />


  <!-- <link rel="stylesheet" href="./assets/style/main.min.css" /> -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>" />

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
  <main class="home" style="min-height: 100%">
    <div class="post-card post-card--highlight">
      <div class="post-card__cover">
        <img src="https://soujava.org.br/wp-content/uploads/2020/02/design-sem-nome-1-620x200.png" alt="" />
      </div>
      <div class="post-card__data">
        <h2 class="post-card__title">
          SouJava Celebra 25 anos com um evento online Gratuito
        </h2>
      </div>
    </div>
    <div class="post-card copy-me">
      <div class="post-card__cover">
        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
      </div>
      <div class="post-card__data">
        <h2 class="post-card__title">
          SouJava Celebra 25 anos com um evento online Gratuito
        </h2>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="footer__container">
      <div class="footer__brand">
        <img class="light-mode-only" src="<?php echo get_theme_file_uri('/assets/images/brand/soujava-brand-full.svg'); ?>" alt="" />
        <img class="dark-mode-only" src="<?php echo get_theme_file_uri('/assets/images/brand/soujava-brand-full-pb.svg'); ?>" alt="" />
      </div>
      <div class="footer__sitemap">
        <div class="footer__section">
          <div class="footer__title">Sou Java</div>
          <ul class="footer__links">
            <li><a href="#">História</a></li>
            <li><a href="#">Associados</a></li>
          </ul>
        </div>
        <div class="footer__section">
          <div class="footer__title">Comunidade</div>
          <ul class="footer__links">
            <li><a href="#">Como participar</a></li>
            <li><a href="#">Eventos</a></li>
          </ul>
        </div>
        <div class="footer__section">
          <div class="footer__title">Redes Sociais</div>
          <ul class="footer__links">
            <li>
              <a href="#" target="_blank" rel="noopener noreferrer">Youtube</a>
            </li>
            <li>
              <a href="#" target="_blank" rel="noopener noreferrer">Facebook</a>
            </li>
            <li>
              <a href="#" target="_blank" rel="noopener noreferrer">Twitter</a>
            </li>
            <li>
              <a href="#" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__rights">
      SouJava 2023 - Todos os direitos reservados
    </div>
  </footer>
  <script src="<?php echo get_theme_file_uri('/assets/js/main.js'); ?>"></script>

</body>

</html>