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