<?php
if (!function_exists('soujava_theme_setup')) :
  /**
   * Sets up theme defaults and registers support for various
   * WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme
   * hook, which runs before the init hook. The init hook is too late
   * for some features, such as indicating support post thumbnails.
   */
  function soujava_theme_setup()
  {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    // load_theme_textdomain('myfirsttheme', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    // add_theme_support('automatic-feed-links');

    /**
     * Enable support for post thumbnails and featured images.
     */

    add_theme_support('post-thumbnails');

    /**
     * Add support for two custom navigation menus.
     */
    // register_nav_menus(array(
    //   'primary'   => __('Primary Menu', 'myfirsttheme'),
    //   'secondary' => __('Secondary Menu', 'myfirsttheme'),
    // ));

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    // add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    add_filter('show_admin_bar', '__return_true');
  }
endif; // soujava_theme_setup

add_action('after_setup_theme', 'soujava_theme_setup');
add_filter('show_admin_bar', '__return_true');
