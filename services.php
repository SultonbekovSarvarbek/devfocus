<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verdict</title>
    <!-- Normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300i,400,400i,500,500i,600,700&display=swap"
        rel="stylesheet">
    <!-- Swiper -->
    <link rel="stylesheet" href="css/swiper.css">
</head>

<body>

    <div class="body__wrapper">
        <div class="body__content">
            <?php include 'header.php' ?>

            <div class="page__wrapper">
                <div class="container">
                    <div class="page__wrapper-content">
                        <div class="page__title">
                            <h1><?php echo $lang['Services'] ?></h1>
                        </div>
                        <div class="bread__crumbs">
                            <div class="home__link">
                                <a href="index.php"><?php echo $lang['Home'] ?></a>
                            </div>
                            <span class="line">

                            </span>
                            <div class="cur__link">
                                <span><?php echo $lang['Services'] ?></span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="services__wrapper-bg">
                <div class="container">


                    <div class="swiper-container ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url(./img/img1.jpg); background-position: top center;
                            background-size: cover;
                            background-repeat: no-repeat; height:650px;">
                            </div>

                            <div class="swiper-slide" style="background-image:url(./img/img2.jpg); background-position: top center;
                            background-size: cover;
                            background-repeat: no-repeat; height:650px;">
                            </div>

                            <div class="swiper-slide" style="background-image:url(./img/img3.jpg); background-position: top center;
                            background-size: cover;
                            background-repeat: no-repeat; height:650px;">
                            </div>

                            <div class="swiper-slide" style="background-image:url(./img/services_img_04.jpeg); background-position: top center;
                            background-size: cover;
                            background-repeat: no-repeat; height:650px;">
                            </div>

                            <div class="swiper-slide" style="background-image:url(./img/services_img_05.jpeg); background-position: top center;
                            background-size: cover;
                            background-repeat: no-repeat; height:650px;">
                            </div>

                            <div class="swiper-slide" style="background-image:url(./img/services_img_06.jpeg); background-position: top center;
                            background-size: cover;
                            background-repeat: no-repeat; height:650px;">
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="services__block">
                        <div class="services__title">
                            <h2><?php echo $lang['SERVICES']['CONTENT']['TITLE1'] ?></h2>
                        </div>
                        <div class="services__content">
                            <p><?php echo $lang['SERVICES']['CONTENT']['TEXT1'] ?></p>
                        </div>
                    </div>


                    <div class="services__block">
                        <div class="services__block-item">
                            <h1><?php echo $lang['SERVICES']['CONTENT1']['TITLE2'] ?></h1>
                            <span>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8"
                                    enable-background="new 0 0 36.1 25.8" xml:space="preserve">
                                    <g>
                                        <line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10"
                                            x1="0" y1="12.9" x2="34" y2="12.9"></line>
                                        <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10"
                                            points="22.2,1.1 34,12.9 22.2,24.7   ">
                                        </polyline>
                                    </g>
                                </svg>
                            </span>
                            <p>
                                <?php echo $lang['SERVICES']['CONTENT1']['TEXT2'] ?>
                            </p>
                        </div>

                        <div class="services__block-item">
                            <h1> <?php echo $lang['SERVICES']['CONTENT2']['TITLE3'] ?></h1>
                            <span>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8"
                                    enable-background="new 0 0 36.1 25.8" xml:space="preserve">
                                    <g>
                                        <line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10"
                                            x1="0" y1="12.9" x2="34" y2="12.9"></line>
                                        <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10"
                                            points="22.2,1.1 34,12.9 22.2,24.7   ">
                                        </polyline>
                                    </g>
                                </svg>
                            </span>
                            <p>
                                <?php echo $lang['SERVICES']['CONTENT2']['TEXT3'] ?> </p>
                        </div>


                        <div class="services__block-item">
                            <h1> <?php echo $lang['SERVICES']['CONTENT3']['TITLE4'] ?></h1>
                            <span>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8"
                                    enable-background="new 0 0 36.1 25.8" xml:space="preserve">
                                    <g>
                                        <line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10"
                                            x1="0" y1="12.9" x2="34" y2="12.9"></line>
                                        <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10"
                                            points="22.2,1.1 34,12.9 22.2,24.7   ">
                                        </polyline>
                                    </g>
                                </svg>
                            </span>
                            <p>
                                <?php echo $lang['SERVICES']['CONTENT3']['TEXT4'] ?>
                            </p>
                        </div>


                        <div class="services__block">
                            <div class="services__title">
                                <h2><?php echo $lang['SERVICES']['CONTENT4']['TITLE5'] ?></h2>
                            </div>
                            <div class="services__content">
                                <h2><?php echo $lang['SERVICES']['CONTENT4']['TEXT5'] ?></h2>
                                <p>
                                    <?php echo $lang['SERVICES']['CONTENT4']['TEXT51'] ?>
                                </p>
                                <h3><?php echo $lang['SERVICES']['CONTENT4']['TEXT52'] ?>
                                </h3>
                                <ul>

                                    <li>
                                        <p>
                                            <?php echo $lang['SERVICES']['CONTENT4']['TEXT53'] ?>
                                        </p>

                                    </li>
                                    <li>
                                        <p> <?php echo $lang['SERVICES']['CONTENT4']['TEXT54'] ?></p>
                                    </li>
                                    <li>
                                        <p> <?php echo $lang['SERVICES']['CONTENT4']['TEXT55'] ?></p>
                                    </li>

                                </ul>
                            </div>
                        </div>



                        <div class="services__block">
                            <div class="services__title">
                                <h2> <?php echo $lang['SERVICES']['CONTENT5']['TITLE6'] ?></h2>
                            </div>
                            <div class="services__content">

                                <h3> <?php echo $lang['SERVICES']['CONTENT5']['TEXT6'] ?>

                                </h3>
                                <ul>
                                    <li>
                                        <p>
                                            <?php echo $lang['SERVICES']['CONTENT5']['TEXT61'] ?>
                                        </p>
                                    </li>

                                    <li>

                                        <p><?php echo $lang['SERVICES']['CONTENT5']['TEXT62'] ?></p>
                                    </li>

                                    <li>
                                        <p><?php echo $lang['SERVICES']['CONTENT5']['TEXT63'] ?></p>
                                    </li>

                                    <li>
                                        <p><?php echo $lang['SERVICES']['CONTENT5']['TEXT64'] ?></p>
                                    </li>

                                    <li>
                                        <p><?php echo $lang['SERVICES']['CONTENT5']['TEXT65'] ?></p>
                                    </li>
                                    <li>
                                        <p><?php echo $lang['SERVICES']['CONTENT5']['TEXT66'] ?></p>
                                    </li>
                                    <li>
                                        <p><?php echo $lang['SERVICES']['CONTENT5']['TEXT67'] ?></p>
                                    </li>
                                    <li>
                                        <p><?php echo $lang['SERVICES']['CONTENT5']['TEXT68'] ?></p>
                                    </li>
                                    <li>
                                        <p><?php echo $lang['SERVICES']['CONTENT5']['TEXT69'] ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>




                    <!-- Menu Mobile -->
                    <?php include 'menu__mobile.php' ?>
                    <!-- FontAwesome -->
                    <script src="https://kit.fontawesome.com/78e6c70a7f.js" crossorigin="anonymous"></script>
                    <script src="./js/swiper.js"></script>
                    <script>
                        var swiper = new Swiper('.swiper-container', {
                            slidesPerView: 1,
                            spaceBetween: 30,
                            keyboard: {
                                enabled: true,
                            },
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                        });
                    </script>

                    <!-- Main js -->
                    <script src="./js/main.js"></script>

</body>

</html>