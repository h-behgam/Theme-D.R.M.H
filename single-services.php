<?php
// Displays single Services page
 get_header(); ?>

<div class="container">

	<?php
	/* Start the Loop */
	while (have_posts()):
		the_post();

		get_template_part('template-parts/content/content-services');

		get_template_part('template-parts/content/content-related');
	endwhile;
	// End of the loop.
	?>
</div>

<?php get_footer(); ?>