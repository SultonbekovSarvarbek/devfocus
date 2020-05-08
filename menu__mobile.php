<!-- Menu Side Button -->
<div class="menu__content" id="menu__content">
    <div class="menu__content-wrapper">
        <div class="menu__wrapper" id="menu__wrapper">
            <div class="menu">
            </div>
        </div>
        <div class="company__name">
            <h3>Verdict</h3>
        </div>
        <div class="social__icons">
            <ul>
                <li><a target="_blank" href="https://t.me/verdict_uz"><i class="fab fa-telegram"></i></a></li>
                <li><a target="_blank" href="https://www.facebook.com/verdictbureau/"><i
                            class="fab fa-facebook-square"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/verdict_uz/"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a target="_blank" href="mailto:verdict2284@gmail.com"><i class="far fa-envelope"></i></a></li>
            </ul>
        </div>
    </div>
    <span class="menu__side" id="menu__side">
        <div class="arrow__left">
            <span class="arrow arrow-left"></span>
        </div>
    </span>
</div>

<div class="menu__mobile" id="menu__mobile">
    <div class="menu__mobile-wrapper" id="menu__mobile-wrapper">
        <a class="close__mobile" id="close__mobile">
        </a>
        <div class="menu__mobile-logo">
            <a href="index.php">
                <img src="./img/logo.jpg" alt="">
            </a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="index.php"><?php echo $lang['Home'] ?></a></li>
                <li><a href="about.php"><?php echo $lang['About'] ?></a></li>
                <li><a href="trustus.php"><?php echo $lang['trustus'] ?></a></li>
                <li><a href="services.php"><?php echo $lang['Services'] ?></a></li>
                <li><a href="contacts.php"><?php echo $lang['Contacts'] ?></a></li>
                <li><a class="lang__link" href="#"><?php echo $lang['langu'] ?></a>
                    <ul class="lang__select">
                        <li>
                            <a href="./?lang=ru"><?php echo $lang['lang_ru'] ?>
                                <img style="width:20px; height:auto;margin-left: 8px;" src="./img/russia.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="./?lang=en"><?php echo $lang['lang_en'] ?>
                                <img style="width:20px; height:auto;margin-left: 10px;" src="./img/flag.svg" alt="">
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>