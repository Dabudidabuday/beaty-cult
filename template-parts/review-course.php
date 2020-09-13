<section class="section review">
    <div class="container">
        <h3 class="h1 review-title">Відгуки</h3>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'reviews-list',
                    'posts_per_page' => -1,
                );

                var_dump(the_title());
                $coursesList = new WP_Query( $args );

                if ($coursesList -> have_posts()) {
                    while($coursesList -> have_posts()) {
                        $coursesList -> the_post(); 
                        $reviews = get_field('reviews');
                        $name = $reviews['name'];
                        $text = $reviews['text'];
                        $photo = $reviews['photo'];
                        $url = $reviews['url'];
                        ?>

                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card__author">
                                    <div class="author-img">
                                        <img src="<?php echo $photo ?>" alt="">
                                    </div>
                                    <p class="author-name"><?php echo $name  ?></p>
                                </div>

                                <p class="review-card__text">
                                    <?php echo $text; ?>
                                </p>

                                <div class="review-card__source">
                                    <span class="icon icon-fb">
                                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect x="0.529297" width="22" height="22" fill="url(#pattern0)"/>
                                                <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0" transform="translate(-0.00167224) scale(0.00334448)"/>
                                                </pattern>
                                                <image id="image0" width="300" height="299" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAErCAYAAABkeL7NAAAX70lEQVR4Xu2daWwV1RuH37qAsvwpewwilEYMEBMkyGKIIBhFUD/QL1IgNhAlSNliVQRTNlmkCpEgmgAqLnzxg0SiQdEgyKKIURIpSQEFDBoFSgs0tGW5/5xbrMrSe6Z35s68Z55JGimcOed9n9/xydxl7s1KJBIJSXFUVFSkGlL/79nZ2VZjmdMKk8AzNSf2UmpGZoT2vdShQwfJshWW8dqhQ4ektLRUjhw5In/99ZdUVVVJTU2NHS1GQQACsSXQtGlTad68uXTs2FG6dOkiPXv2lG7duklWVtZVTK4nVithVVdXy8aNG2Xbtm1SXl4eW+A0DgEI+EugTZs2MnjwYLn//vulSZMmKR+lpRTWjh075MMPP5TKykp/K2U2CEAAApcJtGrVSkaNGiV9+/ZN/o3nKyzzMG/NmjWyc+dOoEIAAhDICIF+/fpJfn6+tG/f/prrXfMKyzwvVVJSIgcOHMhIkSwCAQhA4G8C5nmtF198UZo1a3YVlKuEVVtbK4sXL5aysjIIQgACEAiFQG5ursyePVvME/X/Pq4S1qpVq8Q8b8UBAQhAIEwC5on4iRMnXl9Y5vmqN954I8waWRsCEIBAPYGpU6dK//7963+vv8Iyb1149tlnxcsb8OAKAQhAIEgCrVu3ltdee63+oWFSWKdOnUps3rxZNmzYEOTazA0BCEDAM4G8vDwZOnRo8rzu3btLVnl5eaK4uJg3hXpGyQkQgEDQBNq2bSvz5s1LviM+Kazvv/8+sXz58qDXZX4IQAACjSJQVFQkOTk5dcJat25d4vPPP2/URJwEAQhAIGgCI0aMkJEjR9YJa8GCBYn9+/cHvSbzQwACEGgUgR49ekhhYWGdsAoLCxPc1NwojpwEAQhkgIB5Hmv+/Pl1wiooKEiYd7hzQAACEIgiAfOO92XLltUJa8yYMTYfiRXFPqgJAhCIAQHzCuHKlSvrhJWfn5/yE0djwIQWIQCBCBMwd+EgrAgHRGkQgMA/BBAWuwECEFBDAGGpiYpCIQAB88nHyXsJeQ6LzQABCESdAMKKekLUBwEI1BNAWGwGCEBADQGEpSYqCoUABBAWewACEFBDAGGpiYpCIQABhMUegAAE1BBAWGqiolAIQABhsQcgAAE1BBCWmqgoFAIQ4NYc9gAEIKCGAMJSExWFQgACCIs9AAEIqCGAsNRERaEQgADCYg9AAAJqCCAsNVFRKAQggLDYAxCAgBoCCEtNVBQKAQggLPYABCCghgDCUhMVhUIAAgiLPQABCKghwL2EaqKiUAhAAGGxByAAATUEEJaaqCgUAhBAWOwBCDSCwI033ijZ2dnSrl27//y0bdtWWrZsKebfb731VrnpppukadOmyR/z5/Pnz0ttbW39ig39XlNTI+anurpazp07l/yz+amqqkrOYf5s/t78nDlzRs6ePZv8MeNdPRCWq8nSl68EOnbsKN26dZPc3NzkT9euXaVJkya+ruHXZBcuXKiXlxFZZWWlnDp1Sk6ePCkVFRVy7NgxOXr0qF/LZXQehJVR3CymhUCLFi2kd+/e0qdPH+nVq5eY31059u7dK0uXLlXZDsJSGRtFB0HAPJzr27dv8ueuu+5KPqxz8UBYLqZKT7EgkJWVJT179pRhw4bJvffeKzfccIPzfSMs5yOmQdcImCfEBwwYII888oh06tTJtfYa7AdhxSpumtVMwLxa9/DDD8vjjz+efBUvjodmYXFrThx3bAx7Ng/1zHNT+fn50r59+xgS+KdlhBXr+Gk+6gR69Ogh48aNky5dukS91IzUh7AygplFIOCNwM033yyjRo2Sxx57TMyT6xx1BBAWOwECESNgnkifPHkyV1XXyAVhRWyzUk68CQwfPlyeeOIJMVdYHFcTQFjsCghEgIB5Yv3JJ5+UBx98MALVRLcEhBXdbKgsJgTM2xWmTJki99xzT0w6bnybCKvx7DgTAmkTaNWqlRQVFSVvTuZITQBhpWbECAgEQqBNmzby0ksvifk0BQ47AgjLjhOjIOArgf/9739JWcXt1pp0ISKsdAlyPgQ8EjC31RQXF8sdd9zh8UyGaxYWHy/D/lVHwLwaOGPGjORnVXF4J4CwvDPjDAg0msDYsWOTn7LA0TgCCKtx3DgLAp4J9OvXT6ZNm+b5PE74hwDCYjdAIAMEzKcsLF68OLYfC+MXYoTlF0nmgcB1CJjnrWbNmiXmkxc40iOAsNLjx9kQSEngoYceSt52w5E+AYSVPkNmgMB1CZh3sr/66qvSrFkzKPlAAGH5AJEpIHA9AoWFhTJw4EAA+UQAYfkEkmkgcCWBO++8U+bOnQsYHwkgLB9hMhUE/k1g9uzZya/h4vCPgGZh8SUU/u0DZvKZwN133y0zZ870eVamQ1jsAQgEQMDc2MzbGPwHi7D8Z8qMMSeQk5MjL7/8cswpBNM+wgqGK7PGmID5Aon77rsvxgSCax1hBceWmWNIoEWLFrJy5Uq+RCKg7BFWQGCZNp4EzCcxmE9k4AiGAMIKhiuzxpTAkiVLpHPnzjHtPvi2EVbwjFkhJgRuu+225G04HMERQFjBsWXmmBEwXy2fl5cXs64z2y7CyixvVnOYwKJFi/h6+YDzRVgBA2b6eBDIzs5OvjqYlZUVj4ZD6lKzsPgSipA2DcteTWDw4MHy9NNPgyZgAggrYMBMHw8CTz31lAwZMiQezYbYJcIKET5Lu0PglVdekdtvv92dhiLaCcKKaDCUpYfALbfcIqtXrxbz2e0uHxcvXpSjR4/KkSNH5LfffpMTJ05IZWVl8qeqqirZenV1tZhxHFcT4DksdkUkCJhPZTCfzuDiUVtbK99995388MMP8vPPP8u5c+dcbDMjPSGsjGBmkVQEHn30URk9enSqYar+3VwxffLJJ7Jly5b6qydVDUSwWIQVwVDiWJL5clTzJamuHNu2bZP169fLmTNnXGkpEn0grEjEQBFLly6VTp06qQdx4cIFefvtt2Xr1q3qe4liAwgriqnEsKa1a9eKeeJd83Hp0iUxnzn+7bffam4j0rUjrEjHE4/iWrZsKW+99Zb6Zt9//33ZtGmT+j6i3ABfQhHldGJSW9euXWXhwoWquzXvbSopKZFEIqG6j6gXj7CinlAM6uvbt6/MmDFDbafmoeALL7wgv//+u9oetBSOsLQk5XCdw4cPl3HjxqntcPv27fLmm2+qrV9T4QhLU1qO1pqfny8jR45U2928efOkrKxMbf2aCkdYmtJytNbx48fLsGHDVHZ38uRJmTp1qsraNRaNsDSm5ljNkyZNkkGDBqns6quvvkq+74ojMwQQVmY4s0oDBDS/y33VqlWyY8cO8s0QAYSVIdAsc30Czz33nPTu3VslIlM7rw5mLjqElTnWrHQdAuZTGsynNWg7zNsZCgoK+CiYDAaHsDIIm6WuTWD+/PmSm5urDg9PuGc+MoSVeeaseAUBrV+ceujQISkuLibPDBLgXsIMwmapaxPQKqzS0lL1txRp25MIS1tiDtarVVg//vgj31Kd4f2IsDIMnOWuJqBVWOZjj1esWEGkGSSAsDIIm6Xcekj4zTffOPGxOJr2JcLSlJajtWq9wjKf1b5mzRpHU4lmWwgrmrnEqiqEFau402oWYaWFj5P9IICw/KAYjzkQVjxyjnSXCCvS8USqOIQVqTjiWQzCimfujekaYTWGGuf4SgBh+YrT6cm4NcfpeHU0h7B05BSFKhFWFFKIeQ0IK+YbwEP7CMsDLIYGQwBhBcPVxVkRloupKusJYSkLLMRyEVaI8Fm6jgDCYifYEkBYtqQYFxgBhBUYWucmRljORaqvIYSlL7OwKkZYYZFn3XoCCIvNYEsAYdmSYlxgBBBWYGidmxhhORepvoYQlr7MwqoYYYVFnnV5SMge8EyAewk9I+MEvwlwheU3UXfnQ1juZqumM4SlJqrQC0VYoUdAAQiLPWBLAGHZkmJcYAQQVmBonZsYYTkXqb6GEJa+zMKqGGGFRZ51eZWQPeCZAMLyjIwT/CbAFZbfRN2dD2G5m62azhCWmqhCLxRhhR4BBSAs9oAtAYRlS4pxgRFAWIGhdW5ibs1xLlJ9DSEsfZmFVTHCCot8htft1auXdOjQIcOr2i2Xl5cnrVu3thscoVFlZWWybdu2CFWUupRdu3ZJdXV16oERHYGwIhqM32VNmTJFBgwY4Pe0zKeMwPjx46WmpkZZ1f+Ui7DURuetcITljZeLoysrK+WZZ55R3RrCUh2fffEIy56VqyMPHjwoc+bMUd0ewlIdn33xCMuelasjd+7cKeZ/eM0HwtKcnofaEZYHWI4O3bBhg3z00Uequ0NYquOzLx5h2bNydeTq1avl66+/Vt0ewlIdn33xCMuelasjFy1aJPv27VPdHsJSHZ998QjLnpWrI6dPny7Hjx9X3R7CUh2fffEIy56ViyMvXbokBQUFcvHiRdXtcS+h6vjsi0dY9qxcHHnixAmZNm2a+tYQlvoI7RpAWHacXB1VWloqCxcuVN8ewlIfoV0DCMuOk6ujzKuD5lVC7QfC0p6gZf0IyxKUo8PM+6/M+7C0HwhLe4KW9SMsS1CODlu1apXs2LFDfXcIS32Edg0gLDtOro6aO3euHDhwQH17CEt9hHYNICw7Tq6Omjx5slRUVKhvD2Gpj9CuAYRlx8nFUefPnxfzOVjmvVjaD4SlPUHL+hGWJSgHh/3xxx9SVFTkRGcIy4kYUzeBsFIzcnXE3r17ZenSpU60x605TsSYugmElZqRqyM2b94s7777rhPtISwnYkzdBMJKzcjVEevXr5dPP/3UifYQlhMxpm4CYaVm5OqI119/XXbv3u1EewjLiRhTN4GwUjNydcTs2bPl8OHDTrSHsJyIMXUTCCs1I1dHTJw4Uc6ePetEewjLiRhTN4GwUjNycYT50tQJEyY40xrCcibKhhtBWDEJ+oo2jxw5IrNmzXKmeYTlTJQIKyZRempzz549snz5ck/nRHkwwopyOj7WxhWWjzAVTfXZZ5+JeXe4KwfCciXJFH0grJgEfUWb69atky+++MKZ5hGWM1HykDAmUXpqs6SkRH766SdP50R5MPcSRjkdH2vjCstHmIqmev755+XYsWOKKm64VITlTJRcYcUkSk9tmrc0mLc2uHIgLFeS5DmsmCRp3+bp06dl0qRJ9icoGImwFITkR4k8JPSDoq45Dh48KHPmzNFVdIpqEZZTcV6/GYQVk6D/1ebOnTvFvKrm0oGwXEqzgV4QVkyC/leb5mu9zNd7uXQgLJfSRFgxSdOuTfPFqeYLVF06EJZLaSKsmKRp1+aiRYtk3759doOVjEJYSoJKt0weEqZLUN/506dPl+PHj+srvIGKEZZTcfKke0ziTNmm+UqvgoICuXjxYsqxmgZwa46mtNKolSusNOApPPXEiRMybdo0hZU3XDLCci7SazeEsGIS9OU2S0tLZeHChc41jbCcixRhxSTSBts0rw6aVwldOxCWa4lepx+usGIS9OU2zfuvzPuwXDsQlmuJXqefBx54QHJyciLZbf/+/aVFixaRrK2hosxXwJuHXlE8tm/fLmVlZVEsLa2aEFZa+DjZDwJLliyRzp07+zFVRufYsmWLrFmzJqNrxn0xhBX3HRCB/hFWBEJQUgLCUhKUy2UiLJfT9bc3hOUvT2ZrBAGE1QhoMT0FYcU0+Ci1jbCilEa0a0FY0c4nFtUhrFjE7EuT3EvoC0YmSYcAwkqHXrzORVjxyjuS3SKsSMYSyaIQViRjiVdRCCteeafTLcJKhx7n+kIAYfmCMRaTIKxYxBztJhFWtPOJUnUIK0ppxLQWhBXT4BvRNsJqBDRO8ZcAwvKXp8uzISyX01XSG8JSElQEykRYEQgh7iUgrLjvAPv+EZY9K0YGRABhBQTWwWm5NcfBULW1hLC0JRZevQgrPPasfJkAwmIr2BJAWLakGBcYAYQVGFrnJkZYzkWqryGEpS+zsCpGWGGRZ916AgiLzWBLAGHZkmJcYAQQVmBonZsYYTkXqb6GEJa+zMKqGGGFRZ51eUjIHvBMAGF5RsYJfhPgCstvou7Oh7DczVZNZwhLTVShF4qwQo+AAhAWe8CWAPcS2pJiXGAEEFZgaJ2bGGE5F6m+hhCWvszCqhhhhUWedXmVkD3gmQDC8oyME/wmwBWW30TdnQ9huZutms4QlpqoQi8UYYUeAQUgLPaALQGEZUuKcYERQFiBoXVuYoTlXKT6GkJY+jILq2KEFRZ51uVVQvaAZwIIyzMyTvCbAFdYfhN1dz5uzXE3WzWdISw1UYVeKMIKPQIKQFjsAVsCCMuWFOMCI4CwAkPr3MQIy7lI9TWEsPRlFlbFCCss8qzLq4TsAc8EEJZnZJzgNwGusPwm6u58CMvdbNV0hrDURBV6oQgr9AgoAGGxB2wJICxbUowLjADCCgytcxMjLOci1dcQwtKXWVgVI6ywyLMurxKyBzwT4F5Cz8g4wW8CXGH5TdTd+RCWu9mq6QxhqYkq9EIRVugRUADCYg/YEkBYtqQYFxgBhBUYWucmRljORaqvIYSlL7OwKkZYYZFnXV4lZA94JoCwPCPjBL8JcIXlN1F350NY7marpjOEpSaq0AtFWKFHQAEIiz1gSwBh2ZJiXGAEEFZgaJ2bmFtznItUX0MIS19mYVWMsMIiz7q8Ssge8EwAYXlGxgl+E+AKy2+i7s6HsNzNVk1nCEtNVKEXirBCj4ACEBZ7wJYAwrIlxbjACCCswNA6NzHCci5SfQ0hLH2ZhVUxwgqLPOvyKiF7wDMBhOUZGSf4TYArLL+JujsfwnI3WzWdISw1UYVeKMIKPQIKQFjsAVsC3EtoS4pxgRFAWIGhdW5ihOVcpPoaQlj6MgurYoQVFnnW5VVC9oBnAgjLMzJO8JsAV1h+E3V3PoTlbrZqOkNYaqIKvVCEFXoEFICw2AO2BBCWLSnGBUYAYQWG1rmJEZZzkeprCGHpyyysihFWWORZl1cJ2QOeCSAsz8g4wW8CXGH5TdTd+bg1x91s1XSGsNREFXqhCCv0CCgAYbEHbAkgLFtSjAuMAMIKDK1zEyMs5yLV1xDC0pdZWBUjrLDIsy6vErIHPBNAWJ6RcYLfBLjC8puou/MhLHezVdMZwlITVeiFIqzQI6AAhMUesCWAsGxJMS4wAggrMLTOTYywnItUX0MIS19mYVWMsMIiz7q8Ssge8EyAewk9I+MEvwlwheU3UXfnQ1juZqumM4SlJqrQC0VYoUdAAQiLPWBLAGHZkmJcYAQQVmBonZsYYTkXqb6GEJa+zMKqGGGFRZ51eZWQPeCZAMLyjIwT/CbAFZbfRN2dD2G5m62azhCWmqhCL7ReWGPGjEkkEonQC6KA+BFAWPHLvDEdZ2VlyQcffCAdOnSQrIKCgkRtbW1j5uEcCKRFAGGlhS82Jzdt2lSWLVsm3bt3l6zCwsJEeXl5bJqn0egQQFjRySLKlbRt21bmz59fJ6wFCxYk9u/fH+V6qc1RAgjL0WB9bqtHjx5SWFhYJ6z33nsvsWnTJp+XYDoIpCaAsFIzYoTIiBEjZOTIkXXC2rNnT8I8PuSAQKYJIKxME9e5XlFRkeTk5NQJq7y8PFFcXCw8j6UzTM1VIyzN6WWm9nbt2sncuXPFvFKYFNapU6cSX375pXz88ceZqYBVIHCZAMJiK6QikJeXJ0OHDk0OqxeWeVvDnDlz5PTp06nO598h4BsBhOUbSicnys7OTnqpSZMm/xWW+W3Pnj3yzjvvONk4TUWTAMKKZi5RqWrChAnSp0+f+nLqr7D+/pt169bJ7t27o1IvdThOAGE5HnAa7Q0cOFDGjh37nxmuEtb58+dlxYoV8ssvv6SxFKdCwI4AwrLjFLdRXbp0kenTp9c/FPy7/6SwrryRsKqqSkpKSuTAgQNx40S/GSaAsDIMXMFyubm5MnPmTGnWrNlV1SbvJbzWnc/mSfi1a9fK9u3bFbRIiVoJICytyQVT94ABA2T06NFi3spwreO6wvp78K5du5J3SVdUVARTIbPGmgDCinX89c2bVwPN2xf+foLd/N4oYZmTampqZOPGjbJ161beXMr+8pUAwvIVp7rJzE3NQ4YMkUGDBv3n+aq0hGUomCss85lZv/76q5SWlsrhw4flzz//FPN8lxEaBwQaQwBhNYaaznPMR8Q0b95cOnbsKF27dpVevXol/2vewX7l0ZCw/g9ofqNKnO8yewAAAABJRU5ErkJggg=="/>
                                                </defs>
                                            </svg>
                                        </span>
                                    <a href="" class="source-link">
                                        смотреть
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="slider-nav-prev">
                <span class="slider-arrow">
                    <svg width="8" height="17" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 15.8652L1 8.87109L7 1.87695" stroke="#C2CECA" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </div>

            <div class="slider-nav-next">
                <span class="slider-arrow">
                    <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 12.1485L6 6.90288L1.5 1.65723" stroke="#C2CECA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>