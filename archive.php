<?php
get_header();
$description = get_the_archive_description();
?>
<?php if (have_posts()): ?>
	<div class="container wrapper row archive">
		<div class="category-list column">
			<?php
			$categories = get_categories();
			foreach ($categories as $category) {
				echo '<a class="category" href="' . get_category_link($category->term_id) . '">' . $category->name . '<span class="semi-circle-top"></span></a>';
			}
			?>
			
		</div>
		<div class="categorys">
			<article id="post-<?php the_ID(); ?>" <?php post_class(['row']); ?>>
				<?php while (have_posts()): ?>
					<?php the_post(); ?>

					<div class="entry-header">
						<div class="image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="row details">
							<a href="<?php esc_url(the_permalink()) ?>">
								<h2 class="entry-title default-max-width"><?php the_title(); ?></h2>
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
				<p>not found</p>
			<?php endif; ?>
		</article><!-- #post-${ID} -->
		<div class="ads">
			<img src="<?php echo PATH; ?>/assets/images/image-reserv.jpg" alt="reservation">
		</div>
	</div>
</div>
<?php
get_footer();