<?php
/* Template Name: Services Page TPL */
// Displays All Services
// Main Header
get_header(); ?>

<!-- cat section -->
<div class="container wrapper row archive">
	<div class="category-list column">
		<?php
		$args = array(
			'post_type' => 'services',
			'posts_per_page' => 2
		);
		// the query
		$the_query = new WP_Query($args); ?>
		<?php if ($the_query->have_posts()):
			while ($the_query->have_posts()):
				$the_query->the_post();
				$projectID = get_the_ID();
				?>
				<a class="category" href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?><span
						class="semi-circle-top"></span></a>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>

		<?php else: ?>
			<p>
				<?php esc_html_e('پستی موجود نمی باشد'); ?>
			</p>
		<?php endif; ?>
	</div>

	<!-- main section -->
	<?php
	$args = array(
		'post_type' => 'Services',
		'posts_per_page' => 100
	);
	// the query
	$the_query = new WP_Query($args); ?>
	<?php if ($the_query->have_posts()): ?>
		<div class="categorys">
			<article id="post-<?php the_ID(); ?>" <?php post_class(['row', 'post']); ?>>
				<?php while (have_posts()): ?>
					<?php the_post(); ?>

					<div class="entry-header">
						<div class="image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="row details">
							<a href="<?php esc_url(the_permalink()) ?>">
								<h2 class="entry-title default-max-width">
									<?php the_title(); ?>
								</h2>
							</a>
							<?php if (!is_null(get_field('treatment_duration'))): ?>
								<span class="info">
									<?php the_field('treatment_duration'); ?>
								</span>
							<?php endif; ?>
						</div>
						<span class="line-gray"></span>
						<a href="<?php esc_url(the_permalink()) ?>">جهت مشاهده کلیک کنید</a>
					</div><!-- .entry-header -->
				<?php endwhile; ?>
			<?php else: ?>
				<p>
					<?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
				</p>
			<?php endif;
			wp_reset_postdata(); ?>
		</article><!-- #post-${ID} -->
		<div class="ads">
			<img src="<?php echo PATH; ?>/assets/images/image-reserv.jpg" alt="reservation">
		</div>
	</div>
</div>
<?php
get_footer();