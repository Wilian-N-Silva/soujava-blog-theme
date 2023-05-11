	<?php get_header(); ?>
	<main class="post" style="min-height: 100%">
		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content/content-single');
		endwhile; // End of the loop.
		?>
		<?php get_footer(); ?>