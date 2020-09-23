<section class="section details">
    <div class="container">

    <h3 class="h1 details-title">Програма курсу</h3>
    <?php

            $program = get_field('course-program');
            $theory = $program['theory'];
            $practice = $program['practice'];
            ?>

      <div class="accordion">
            
            <div class="item accordion-item separator">
                <div class="accordion__outer-list">
                    <h3 class="item__title">Теорiя</h3>
                    <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                </div>
                <ul class="accordion__inner-list">
                    <li class="item">
                        <p><?php echo $theory;  ?></p>
                    </li>
                    
                </ul>
            </div>

            <div class="item accordion-item separator">
                <div class="accordion__outer-list">
                    <h3 class="item__title">Практика</h3>
                    <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                </div>
                <ul class="accordion__inner-list">
                    <li class="item">
                        <p class="item-link"><?php echo $practice  ?></p>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>