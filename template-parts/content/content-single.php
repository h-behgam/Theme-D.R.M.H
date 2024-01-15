<div class="row wrapper single-post">
    <div class="single-right">

        <?php get_template_part('template-parts/single/single-related'); ?>

    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class(['single-left']); ?>>

        <?php get_template_part('template-parts/single/single-slider'); ?>
        
        <?php get_template_part('template-parts/content/content-separator'); ?>
        
        <?php get_template_part('template-parts/single/single-main'); ?>
                
        <?php get_template_part('template-parts/single/single-comment'); ?>
        
    </article><!-- #post-<?php the_ID(); ?> -->
</div>