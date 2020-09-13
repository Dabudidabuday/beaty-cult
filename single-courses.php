<?php get_header('course'); ?>

<?php   if (have_posts()) {
        while (have_posts()) {
        the_post(); ?>

<?php get_template_part('template-parts/hero-course') ?>

<?php 
$promoText = get_field('course-promo'); 

if($promoText) : ?>
    <div class="course-promo separator separator-top">
        <div class="container">
            <p class="promo-text">
                <?php echo $promoText ?>
            </p>
        </div>
    </div>
<?php endif; ?>


<?php get_template_part('/template-parts/stages-course') ?>

<section class="section teachers">
    <div class="container">
        <h3 class="h1 teachers-title">Викладачі курсу</h3>

        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php
                 $images = acf_photo_gallery('course-teachers', $post->ID);
                 
                 if( count($images) ):
                     
                     foreach($images as $image):
                         $thumbnail_image_url= $image['thumbnail_image_url']; ?>

                           <div class="swiper-slide">
                               <img src="<?php echo $thumbnail_image_url;  ?>" alt="">
                           </div>
                       <?php endforeach; ?>
                 <?php endif;  ?>
            </div>
            <div class="slider-nav-prev">
                <span class="slider-arrow">
                    <svg width="8" height="17" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 15.8652L1 8.87109L7 1.87695" stroke="#C2CECA" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </div>

            <div class="slider-nav-next">
                <span class="slider-arrow">
                    <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 12.1485L6 6.90288L1.5 1.65723" stroke="#C2CECA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>

<div class="banner">
    <img src="<?php echo get_template_directory_uri() . '/public/assets/images/backgrounds/promo-background.jpg'; ?>" alt="">
</div>

<section class="section atmo">
    <div class="container">
        <h3 class="h1 teachers-title">Роботи випускників</h3>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                 $images = acf_photo_gallery('course-students-works', $post->ID);
                 
                 if( count($images) ):
                     
                     foreach($images as $image):
                         $thumbnail_image_url= $image['thumbnail_image_url']; ?>

                           <div class="swiper-slide">
                               <img src="<?php echo $thumbnail_image_url;  ?>" alt="">
                           </div>
                       <?php endforeach; ?>
                 <?php endif;  ?>
            </div>

            <div class="slider-nav-prev">
                <span class="slider-arrow">
                    <svg viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 15.8652L1 8.87109L7 1.87695" stroke="#C2CECA" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </div>

            <div class="slider-nav-next">
                <span class="slider-arrow">
                    <svg viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 15.8654L7 8.87115L1 1.87695" stroke="#C2CECA" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/certificate'); ?>

<?php get_template_part('template-parts/review-course'); ?>

    <?php
        }
    } ?>

<?php get_template_part('/template-parts/feedback'); ?>

<?php get_footer(); ?>
