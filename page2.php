<?php get_header(); ?>


<div id="primary" class="container content-area">
    <main id="main" class="site-main" role="main">
        <?php while (have_posts()):
            get_template_part('template-parts/content/content', 'page');
        endwhile; ?>

    </main><!-- .site-main -->

</div>

<!-- .content-area -->

<?php get_footer(); ?>