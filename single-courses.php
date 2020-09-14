<?php get_header('course'); ?>


<?php   
if (have_posts()) {
    while (have_posts()) {
    the_post(); ?>

<main data-barba="container" data-barba-namespace="course">

    <?php get_template_part('template-parts/course', 'hero') ?>

    <?php get_template_part('template-parts/course', 'promo') ?>


    <?php get_template_part('template-parts/course', 'stages') ?>

    <?php get_template_part('template-parts/sliders/course', 'teachers') ?>

    <?php get_template_part('template-parts/course', 'banner') ?>

    <?php get_template_part('template-parts/sliders/course', 'students') ?>

    <?php get_template_part('template-parts/course', 'certificate'); ?>

    <?php get_template_part('template-parts/course', 'review'); ?>

</main>

<?php
    }
} ?>

<?php get_template_part('/template-parts/feedback'); ?>

<?php get_footer(); ?>