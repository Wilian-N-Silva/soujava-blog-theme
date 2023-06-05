	<?php get_header(); ?>
	<main class="home" style="min-height: 100%">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post-card<?php echo is_sticky() ? ' post-card--highlight' : ''; ?>">
					<div class="post-card__cover">
						<a href="<?php echo get_permalink(); ?>">
							<img src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : get_theme_file_uri('/assets/images/placeholder.png'); ?>" alt="" />
						</a>
					</div>
					<div class="post-card__data">
						<?php the_title(sprintf('<h2 class="post-card__title"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>

						<?php get_template_part('template-parts/post/author-bio'); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php the_posts_pagination(array(
				'mid_size'  => 2,
				'prev_text' => __('Anterior', 'textdomain'),
				'next_text' => __('Próxima', 'textdomain'),
			)); ?>
		<?php endif; ?>


	</main>
	<?php get_footer(); ?>
	<script type="module" src="<?php echo get_theme_file_uri('/assets/js/main.js'); ?>"></script>

	</body>

	</html>