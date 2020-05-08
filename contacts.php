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
</head>

<body>

    <div class="body__wrapper">
        <?php include 'header.php' ?>

        <div class="body__content">
            <div class="page__wrapper">
                <div class="container">
                    <div class="page__wrapper-content">
                        <div class="page__title">
                            <h1> <?php echo $lang['Contacts'] ?></h1>
                        </div>
                        <div class="bread__crumbs">
                            <div class="home__link">
                                <a href="index.php"> <?php echo $lang['Home'] ?></a>
                            </div>
                            <span class="line">

                            </span>
                            <div class="cur__link">
                                <span><?php echo $lang['Contacts'] ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main__contacts">
                <div class="container">
                    <div class="contacts__details">

                        <div class="contacts__item">
                            <div class="contatcs__icon">
                                <span><i class="far fa-envelope"></i></span>
                            </div>
                            <div class="contacts__info">
                                <a target="_blank" href="mailto:verdict2284@gmail.com">verdict2284@gmail.com</a>
                            </div>
                        </div>

                        <div class="contacts__item">
                            <div class="contatcs__icon">
                                <span><i class="fas fa-phone"></i></span>
                            </div>
                            <div class="contacts__info">
                                <a href="tel:+998977222327">+998 (97) 722-23-27</a>
                                <a href="tel:+998974441104">+998 (97) 444-11-04</a>
                                <a href="tel:+998974094243">+998 (97) 409-42-43</a>
                            </div>
                        </div>

                        <div class="contacts__item">
                            <div class="contatcs__icon">
                                <span><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <div class="contacts__info">
                                <a target="_blank"
                                    href="https://www.google.ru/maps/place/%D0%90%D0%9E+%C2%AB%D0%A3%D0%B7%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BC%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%B0%D0%BB%D1%8B%C2%BB/@41.2922481,69.2560384,18z/data=!3m1!4b1!4m5!3m4!1s0x38ae8aef45eb9cef:0x934ae6258083f148!8m2!3d41.2922461!4d69.2571354">

                                    <?php echo $lang['CONTACT']['LOCATION']['PLACE'] ?>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="wrap-contact100">
                <div class="container">
                    <div style="margin-bottom: 50px;">
                        <h1><?php echo $lang['CONTACT']['FEEDBACK']['TEXT'] ?></h1>
                    </div>
                    <form action="form_process.php" class="contact100-form validate-form flex-sb flex-w" method="POST">

                        <div class="wrap-input100 rs1 validate-input" data-validate="Name is required">
                            <input class="input100" type="text" name="name"
                                placeholder="<?php echo $lang['CONTACT']['FEEDBACK']['NAME'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="phone"
                                placeholder="<?php echo $lang['CONTACT']['FEEDBACK']['PHONE'] ?>">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Message is required">
                            <textarea class="input100" name="message"
                                placeholder="<?php echo $lang['CONTACT']['FEEDBACK']['MESSAGE'] ?>"></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                <?php echo $lang['CONTACT']['FEEDBACK']['SUBMIT'] ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="contacts__location">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1498.88187068604!2d69.25604105872196!3d41.2922461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8aef45eb9cef%3A0x934ae6258083f148!2z0JDQniDCq9Cj0LfRgdGC0YDQvtC50LzQsNGC0LXRgNC40LDQu9GLwrs!5e0!3m2!1sru!2s!4v1585568691174!5m2!1sru!2s"
                    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
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
    </div>


    <!-- Menu Mobile -->
    <?php include 'menu__mobile.php' ?>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/78e6c70a7f.js" crossorigin="anonymous"></script>

    <!-- Main js -->
    <script src="./js/main.js"></script>

</body>

</html>