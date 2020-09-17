<section class="section teachers">
    <div class="container">
        <h3 class="h1 teachers-title">Викладачі школи</h3>

        <div class="slider-container teachers-slider">
            <?php 
            if(have_posts()) :
                while(have_posts()) : the_post();
                    $teachersList = acf_photo_gallery('teachers-list', $post->ID);

                    if( count($teachersList) ): 
                        foreach($teachersList as $item): 

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