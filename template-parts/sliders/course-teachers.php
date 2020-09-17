<?php 
$teachers = get_field('course-teachers');

if($teachers) :?>
    <section class="section teachers">
        <div class="container">
            <h3 class="h1 teachers-title">Викладачі курсу</h3>

            <div class="slider-container teachers-slider">
                <?php
                    $images = acf_photo_gallery('course-teachers', $post->ID);
                    
                    if( count($images) ):
                        
                        foreach($images as $image):
                            $full_image_url= $image['full_image_url']; ?>

                            <div class="slider-slide">
                                <img src="<?php echo $full_image_url;  ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    <?php endif;  ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
