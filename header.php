<?php
    include "config.php";
?>
<header class="header">
    <div class="container">
        <div class="header__wrapper">

            <div class="header__logo">
                <a href="index.php">
                    <img src="./img/logo.jpg" alt="">
                </a>
            </div>
            <div class="header__logo_link">
                <ul>
                    <li><a class="nav-link" href="index.php"><?php echo $lang['Home'] ?></a></li>
                    <li><a class="nav-link" href="about.php"><?php echo $lang['About'] ?></a></li>


                    <li><a class="nav-link" href="trustus.php"><?php echo $lang['trustus'] ?></a></li>
                    <li><a class="nav-link" href="services.php"><?php echo $lang['Services'] ?></a></li>
                    <li class="text"><a class="nav-link" href="contacts.php"><?php echo $lang['Contacts'] ?></a></li>

                    <ul class="header__links">
                        <li><a target="_blank" href="https://t.me/verdict_uz"><i class="fab fa-telegram"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/verdictbureau/"><i
                                    class="fab fa-facebook-square"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/verdict_uz/"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                        <li><a target="_blank" href="mailto:verdict2284@gmail.com"><i class="far fa-envelope"></i></a>
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="header__multilanguage">
                <ul>
                    <li><a href="#"><?php echo $lang['langu'] ?></a>
                        <ul class="dropdown">
                            <li>
                                  <a  href="./?lang=ru"><?php echo $lang['lang_ru'] ?>
                                        <img style="margin-left: 10px" src="./img/russia.svg" alt="">
                                    </a>
                            </li>
                            <li>
                                <a  href="./?lang=en"><?php echo $lang['lang_en'] ?> <img style="margin-left: 10px" src="./img/flag.svg" alt="">
                                    </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>