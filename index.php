<?php get_header(); ?>

<main data-barba="container" data-barba-namespace="home">

<div class="loading-container">
    <div class="loading-screen"></div>
</div>
        
    <?php get_template_part('template-parts/home', 'hero') ?>

    <?php get_template_part('template-parts/home', 'courses') ?>

    <?php get_template_part('template-parts/home', 'about'); ?>

    <?php get_template_part('template-parts/home', 'promo'); ?>

    <?php get_template_part('template-parts/sliders/home', 'atmo'); ?>

    <?php get_template_part('template-parts/sliders/home', 'teachers'); ?>

    <?php get_template_part('/template-parts/feedback'); ?>

</main>

<?php get_footer(); ?>

