<section class="section courses separator" id="sectionCourses">
    <div class="container">
        <div class="courses-container">
            <div class="accordion">
                <h3 class="h1 courses__title">Напрямки краси</h3>

                <div class="grid">
                    <?php

                    $terms = get_terms(
                            array(
                                'taxonomy' => 'courses_directions',
                                'hide_empty' => true,
                                'hierarchical' => false,
                            )
                    );

                    foreach ($terms as $term) { ?>

                    <div class="item accordion-item separator">
                        <div class="accordion__outer-list">
                            <h3 class="item__title"><?php echo $term -> name ?></h3>
                            <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                        </div>

                        <ul class="accordion__inner-list visually-hidden">

                        <?php
                            $args = array(
                                'post_type' => 'courses',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                        array(
                                            'taxonomy' => 'courses_directions',
                                            'field' => 'name',
                                            'terms' => $term -> name
                                        )
                                )
                            );

                            $coursesList = new WP_Query( $args );

                            if ($coursesList -> have_posts()) {
                                while($coursesList -> have_posts()) {
                                    $coursesList -> the_post();

                                    $course = get_field('course-info');
                                    $title = $course['course-title'];
                                    $description = $course['course-description'];
                                    $price = $course['course-price'];
                                    $duration = $course['course-duration'];
                                    $date = $course['course-date'];
                                    $image = $course['course-image'];
                                    $additionalImage = $course['course-image-additional'];
                                    $link = get_permalink();

                                    ?>

                                    <li class="item">
                                        <a
                                                href="<?php echo $link ?>"
                                                class="item-link course-title show-mobile"
                                                data-link="<?php echo $link; ?>"
                                                data-title="<?php echo $title; ?>"
                                                data-price="<?php echo $price; ?>"
                                                data-date="<?php echo $date; ?>"
                                                data-description="<?php echo $description;  ?>"
                                                data-duration="<?php echo $duration; ?>"
                                                data-image="<?php echo $image; ?>"
                                                data-additional="<?php echo $additionalImage; ?>"
                                        >
                                            <?php the_title(); ?>
                                        </a>

                                        <button
                                                type="button"
                                                class="item-link course-title show-desktop"
                                                data-link="<?php echo $link ?>"
                                                data-title="<?php echo $title ?>"
                                                data-price="<?php echo $price ?>"
                                                data-date="<?php echo $date ?>"
                                                data-description="<?php echo $description;  ?>"
                                                data-duration="<?php echo $duration?>"
                                                data-image="<?php echo $image; ?>"
                                                data-additional="<?php echo $additionalImage; ?>"
                                        >
                                            <?php the_title(); ?>
                                        </button>


                                        <span class="item-data"><?php echo $duration  ?></span>
                                    </li>

                                    <?php } ?>
                                </ul>
                            </div>
                            <?php

                            } else {
                                wp_reset_postdata();
                            }
                        ?>


                    <?php } ?>



                </div>
            </div>

            <div class="courses__card">
                <div class="card__img">
                    <picture>
                        <img class="course-image" src="" loading=lazy alt="">
                    </picture>

                    <picture>
                        <img class="course-image-additional" src="" loading=lazy alt="">
                    </picture>
                </div>

                <div class="card__description">
                    <p class="card-text course-description">

                    </p>

                    <div class="card__info">
                        <div class="card__info-bullet">
                            <div class="bullet-icon">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <path d="M29.0209 4.97914C25.81 1.76827 21.5409 0 17 0C12.4591 0 8.19002 1.76827 4.97914 4.97914C1.76833 8.19002 0 12.4591 0 17C0 21.5409 1.76833 25.81 4.97914 29.0209C8.19002 32.2317 12.4591 34 17 34C21.5409 34 25.81 32.2317 29.0209 29.0209C32.2317 25.81 34 21.5409 34 17C34 12.4591 32.2317 8.19002 29.0209 4.97914ZM17 32.0078C8.72465 32.0078 1.99219 25.2753 1.99219 17C1.99219 8.72465 8.72465 1.99219 17 1.99219C25.2753 1.99219 32.0078 8.72465 32.0078 17C32.0078 25.2753 25.2753 32.0078 17 32.0078Z" fill="#A8CEC2"/>
                                    <path d="M18.0669 16.0039H15.933C14.7173 16.0039 13.7283 15.0149 13.7283 13.7993C13.7283 12.5836 14.7174 11.5946 15.933 11.5946H20.2007C20.7509 11.5946 21.1968 11.1486 21.1968 10.5985C21.1968 10.0484 20.7509 9.60239 20.2007 9.60239H17.9961V7.39771C17.9961 6.8476 17.5501 6.40161 17 6.40161C16.4499 6.40161 16.0039 6.8476 16.0039 7.39771V9.60239H15.9331C13.6189 9.60239 11.7362 11.4851 11.7362 13.7993C11.7362 16.1134 13.619 17.9961 15.9331 17.9961H18.067C19.2826 17.9961 20.2716 18.9851 20.2716 20.2008C20.2716 21.4164 19.2826 22.4055 18.067 22.4055H13.7992C13.2491 22.4055 12.8032 22.8514 12.8032 23.4015C12.8032 23.9517 13.2491 24.3976 13.7992 24.3976H16.0039V26.6024C16.0039 27.1525 16.4499 27.5985 17 27.5985C17.5501 27.5985 17.9961 27.1525 17.9961 26.6024V24.3976H18.0669C20.381 24.3976 22.2637 22.5149 22.2637 20.2008C22.2637 17.8866 20.381 16.0039 18.0669 16.0039Z" fill="#A8CEC2"/>
                                </svg>
                            </div>
                            <p class="bullet-price bold course-price">

                            </p>
                        </div>

                        <div class="card__info-bullet">
                            <div class="bullet-icon">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <g clip-path="url(#clip0)">
                                    <path d="M30.4752 4.42782H28.3407V2.73623C28.3407 2.24913 27.9422 1.85059 27.4551 1.85059C26.968 1.85059 26.5694 2.24913 26.5694 2.73623V4.42782H17.8901V2.73623C17.8901 2.24913 17.4916 1.85059 17.0044 1.85059C16.5173 1.85059 16.1188 2.24913 16.1188 2.73623V4.42782H7.35088V2.73623C7.35088 2.24913 6.95234 1.85059 6.46523 1.85059C5.97813 1.85059 5.57958 2.24913 5.57958 2.73623V4.42782H3.53374C1.58531 4.42782 0 6.06627 0 8.01469V28.606C0 30.5633 1.57645 32.1486 3.53374 32.1486H30.4663C32.4236 32.1486 34 30.5633 34 28.6149V8.01469C34.0089 6.06627 32.4236 4.42782 30.4752 4.42782ZM32.2376 28.606C32.2376 29.5802 31.4582 30.3684 30.484 30.3773H30.4752H3.53374C2.55952 30.3773 1.7713 29.5891 1.7713 28.6149V28.606V8.01469C1.7713 7.03162 2.55952 6.19911 3.53374 6.19911H5.57958V7.4833C5.57958 7.97041 5.97813 8.36895 6.46523 8.36895C6.95234 8.36895 7.35088 7.97041 7.35088 7.4833V6.19911H16.1188V7.4833C16.1188 7.97041 16.5173 8.36895 17.0044 8.36895C17.4916 8.36895 17.8901 7.97041 17.8901 7.4833V6.19911H26.5694V7.4833C26.5694 7.97041 26.968 8.36895 27.4551 8.36895C27.9422 8.36895 28.3407 7.97041 28.3407 7.4833V6.19911H30.4752C31.4582 6.19911 32.2376 7.04048 32.2376 8.01469V28.606Z" fill="#A8CEC2"/>
                                    <path d="M14.6758 11.9561H13.1259C12.6388 11.9561 12.2402 12.3546 12.2402 12.8417C12.2402 13.3288 12.6388 13.7273 13.1259 13.7273H14.6758C15.1629 13.7273 15.5614 13.3288 15.5614 12.8417C15.5614 12.3546 15.1629 11.9561 14.6758 11.9561Z" fill="#A8CEC2"/>
                                    <path d="M20.8398 11.9561H19.2899C18.8028 11.9561 18.4043 12.3546 18.4043 12.8417C18.4043 13.3288 18.8028 13.7273 19.2899 13.7273H20.8398C21.3269 13.7273 21.7255 13.3288 21.7255 12.8417C21.7255 12.3546 21.3358 11.9561 20.8398 11.9561Z" fill="#A8CEC2"/>
                                    <path d="M27.0566 11.9561H25.5067C25.0196 11.9561 24.6211 12.3546 24.6211 12.8417C24.6211 13.3288 25.0196 13.7273 25.5067 13.7273H27.0566C27.5437 13.7273 27.9423 13.3288 27.9423 12.8417C27.9423 12.3546 27.5437 11.9561 27.0566 11.9561Z" fill="#A8CEC2"/>
                                    <path d="M14.6758 18.0674H13.1259C12.6388 18.0674 12.2402 18.4659 12.2402 18.953C12.2402 19.4401 12.6388 19.8387 13.1259 19.8387H14.6758C15.1629 19.8387 15.5614 19.4401 15.5614 18.953C15.5614 18.4659 15.1629 18.0674 14.6758 18.0674Z" fill="#A8CEC2"/>
                                    <path d="M8.46587 18.0674H6.90713C6.42003 18.0674 6.02148 18.4659 6.02148 18.953C6.02148 19.4401 6.42003 19.8387 6.90713 19.8387H8.45701C8.94412 19.8387 9.34266 19.4401 9.34266 18.953C9.34266 18.4659 8.95298 18.0674 8.46587 18.0674Z" fill="#A8CEC2"/>
                                    <path d="M20.8398 18.0674H19.2899C18.8028 18.0674 18.4043 18.4659 18.4043 18.953C18.4043 19.4401 18.8028 19.8387 19.2899 19.8387H20.8398C21.3269 19.8387 21.7255 19.4401 21.7255 18.953C21.7255 18.4659 21.3358 18.0674 20.8398 18.0674Z" fill="#A8CEC2"/>
                                    <path d="M27.0566 18.0674H25.5067C25.0196 18.0674 24.6211 18.4659 24.6211 18.953C24.6211 19.4401 25.0196 19.8387 25.5067 19.8387H27.0566C27.5437 19.8387 27.9423 19.4401 27.9423 18.953C27.9423 18.4659 27.5437 18.0674 27.0566 18.0674Z" fill="#A8CEC2"/>
                                    <path d="M14.6758 24.0898H13.1259C12.6388 24.0898 12.2402 24.4884 12.2402 24.9755C12.2402 25.4626 12.6388 25.8611 13.1259 25.8611H14.6758C15.1629 25.8611 15.5614 25.4626 15.5614 24.9755C15.5614 24.4884 15.1629 24.0898 14.6758 24.0898Z" fill="#A8CEC2"/>
                                    <path d="M8.46587 24.0898H6.90713C6.42003 24.0898 6.02148 24.4884 6.02148 24.9755C6.02148 25.4626 6.42003 25.8611 6.90713 25.8611H8.45701C8.94412 25.8611 9.34266 25.4626 9.34266 24.9755C9.34266 24.4884 8.95298 24.0898 8.46587 24.0898Z" fill="#A8CEC2"/>
                                    <path d="M20.8398 24.0898H19.2899C18.8028 24.0898 18.4043 24.4884 18.4043 24.9755C18.4043 25.4626 18.8028 25.8611 19.2899 25.8611H20.8398C21.3269 25.8611 21.7255 25.4626 21.7255 24.9755C21.7255 24.4884 21.3358 24.0898 20.8398 24.0898Z" fill="#A8CEC2"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0">
                                    <rect width="34" height="34" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <p class="bullet-price bold course-date">

                            </p>
                        </div>

                        <div class="card__info-bullet">
                            <div class="bullet-icon">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <path d="M17 0C7.62637 0 0 7.62637 0 17C0 26.3736 7.62637 34 17 34C26.3736 34 34 26.3736 34 17C34 7.62637 26.3736 0 17 0ZM17 31.875C8.79778 31.875 2.12501 25.2022 2.12501 17C2.12501 8.79778 8.79778 2.12501 17 2.12501C25.2022 2.12501 31.875 8.79778 31.875 17C31.875 25.2022 25.2022 31.875 17 31.875Z" fill="#A8CEC2"/>
                                    <path d="M18.0625 6.375H15.9375V17.4399L22.6238 24.1262L24.1262 22.6237L18.0625 16.56V6.375Z" fill="#A8CEC2"/>
                                </svg>
                            </div>
                            <p class="bullet-price bold course-duration">

                            </p>
                        </div>
                    </div>

                    <a href="" class="btn btn-primary mr-05 course-link">Подробиці курсу</a>
                    <a class="btn btn-outline">Отримати консультацію</a>
                </div>
            </div>
        </div>
    </div>
</section>