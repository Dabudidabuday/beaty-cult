
<?php $course = get_field('course-info');
$title = $course['course-title'];
$description = $course['course-description'];
$price = $course['course-price'];
$duration = $course['course-duration'];
$date = $course['course-date']; 
$image = $course['course-image'];
?>

<section class="section hero-course">
    <div class="container hero-course-container">
        <div class="courses-img">
            <picture>
                <img src="<?php echo $image ?>" alt="">
            </picture>
        </div>

        <div class="courses__card">

            <h1 class="h1 card-title course-title"><?php echo the_title(); ?></h1>

            <div class="card__description">
                <p class="card-text course-description">
                    <?php echo $description; ?>
                </p>

                <div class="card__info">
                    <div class="card__info-bullet">
                        <div class="bullet-icon">
                            <img src="<?php echo get_template_directory_uri() . '/public/assets/images/icons/instagram.svg'; ?>" alt="">
                        </div>
                        <p class="bullet-price bold">
                            <?php echo $price . ' UAH' ?>
                        </p>
                    </div>

                    <div class="card__info-bullet">
                        <div class="bullet-icon">
                            <img src="<?php echo get_template_directory_uri() . '/public/assets/images/icons/instagram.svg'; ?>" alt="">
                        </div>
                        <p class="bullet-price bold">
                            <?php echo $date ?>
                        </p>
                    </div>

                    <div class="card__info-bullet">
                        <div class="bullet-icon">
                            <img src="<?php echo get_template_directory_uri() . '/public/assets/images/icons/instagram.svg'; ?>" alt="">
                        </div>
                        <p class="bullet-price bold">
                            <?php echo $duration ?>
                        </p>
                    </div>
                </div>

                <div class="btn-group">
                    <a href="" class="btn btn-primary">Записаться</a>
                    <a class="btn btn-outline">Стать моделью</a>
                </div>
            </div>
        </div>
    </div>
</section>
