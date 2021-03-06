<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ico.jpg" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/swiper.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <title style="display: none;">Warframe</title>
    <link rel="stylesheet" href="css/landing.css"/>
</head>
<body>
<div class="progressbar"></div>
<div class="scrollpath"></div>
<header>
    <div class="header-container">
        <div class="navLogo">
            <a href="/main"><img
                    src="../img/landing/navLogo.png" alt="navLogo"></a>
        </div>
        <div class="start" onclick="document.getElementById('start').click()" style="cursor: pointer;">
            <a href="#" id="start" onclick="document.querySelector('.register').style.display = 'block';"><p>Начните играть бесплатно</p></a>
        </div>
    </div>
</header>

<div class="register">
    <img src="img/register/close.png" alt="close" class="close"
         onclick="document.querySelector('.register').style.display = 'none';">

    <img src="img/register/logo-white.png" alt="logo" class="logo">

    <div class="ask">
        <div class="separator"></div>

        <div class="ask-question"><p>На чем вы будете играть?</p></div>

        <div class="separator"></div>
    </div>

    <div class="rplatform">
        <div class="platform-cards">
            <a href="#" onclick="document.querySelector('.reg').style.display='flex';">
                <div class="card" style="background: #323232; cursor: pointer;">
                    <img src="img/register/pc.png" alt="">
                    <p>PC</p>
                </div>
            </a>
            <a href="#">
                <div class="card" style="background: #293E73;">
                    <img src="img/register/ps.png" alt="">
                    <p>PLAYSTATION</p>
                </div>
            </a>

            <a href="#">
                <div class="card" style="background: #166327;">
                    <img src="img/register/xb.png" alt="">
                    <p>XBOX</p>
                </div>
            </a>
            <a href="#">
                <div class="card" style="background: #C90202;">
                    <img src="img/register/ns.png" alt="">
                    <p>NINTENDO SWITCH</p>
                </div>
            </a>

        </div>
    </div>

    <form class="reg" action="register/reguser" method="post">
        @csrf
        <img src="img/register/close.png" alt="close" class="close"
             onclick="document.querySelector('.reg').style.display='none';" style="cursor: pointer;">
        <input type="text" value="" placeholder="name" name="name">
        <input type="text" value="" placeholder="e-mail" name="login">
        <input type="password" value="" placeholder="пароль" name="pas1">
        <input type="password" value="" placeholder="подтвердите пароль" name="pas2">
        <button class="button" name="reg_user">
            <p>Зарегистрироваться</p>
        </button>
    </form>
</div>

<div class="login">
    <img src="../img/register/close.png" alt="close" class="close" id="close"
         onclick="document.querySelector('.login').style.display = 'none';">

    <img src="../img/login/logo.png" alt="" class="logol">

    <div class="content">
        <form class="ac" action="login/loginuser" method="post">
            @csrf
            <input type="text" value="" placeholder="e-mail" name="login">
            <input type="password" value="" placeholder="password" name="pas">
            <button class="button" name="login_user" type="submit">
                <p>Ввойти</p>
            </button>
        </form>

        <div class="dec">
            <div class="separator"></div>
            <div class="text"><p>Или</p></div>
            <div class="separator"></div>
        </div>

        <div class="platform">
            <div class="cards" style="background: #33258B;"><img src="img/login/ps.png" alt=""></div>
            <div class="cards" style="background: #1C5F26;"><img src="img/login/xb.png" alt=""></div>
            <div class="cards" style="background: #C70000;"><img src="img/login/ns.png" alt=""></div>
        </div>

        <div class="dec">
            <div class="separator"></div>
            <div class="text"><p>Войти</p></div>
            <div class="separator"></div>
        </div>
    </div>
    <div class="regl">
        <p>Еще нет аккаунта? <a href="#"
                                onclick="document.querySelector('.login').style.display = 'none'; document.querySelector('.register').style.display = 'block';">Создать</a>
        </p>
    </div>
</div>

<section class="screen1">
    <div class="screen1-content">
        <div class="logo">
            <img src="../img/landing/logo-white.png" alt="" class="pcLogo">
        </div>

        <div class="start-button" onclick="document.querySelector('.register').style.display = 'block';">
            <p style="font-weight: bold;">Начните играть бесплатно</p>
        </div>

        <div class="alredy-exist">
            <p>Уже есть аккаунт?<a href="#" onclick="document.querySelector('.login').style.display = 'block';"> Нажмите
                    тут</a></p>
        </div>

        <p style="font-weight: bold">Присоединяйтесь к более чем 50 млн игроков в этом стремительном шутере от третьего
            лица. Забирайте трофеи, вооружайтесь и проложите свой путь через просторы Изначальной Системы.</p>
    </div>
