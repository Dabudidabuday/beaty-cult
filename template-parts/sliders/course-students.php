<?php 
$students = get_field('course-students-works');

if($students) :?>
    <section class="section students">
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
<?php endif; ?>