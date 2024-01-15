<?php /* Template Name: CONTACT-US */?>
<?php get_header(); ?>

<section class="contact-us">
    <div class="container">
        <?php get_template_part('template-parts/contact-us/contact', 'header') ?>
        <?php get_template_part('template-parts/contact-us/contact', 'title') ?>
        <?php get_template_part('template-parts/contact-us/contact', 'time') ?>
        <?php get_template_part('template-parts/contact-us/contact', 'location') ?>
        <?php get_template_part('template-parts/contact-us/contact', 'us') ?>
    </div>
</section>

<?php get_footer(); ?>