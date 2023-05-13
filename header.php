<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>" />
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <?php get_template_part('template-parts/header/site-header'); ?>
  <script src="<?php echo get_theme_file_uri('/assets/js/theme.js'); ?>"></script>