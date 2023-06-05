	<?php get_header(); ?>
	<main class="post" style="min-height: 100%">
		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content/content-single');
		endwhile;
		?>

		<?php get_footer(); ?>
		<script type="module" src="<?php echo get_theme_file_uri('/assets/js/main.js'); ?>"></script>

		</body>

		</html>