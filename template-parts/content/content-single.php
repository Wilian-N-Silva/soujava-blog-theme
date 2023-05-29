  <article class="post__wrapper">
    <?php if (has_post_thumbnail()) : ?>
      <div class="post__cover">
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" />
      </div>
    <?php endif; ?>

    <div class="post__content">
      <div class="post__header">
        <div class="post__title">
          <?php the_title('<h1>', '</h1>'); ?>
        </div>
        <div class="post__info">
          <?php get_template_part('template-parts/post/author-bio'); ?>
          <button class="btn btn--share" data-post-title="<?php the_title() ?>" data-post-permalink="<?php the_permalink() ?>">
            Compartilhe
          </button>
        </div>
      </div>
      <div class="post__body">
        <?php the_content(); ?>
      </div>
    </div>
  </article>