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

    <!-- <div class="body__wrapper"> -->
    <div class="body__content">
        <div class="page__wrapper">
            <?php include "header.php" ?>

            <div class="container">
                <div class="page__wrapper-content">
                    <div class="page__title">
                        <h1><?php echo $lang['About'] ?></h1>
                    </div>
                    <div class="bread__crumbs">
                        <div class="home__link">
                            <a href="index.php"><?php echo $lang['Home'] ?></a>
                        </div>
                        <span class="line">
                        </span>
                        <div class="cur__link">
                            <span><?php echo $lang['About'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="aboutus__wrapper">

            <div class="aboutus__item-wrapper">

                <div class="about__item">

                    <div class="about__item-br">

                        <div class="about__title">
                            <h2><?php echo $lang['About'] ?></h2>

                        </div>

                        <div class="about__content">
                            <p>
                                <?php echo $lang['about__title'] ?>
                               
                            </p>
                            <p class='page_title'>
                                <?php echo $lang['about__text'] ?>
                              
                            </p>
                        </div>

                    </div>

                </div>

                <div class="about__item-img">
                </div>

            </div>

        </div>

        <footer class="footer">
            <div class="container">
                <div class="footer__content">
                    <a target="_blank" href="https://alpha-web.uz/">
                        Разработка сайтов alpha-web.uz
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <!-- </div> -->


    <!-- Menu Mobile -->
    <?php include 'menu__mobile.php' ?>


    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/78e6c70a7f.js" crossorigin="anonymous"></script>
    <!-- Swiper js -->
    <script src="./js/swiper.js"></script>
    <!-- Main js -->
    <script src="https://unpkg.com/i18next/dist/esm/i18next.js"></script>
   

    <script src="./js/i18nextify.min.js"></script>
    <script src="./js/i18nextify.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>