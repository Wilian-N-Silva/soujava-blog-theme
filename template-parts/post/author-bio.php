<?php if ((bool) post_type_supports(get_post_type(), 'author')) : ?>
  <a class="author" href="<?php echo get_the_author_meta('user_url'); ?>">
    <?php if (get_option('show_avatars')) : ?>
      <div class="author__picture">
        <?php echo get_avatar(get_the_author_meta('ID')); ?>
      </div>
    <?php endif; ?>
    <div class="author__texts">
      <span class="author__name">
        <?php echo get_the_author_meta('display_name'); ?>
      </span>
      <span class="post__date"><?php echo get_the_date() ?></span>
    </div>
  </a>
<?php
endif;
