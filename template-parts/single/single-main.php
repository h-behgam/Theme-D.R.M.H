<main class="row">
    <div class="entry-content-right">
        <div class="entry-title">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="line-65"></div>
        </div>
        <div class="entry-content">
            <?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
                    'after' => '</nav>',
                    /* translators: %: Page number. */
                    'pagelink' => esc_html__('Page %', 'twentytwentyone'),
                )
            );
            ?>
        </div><!-- .entry-content -->
    </div>
    <div class="entry-content-left">
        <div class="entry-image">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('thumb11', array('alt' => '' . get_the_title(), 'title' => '' . get_the_title() . ''));
            } else { ?>
                <img src="<?php bloginfo('template_url'); ?>/images/thumb.jpg" width="60" height="60" alt="تصویر پیدا نشد"
                    title="تصویر پیدا نشد">
            <?php } ?>
        </div>
    </div>
</main>