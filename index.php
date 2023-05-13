	<?php get_header(); ?>
	<main class="home" style="min-height: 100%">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post-card<?php echo is_sticky() ? ' post-card--highlight' : ''; ?>">
					<div class="post-card__cover">
						<img src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : 'https://soujava.org.br/wp-content/uploads/2020/02/design-sem-nome-1-620x200.png'; ?>" alt="" />
					</div>
					<div class="post-card__data">
						<h2 class="post-card__title"><?php the_title(); ?></h2>
					</div>
				</div>
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php endif; ?>

		<?php get_footer(); ?>
		<script src="<?php echo get_theme_file_uri('/assets/js/main.js'); ?>"></script>

		</body>

		</html>