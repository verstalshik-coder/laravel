<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ico.jpg" type="image/png">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
<section class="main">
    <a href="/main"><img src="img/register/close.png" class="close"/></a>

    <img src="img/login/logo.png" alt="" class="logo"/>

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
    <div class="reg">
        <p>Еще нет аккаунта? <a href="/register">Создать</a></p>
    </div>
</section>

<script scr="../js/login.js"></script>
</body>
</html>
