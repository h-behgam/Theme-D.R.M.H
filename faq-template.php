<?php /* Template Name: FAQ */?>
<?php get_header(); ?>

<section class="faq">
    <div class="container">
        <header>
            <div class="image">
                <img src="<?php echo PATH; ?>/assets/images/faq-background.jpg" alt="faq-background">
            </div>
            <h2>سوالات متداول</h2>
            <p>در اینجا سعی می‌کنیم به سوالات متداولی که ممکن است، برای شما پیش بیاید، پاسخ دهیم.</p>
        </header>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php if (have_rows('faq')): ?>

                    <!-- // loop through the rows of data -->
                    <div class="faq">
                        <div class="accordion">
                            <?php while (have_rows('faq')):
                                the_row();

                                // display a sub field value
                                echo '<div class="heading">' . get_sub_field('faq_question') . '</div>
                            <div class="contents">' . get_sub_field('faq_answer') . '</div>';

                            endwhile; ?>
                        </div>
                    </div>
                <?php else:

                // no rows found
            
            endif;
            ?>
            </main><!-- .site-main -->
        </div>
    </div>
</section>

<!-- .content-area -->

<?php get_footer(); ?>