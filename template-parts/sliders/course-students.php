<?php 
$students = get_field('course-students-works');

if($students) :?>
    <section class="section students">
        <div class="container">
            <h3 class="h1 teachers-title">Роботи випускників</h3>

            <div class="slider-container students-slider">
                    <?php
                    $images = acf_photo_gallery('course-students-works', $post->ID);
                    
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

