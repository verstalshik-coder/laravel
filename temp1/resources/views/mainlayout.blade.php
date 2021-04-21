<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/ico.jpg" type="image/jpg">
    <link rel="stylesheet" href="css/layout.css">

    @yield('style')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <title>Warframe</title>
</head>
<body>
<header>
    <div class="left">
        <a href="/main"><img src="img/main/logo.png" alt="logo" class="logo" style="cursor: pointer;"></a>

        <div class="game menu" id='menu'>
            <p id="menu">игра</p>
            <img src="" class="bot-but" id='menu'>
            <div class="menu-list" style="left: 40px;">
                <a href="#">Сюжет</a>
                <a href="/dpage">Загрузить игру</a>
            </div>
        </div>

        <div class="news menu" id="menu">
            <p id="menu">новости</p>
            <img src="" alt="" class="bot-but" id="menu">
            <div class="menu-list" style="left: 180px;">
                <a href="/main">Новости PC</a>
                <a href="/main">Новости PSN</a>
                <a href="/main">Новости XBOX</a>
                <a href="/main">Новости NINTENDO</a>
            </div>
        </div>
    </div>

    <div class="right">
        @if(request()->cookie('name') === null)
            <div class="log" onclick="let a = document.createElement('a');
                a.href = 'http://127.0.0.1:8000/login'; a.click();">
                <p class="login" style="cursor: pointer;">войти</p>
                <img src="" alt="" class="bot-but"/>
            </div>
            <div class="play" onclick="let a = document.createElement('a');
                a.href = 'http://127.0.0.1:8000/register'; a.click();" style="cursor: pointer;">
                <p>играть</p>
            </div>
        @else
            <div class="log menu" id="menu">
                <p id="menu" class="login">{{ request()->cookie('name') }}</p>
                <img src="" alt="" class="bot-but" id="menu">
                <div class="menu-list" style="left: -10px;">
                    <a href="#">Настройки</a>
                    <a href="/userexit">Выйти</a>
                </div>
            </div>
            <div class="play" onclick="let a = document.createElement('a');
                a.href = 'http://127.0.0.1:8000/dpage'; a.click();" style="cursor: pointer;">
                <p>скачать</p>
            </div>
        @endif
    </div>
</header>

@yield('main-content')

<footer>
    <div class="soc-logo">
        <img src="img/main/vk.png" alt="">
        <img src="img/main/tw.png" alt="">
        <img src="img/main/yt.png" alt="">
        <img src="img/main/in.png" alt="">
        <img src="img/main/th.png" alt="">
        <img src="img/main/ds.png" alt="">
    </div>

    <div class="pl-logo">
        <img src="img/main/1.png" alt="">
        <img src="img/main/2.png" alt="">
        <img src="img/main/3.png" alt="">
        <img src="img/main/4.png" alt="">
        <img src="img/main/5.png" alt="">
        <img src="img/main/6.png" alt="">
        <img src="img/main/7.png" alt="">
        <img src="img/main/8.png" alt="">
        <img src="img/main/9.png" alt="">
        <img src="img/main/10.png" alt="">
    </div>

    <div class="terms">
        <p>Интерактивное взаимодействие не классифицируется ESRB.
            ©2021 Digital Extremes Ltd. Все права защищены.
            Warframe, эмблема Warframe и Evolution Engine являются зарегистрированными товарными знаками Digital
            Extremes Ltd.
            “PlayStation Family Mark“, “PlayStation“, “Логотип PS5”, “PS5“, “Логотип PS4”, “PS4“, “Логотип PlayStation
            Shapes” и “Play Has No Limits“ - зарегестрированные товарные марки Sony Interactive Entertainment Inc.
            Nintendo Switch является торговой маркой Nintendo.
        </p>
    </div>
</footer>
</body>
</html>
