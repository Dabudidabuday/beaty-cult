<section class="section atmo">
    <div class="container">
        <h3 class="h1 atmo-title">Наша атмосфера</h3>
        
        <div class="slider-container atmo-slider">
            <?php
            if(have_posts()) :
                while(have_posts()) : the_post();
                    $atmoList = acf_photo_gallery('atmo-list', $post->ID);

                    if( count($atmoList) ): 
                        foreach($atmoList as $item): 

                            $image = $item['full_image_url'];
                        ?>
                            <div class="slider-slide">
                                <img src="<?php echo $image ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>