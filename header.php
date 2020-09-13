<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Beauty cult</title>
    <?php wp_head(); ?>
</head>
<body class="main-page">
<header class="header">
    <div class="flex-container jc-space-between">
        <div class="header-logo">
            <a href="">
                <svg width="103" height="13" viewBox="0 0 103 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.859375 12V0.625H4.94531C6.40885 0.625 7.52083 0.893229 8.28125 1.42969C9.04688 1.96615 9.42969 2.74479 9.42969 3.76562C9.42969 4.35417 9.29427 4.85677 9.02344 5.27344C8.7526 5.6901 8.35417 5.9974 7.82812 6.19531C8.42188 6.35156 8.8776 6.64323 9.19531 7.07031C9.51302 7.4974 9.67188 8.01823 9.67188 8.63281C9.67188 9.7474 9.31771 10.5859 8.60938 11.1484C7.90625 11.7057 6.86198 11.9896 5.47656 12H0.859375ZM3.60156 7.16406V9.89062H5.39844C5.89323 9.89062 6.27344 9.77865 6.53906 9.55469C6.80469 9.32552 6.9375 9.00521 6.9375 8.59375C6.9375 7.64583 6.46615 7.16927 5.52344 7.16406H3.60156ZM3.60156 5.36719H5.03125C5.63021 5.36198 6.05729 5.2526 6.3125 5.03906C6.56771 4.82552 6.69531 4.51042 6.69531 4.09375C6.69531 3.61458 6.55729 3.27083 6.28125 3.0625C6.00521 2.84896 5.5599 2.74219 4.94531 2.74219H3.60156V5.36719ZM18.2422 7.17969H13.9297V9.89062H19.0234V12H11.1875V0.625H19.0391V2.74219H13.9297V5.14062H18.2422V7.17969ZM26.6016 9.875H22.8438L22.1875 12H19.2578L23.4297 0.625H26.0078L30.2109 12H27.2656L26.6016 9.875ZM23.5 7.75781H25.9453L24.7188 3.8125L23.5 7.75781ZM39.8281 0.625V8.07031C39.8281 8.91406 39.6484 9.64583 39.2891 10.2656C38.9297 10.8802 38.4141 11.349 37.7422 11.6719C37.0703 11.9948 36.276 12.1562 35.3594 12.1562C33.974 12.1562 32.8828 11.7969 32.0859 11.0781C31.2891 10.3594 30.8828 9.375 30.8672 8.125V0.625H33.625V8.17969C33.6562 9.42448 34.2344 10.0469 35.3594 10.0469C35.9271 10.0469 36.3568 9.89062 36.6484 9.57812C36.9401 9.26562 37.0859 8.75781 37.0859 8.05469V0.625H39.8281ZM50.4766 2.74219H47.0625V12H44.3203V2.74219H40.9688V0.625H50.4766V2.74219ZM55.9297 5.5625L58.0234 0.625H60.9844L57.3203 7.91406V12H54.5391V7.91406L50.8828 0.625H53.8281L55.9297 5.5625ZM75 8.14844C74.9635 8.9401 74.75 9.64062 74.3594 10.25C73.9688 10.8542 73.4193 11.3229 72.7109 11.6562C72.0078 11.9896 71.2031 12.1562 70.2969 12.1562C68.8021 12.1562 67.625 11.6693 66.7656 10.6953C65.9062 9.72135 65.4766 8.34635 65.4766 6.57031V6.00781C65.4766 4.89323 65.6693 3.91927 66.0547 3.08594C66.4453 2.2474 67.0052 1.60156 67.7344 1.14844C68.4635 0.690104 69.3073 0.460938 70.2656 0.460938C71.6458 0.460938 72.7552 0.825521 73.5938 1.55469C74.4323 2.27865 74.9089 3.27865 75.0234 4.55469H72.2891C72.2682 3.86198 72.0938 3.36458 71.7656 3.0625C71.4375 2.76042 70.9375 2.60938 70.2656 2.60938C69.5833 2.60938 69.0833 2.86458 68.7656 3.375C68.4479 3.88542 68.2812 4.70052 68.2656 5.82031V6.625C68.2656 7.83854 68.4167 8.70573 68.7188 9.22656C69.026 9.7474 69.5521 10.0078 70.2969 10.0078C70.9271 10.0078 71.4089 9.85938 71.7422 9.5625C72.0755 9.26562 72.2526 8.79427 72.2734 8.14844H75ZM85.2188 0.625V8.07031C85.2188 8.91406 85.0391 9.64583 84.6797 10.2656C84.3203 10.8802 83.8047 11.349 83.1328 11.6719C82.4609 11.9948 81.6667 12.1562 80.75 12.1562C79.3646 12.1562 78.2734 11.7969 77.4766 11.0781C76.6797 10.3594 76.2734 9.375 76.2578 8.125V0.625H79.0156V8.17969C79.0469 9.42448 79.625 10.0469 80.75 10.0469C81.3177 10.0469 81.7474 9.89062 82.0391 9.57812C82.3307 9.26562 82.4766 8.75781 82.4766 8.05469V0.625H85.2188ZM89.6797 9.89062H94.4531V12H86.9375V0.625H89.6797V9.89062ZM102.93 2.74219H99.5156V12H96.7734V2.74219H93.4219V0.625H102.93V2.74219Z" fill="white"/>
                </svg>
            </a>
        </div>

        <a href="#sectionFeedback"><button class="btn btn-primary btn-header show-desktop">Мені потрібна консультація</button></a>
        <button class="btn btn-primary btn-header show-mobile" id="btnMenuOpen">Всi курси</button>

        <div class="header__menu visually-hidden">
            <div class="menu-top flex-container jc-space-between">
                <div class="header-logo">
                    <a href="">
                        <svg width="103" height="13" viewBox="0 0 103 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.859375 12V0.625H4.94531C6.40885 0.625 7.52083 0.893229 8.28125 1.42969C9.04688 1.96615 9.42969 2.74479 9.42969 3.76562C9.42969 4.35417 9.29427 4.85677 9.02344 5.27344C8.7526 5.6901 8.35417 5.9974 7.82812 6.19531C8.42188 6.35156 8.8776 6.64323 9.19531 7.07031C9.51302 7.4974 9.67188 8.01823 9.67188 8.63281C9.67188 9.7474 9.31771 10.5859 8.60938 11.1484C7.90625 11.7057 6.86198 11.9896 5.47656 12H0.859375ZM3.60156 7.16406V9.89062H5.39844C5.89323 9.89062 6.27344 9.77865 6.53906 9.55469C6.80469 9.32552 6.9375 9.00521 6.9375 8.59375C6.9375 7.64583 6.46615 7.16927 5.52344 7.16406H3.60156ZM3.60156 5.36719H5.03125C5.63021 5.36198 6.05729 5.2526 6.3125 5.03906C6.56771 4.82552 6.69531 4.51042 6.69531 4.09375C6.69531 3.61458 6.55729 3.27083 6.28125 3.0625C6.00521 2.84896 5.5599 2.74219 4.94531 2.74219H3.60156V5.36719ZM18.2422 7.17969H13.9297V9.89062H19.0234V12H11.1875V0.625H19.0391V2.74219H13.9297V5.14062H18.2422V7.17969ZM26.6016 9.875H22.8438L22.1875 12H19.2578L23.4297 0.625H26.0078L30.2109 12H27.2656L26.6016 9.875ZM23.5 7.75781H25.9453L24.7188 3.8125L23.5 7.75781ZM39.8281 0.625V8.07031C39.8281 8.91406 39.6484 9.64583 39.2891 10.2656C38.9297 10.8802 38.4141 11.349 37.7422 11.6719C37.0703 11.9948 36.276 12.1562 35.3594 12.1562C33.974 12.1562 32.8828 11.7969 32.0859 11.0781C31.2891 10.3594 30.8828 9.375 30.8672 8.125V0.625H33.625V8.17969C33.6562 9.42448 34.2344 10.0469 35.3594 10.0469C35.9271 10.0469 36.3568 9.89062 36.6484 9.57812C36.9401 9.26562 37.0859 8.75781 37.0859 8.05469V0.625H39.8281ZM50.4766 2.74219H47.0625V12H44.3203V2.74219H40.9688V0.625H50.4766V2.74219ZM55.9297 5.5625L58.0234 0.625H60.9844L57.3203 7.91406V12H54.5391V7.91406L50.8828 0.625H53.8281L55.9297 5.5625ZM75 8.14844C74.9635 8.9401 74.75 9.64062 74.3594 10.25C73.9688 10.8542 73.4193 11.3229 72.7109 11.6562C72.0078 11.9896 71.2031 12.1562 70.2969 12.1562C68.8021 12.1562 67.625 11.6693 66.7656 10.6953C65.9062 9.72135 65.4766 8.34635 65.4766 6.57031V6.00781C65.4766 4.89323 65.6693 3.91927 66.0547 3.08594C66.4453 2.2474 67.0052 1.60156 67.7344 1.14844C68.4635 0.690104 69.3073 0.460938 70.2656 0.460938C71.6458 0.460938 72.7552 0.825521 73.5938 1.55469C74.4323 2.27865 74.9089 3.27865 75.0234 4.55469H72.2891C72.2682 3.86198 72.0938 3.36458 71.7656 3.0625C71.4375 2.76042 70.9375 2.60938 70.2656 2.60938C69.5833 2.60938 69.0833 2.86458 68.7656 3.375C68.4479 3.88542 68.2812 4.70052 68.2656 5.82031V6.625C68.2656 7.83854 68.4167 8.70573 68.7188 9.22656C69.026 9.7474 69.5521 10.0078 70.2969 10.0078C70.9271 10.0078 71.4089 9.85938 71.7422 9.5625C72.0755 9.26562 72.2526 8.79427 72.2734 8.14844H75ZM85.2188 0.625V8.07031C85.2188 8.91406 85.0391 9.64583 84.6797 10.2656C84.3203 10.8802 83.8047 11.349 83.1328 11.6719C82.4609 11.9948 81.6667 12.1562 80.75 12.1562C79.3646 12.1562 78.2734 11.7969 77.4766 11.0781C76.6797 10.3594 76.2734 9.375 76.2578 8.125V0.625H79.0156V8.17969C79.0469 9.42448 79.625 10.0469 80.75 10.0469C81.3177 10.0469 81.7474 9.89062 82.0391 9.57812C82.3307 9.26562 82.4766 8.75781 82.4766 8.05469V0.625H85.2188ZM89.6797 9.89062H94.4531V12H86.9375V0.625H89.6797V9.89062ZM102.93 2.74219H99.5156V12H96.7734V2.74219H93.4219V0.625H102.93V2.74219Z" fill="#000"/>
                        </svg>
                    </a>
                </div>

                <button class="btn btn-primary btn-close" id="btnMenuClose"><span class="btn-line"></span> <span class="btn-line btn-line--vertical"></span></button>
            </div>
            <div class="container">
                <div class="menu-content">
                    <div class="accordion">
                        <div class="item separator">
                            <div class="accordion__outer-list">
                                <h3 class="item__title">Парикмахерское искусство</h3>
                                <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                            </div>

                            <ul class="accordion__inner-list visually-hidden">
                                <li class="item">
                                    <a href="" class="item-link">Парикмахер стрижки</a>
                                    <span class="item-data">14.11 - 15.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Парикмахер модельер</a>
                                    <span class="item-data">20.11 - 26.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Барбер</a>
                                    <span class="item-data">10.12 - 15.12</span>
                                </li>
                            </ul>
                        </div>

                        <div class="item separator">
                            <div class="accordion__outer-list">
                                <h3 class="item__title">Парикмахерское искусство</h3>
                                <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                            </div>

                            <ul class="accordion__inner-list visually-hidden">
                                <li class="item">
                                    <a href="" class="item-link">Парикмахер стрижки</a>
                                    <span class="item-data">14.11 - 15.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Парикмахер модельер</a>
                                    <span class="item-data">20.11 - 26.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Барбер</a>
                                    <span class="item-data">10.12 - 15.12</span>
                                </li>
                            </ul>
                        </div>

                        <div class="item separator">
                            <div class="accordion__outer-list">
                                <h3 class="item__title">Парикмахерское искусство</h3>
                                <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                            </div>


                            <ul class="accordion__inner-list visually-hidden">
                                <li class="item">
                                    <a href="" class="item-link">Парикмахер стрижки</a>
                                    <span class="item-data">14.11 - 15.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Парикмахер модельер</a>
                                    <span class="item-data">20.11 - 26.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Барбер</a>
                                    <span class="item-data">10.12 - 15.12</span>
                                </li>
                            </ul>
                        </div>

                        <div class="item separator">
                            <div class="accordion__outer-list">
                                <h3 class="item__title">Парикмахерское искусство</h3>
                                <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                            </div>

                            <ul class="accordion__inner-list visually-hidden">
                                <li class="item">
                                    <a href="" class="item-link">Парикмахер стрижки</a>
                                    <span class="item-data">14.11 - 15.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Парикмахер модельер</a>
                                    <span class="item-data">20.11 - 26.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Барбер</a>
                                    <span class="item-data">10.12 - 15.12</span>
                                </li>
                            </ul>
                        </div>

                        <div class="item separator">
                            <div class="accordion__outer-list">
                                <h3 class="item__title">Парикмахерское искусство</h3>
                                <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                            </div>

                            <ul class="accordion__inner-list visually-hidden">
                                <li class="item">
                                    <a href="" class="item-link">Парикмахер стрижки</a>
                                    <span class="item-data">14.11 - 15.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Парикмахер модельер</a>
                                    <span class="item-data">20.11 - 26.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Барбер</a>
                                    <span class="item-data">10.12 - 15.12</span>
                                </li>
                            </ul>
                        </div>

                        <div class="item separator">
                            <div class="accordion__outer-list">
                                <h3 class="item__title">Парикмахерское искусство</h3>
                                <button class="btn btn-circle btn-accordion"><span class="btn-line"></span><span class="btn-line btn-line--vertical"></span></button>
                            </div>


                            <ul class="accordion__inner-list visually-hidden">
                                <li class="item">
                                    <a href="" class="item-link">Парикмахер стрижки</a>
                                    <span class="item-data">14.11 - 15.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Парикмахер модельер</a>
                                    <span class="item-data">20.11 - 26.11</span>
                                </li>

                                <li class="item">
                                    <a href="" class="item-link">Барбер</a>
                                    <span class="item-data">10.12 - 15.12</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
