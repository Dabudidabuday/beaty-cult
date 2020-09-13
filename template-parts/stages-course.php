
<?php if(have_rows('course-stages')) : ?>
    <?php while(have_rows('course-stages')) : the_row();

        $stage1 = get_sub_field('stage-1');
        $stage2 = get_sub_field('stage-2');
        $stage3 = get_sub_field('stage-3');
        ?>

        <?php if($stage1) : ?>
            <section class="stages separator separator-top">
                <div class="stages-container">
                    <div class="stage-img">
                        <img src="<?php echo $stage1['stage-image-1'] ?>" alt="">
                    </div>

                    <div class="container">
                        <div class="stage-description">
                            <h1 class="h1 stage-title"><?php echo $stage1['stage-title-1'] ?></h1>
                            <p class="stage-text">
                                <?php echo $stage1['stage-description-1'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($stage2) : ?>
            <section class="stages separator separator-top">
                <div class="stages-container stages-container--reverse">
                    <div class="stage-img">
                        <img src="<?php echo $stage2['stage-image-2'] ?>" alt="">
                    </div>

                    <div class="container">
                        <div class="stage-description">
                            <h1 class="h1 stage-title"><?php echo $stage2['stage-title-2'] ?></h1>
                            <p class="stage-text">
                                <?php echo $stage2['stage-description-2'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if($stage3['stage-image-3']) :?>
            <section class="stages separator separator-top">
                <div class="stages-container">
                    <div class="stage-img">
                        <img src="<?php echo $stage3['stage-image-3'] ?>" alt="">
                    </div>

                    <div class="container">
                        <div class="stage-description">
                            <h1 class="h1 stage-title"><?php echo $stage3['stage-title-3'] ?></h1>
                            <p class="stage-text">
                                <?php echo $stage3['stage-description-3'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
