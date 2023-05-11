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
          <a class="author" href="#">
            <div class="author__picture">
              <img src="https://cdn.discordapp.com/avatars/287034965697232906/b8ed88f5040f827ef79f9a4d923f3b4a.webp?size=80" alt="" />
            </div>
            <div class="author__texts">
              <span class="author__name">Author</span>
              <span class="post__date">Data</span>
            </div>
          </a>
          <button class="btn btn--share">Compartilhe</button>
        </div>
      </div>
      <div class="post__body">
        <?php the_content(); ?>
      </div>
    </div>
  </article>