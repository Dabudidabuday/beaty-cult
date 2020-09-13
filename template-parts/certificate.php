<section class="section certificate">
    <div class="container">
        <h1 class="h1">Диплом</h1>

        <div class="certificate-wrapper">
            <?php
            $certificate = get_field('certificate');
            $description = $certificate['description'];
            $image = $certificate['image']; ?>

            <div class="certificate-img">
                <picture>
                    <img src="<?php echo $image; ?>" alt="">
                </picture>
            </div>

            <div class="certificate-description">
                <p>
                    <?php echo $description; ?>
                </p>
            </div>
        </div>
    </div>
</section>
