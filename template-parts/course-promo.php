<?php 
$promoTitle = get_field('course-promo-title');
$promoText = get_field('course-promo'); 

if($promoText) : ?>
    <div class="course-promo separator separator-top">
        <div class="container">

            <h3 class="promo-title">
                <?php echo $promoTitle ?>
            </h3>

            <p class="promo-text">
                <?php echo $promoText ?>
            </p>
        </div>
    </div>
<?php endif; ?>