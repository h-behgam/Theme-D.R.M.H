<div class="column">
    <?php
    $query = new WP_Query(
        array(
            // 'cat' => 3,
            'posts_per_page' => 5
        )
    );

    if ($query->have_posts()): ?>
        <div class="recent-posts column">
            <?php while ($query->have_posts()):
                $query->the_post(); ?>

                <a href="<?php the_permalink() ?>" class="thumbnail" title="<?php the_title(); ?>">
                    <article class="post-item row">
                        <figure class="post-thumb">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </figure>
                        <p>
                            <?php the_title(); ?>
                        </p>
                        <div class="semi-circle-top"></div>
                    </article>
                </a>

            <?php endwhile; ?>
        </div>

    <?php endif;
    wp_reset_postdata();
    ?>
</div>