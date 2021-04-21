<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ico.jpg" type="image/png">
    <link rel="stylesheet" href="css/register.css">
    <title>Warframe</title>
</head>
<body>
<section class="content">
    <a href="/main"><img src="img/register/close.png" alt="close" class="close"></a>

    <img src="img/register/logo-white.png" alt="logo" class="logo">

    <div class="ask">
        <div class="separator"></div>

        <div class="ask-question"><p>На чем вы будете играть?</p></div>

        <div class="separator"></div>
    </div>

    <div class="platform">
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
</section>
</body>
</html>
