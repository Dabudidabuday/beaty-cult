<section class="section teachers">
    <div class="container">
        <h3 class="h1 teachers-title">Викладачі школи</h3>

        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?php 

                if(have_posts()) :
                    while(have_posts()) : the_post();
                        $teachersList = acf_photo_gallery('teachers-list', $post->ID);

                    
                        if( count($teachersList) ): 
                            foreach($teachersList as $item): 

                                $image = $item['full_image_url'];
                            ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image ?>" alt="">
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
               <?php endif; ?>

                
                

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