</section>

<section class="main-content">
    <div class="screen2">
        <div class="title">
            <hr>
            <div class="title-name">
                <p>Выберите свой варфрейм</p>
            </div>
        </div>

        <div class="text">
            <p>С набором Варфреймов, который можно настроить (каждый из которых имеет свои уникальные способности, такие
                как невидимость, телепортация или владение разумом), у вас есть возможность создать идеального варфрейма
                убийцы, защитника, помощника или невидимки.</p>
        </div>
        <div class="content">
            <div class="temp">
                <h3 class="slider-content-head"></h3>
                <p class="slider-content-paragraph"></p>
            </div>

            <section class="warframes">
                <div class="slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" id="1"><img src="../img/landing/baruuk.png" alt=""></div>
                            <div class="swiper-slide" id="2"><img src="../img/landing/misa.png" alt=""></div>
                            <div class="swiper-slide" id="3"><img src="../img/landing/octavia.png" alt=""></div>
                            <div class="swiper-slide" id="4"><img src="../img/landing/titanya.png" alt=""></div>
                            <div class="swiper-slide" id="5"><img src="../img/landing/volt.png" alt=""></div>
                            <div class="swiper-slide" id="6"><img src="../img/landing/hydroid.png" alt=""></div>
                            <div class="swiper-slide" id="7"><img src="../img/landing/limbo.png" alt=""></div>
                            <div class="swiper-slide" id="8"><img src="../img/landing/zephyr.png" alt=""></div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

    <div class="screen3">
        <div class="title">
            <div class="title-name">
                <p>Примите участие в боях</p>
            </div>
            <hr>
        </div>

        <div class="text">
            <p>Выполняйте плавные прыжки, скольжения и полеты, парящие над легионами гротескных клонов и
                капиталистических машин. Обнажите свой меч, держитесь в тени или направляйте себя в центр боя - выбор за
                вами.</p>
        </div>
        <div class="content"></div>
    </div>

    <div class="screen4">
        <div class="title">
            <hr>
            <div class="title-name">
                <p>Исследуйте открытые миры</p>
            </div>
        </div>

        <div class="text">
            <p>Хватайте ховерборд и отправляйтесь на склоны Долины. Рыбачьте в солнечных водах Равнин. Исследуйте
                скрытые пещеры и шахты и находите редкие минералы. Переживите этот опыт в открытых мирах Warframe.</p>
        </div>
    </div>

    <div class="screen5">
        <div class="title">
            <div class="title-name">
                <p>Соберите свой арсенал</p>
            </div>
            <hr>
        </div>

        <div class="text">
            <p>Никаны. Импульсные винтовки. Огнемёты. Собирайте и совершенствуйте сотни образцов уникального оружия,
                модифицируйте их беспредельные возможности.</p>
        </div>
    </div>

    <div class="screen6">
        <div class="title">
            <hr>
            <div class="title-name">
                <p>Играйте в команде</p>
            </div>
        </div>

        <div class="text">
            <p>Не обязательно играть в одиночку. Пригласите в команду трёх друзей и сражайтесь плечом к плечу с 50
                миллионами Тэнно на просторах Изначальной Системы.</p>
        </div>
    </div>

    <div class="footer">
        <div class="footer-content">
            <div class="imgfooter">
                <img src="../img/landing/foot1.png" alt="">
                <img src="../img/landing/foot2.png" alt="">
                <img src="../img/landing/foot3.png" alt="">
                <img src="../img/landing/foot4.png" alt="">
                <img src="../img/landing/foot5.png" alt="">
                <img src="../img/landing/foot6.png" alt="">
                <img src="../img/landing/foot7.png" alt="">
                <img src="../img/landing/foot8.png" alt="">
            </div>

            <div class="terms">
                <p>Интерактивное взаимодействие не классифицируется ESRB. ©2021 Digital Extremes Ltd. Все права
                    защищены. Warframe, эмблема Warframe и Evolution Engine являются зарегистрированными товарными
                    знаками Digital Extremes Ltd. “PlayStation Family Mark“, “PlayStation“, “Логотип PS5”, “PS5“,
                    “Логотип PS4”, “PS4“, “Логотип PlayStation Shapes” и “Play Has No Limits“ - зарегестрированные
                    товарные марки Sony Interactive Entertainment Inc. Nintendo Switch является торговой маркой
                    Nintendo.</p>
            </div>
        </div>

    </div>
</section>
<script src="../js/swiper.js"></script>
<script src="../js/landing.js"></script>
</body>
</html>
