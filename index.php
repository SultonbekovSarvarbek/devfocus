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

        <?php include "header.php" ?>

        <div class="body__content">

            <!-- Swiper -->
            <div class="swiper-container">
                <div class="main__bg-content">
                    <div class="container">

                        <h1>Verdict</h1>
                        <p><?php echo $lang['home_title'] ?></p>
                        <p><?php echo $lang['home_text'] ?></p>
                    </div>
                </div>
                <div class="swiper-wrapper">

                    <div class="swiper-slide " style="background-position: top center;
  background-size: cover;
  background-repeat: no-repeat; background-image:url(img/main__bg.jpg )">



                    </div>
                    <div class="swiper-slide" style="background-position: top center;
  background-size: cover;
  background-repeat: no-repeat; background-image:url(img/img_slider2.jpg)">

                    </div>

                    <div class="swiper-slide" style="background-position: top center;
  background-size: cover;
  background-repeat: no-repeat; background-image:url(img/img_slider3.jpg)">

                    </div>


                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!-- <div class="main__bg">
                <div class="container">
                    <div class="main__bg-content">
                        <h1>Verdict</h1>
                        <p>Адвокатское бюро «VERDICT» с 2017 года осуществляет </p>
                        <p>свою деятельность на рынке оказания юридических услуг.</p>
                    </div>
                </div>
            </div> -->
            <div class="main">
                <h1 class="main__title"><?php echo $lang['Services'] ?></h1>
                <div class="container">
                    <div class="main__content">
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img6.jpg" alt="">

                            </div>
                            <div class="item__card-text">
                                <h3> <?php echo $lang['s1'] ?></h3>
                            </div>
                        </div>
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img7.jpg" alt="">

                            </div>
                            <div class="item__card-text">

                                <h3> <?php echo $lang['s2'] ?></h3>
                            </div>
                        </div>
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img8.jpg" alt="">

                            </div>
                            <div class="item__card-text">
                                <h3> <?php echo $lang['s3'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="main__content">
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img9.jpg" alt="">

                            </div>
                            <div class="item__card-text">
                                <h3><?php echo $lang['s4'] ?></h3>
                            </div>
                        </div>
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img10.webp" alt="">

                            </div>
                            <div class="item__card-text">

                                <h3><?php echo $lang['s5'] ?></h3>
                            </div>
                        </div>
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img11.jpg" alt="">

                            </div>
                            <div class="item__card-text">
                                <h3> <?php echo $lang['s6'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="main__content">
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img12.jpg" alt="">

                            </div>
                            <div class="item__card-text">
                                <h3> <?php echo $lang['s7'] ?></h3>
                            </div>
                        </div>
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img15.jpg" alt="">

                            </div>
                            <div class="item__card-text">

                                <h3><?php echo $lang['s8'] ?></h3>
                            </div>
                        </div>
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img14.jpg" alt="">

                            </div>
                            <div class="item__card-text">
                                <h3> <?php echo $lang['s9'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="main__content">
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img23.jpeg" alt="">

                            </div>
                            <div class="item__card-text">
                                <h3><?php echo $lang['s4'] ?></h3>
                            </div>
                        </div>
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img20.jpeg" alt="">

                            </div>
                            <div class="item__card-text">

                                <h3><?php echo $lang['s11'] ?></h3>
                            </div>
                        </div>
                        <div class="services__item-card">
                            <div class="item__card-img">
                                <img class="item__card_img" src="./img/img21.jpeg" alt="">

                            </div>
                            <div class="item__card-text">
                                <h3> <?php echo $lang['s12'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <!-- Menu Mobile -->
    <?php include 'menu__mobile.php' ?>


    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/78e6c70a7f.js" crossorigin="anonymous"></script>
    <!-- Swiper js -->
    <script src="./js/swiper.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            clickable: false,
            loop: true,
            parallax: true,
            allowTouchMove: false,
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                loop: true,
                delay: 1500,
            },
            effect: "fade",
        });
    </script>
    <!-- Main js -->
    <!--     <script src="./js/i18nextify.min.js"></script>
    <script src="./js/i18nextify.js"></script> -->

    <script src="./js/main.js"></script>

</body>

</html>