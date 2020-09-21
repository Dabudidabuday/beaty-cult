<?php get_header('course'); ?>


<?php   
if (have_posts()) {
    while (have_posts()) {
    the_post(); ?>



    <?php get_template_part('template-parts/course', 'hero') ?>

    <?php get_template_part('template-parts/course', 'promo') ?>

    <?php get_template_part('template-parts/course', 'details') ?>

    <?php get_template_part('template-parts/course', 'stages') ?>

    <?php get_template_part('template-parts/sliders/course', 'teachers') ?>

    <?php get_template_part('template-parts/course', 'banner') ?>

    <?php get_template_part('template-parts/sliders/course', 'students') ?>

    <?php get_template_part('template-parts/course', 'certificate'); ?>

    <?php get_template_part('template-parts/course', 'review'); ?>



<?php
    }
} ?>

<?php get_template_part('/template-parts/course', 'feedback'); ?>


<?php get_footer(); ?>

</main>