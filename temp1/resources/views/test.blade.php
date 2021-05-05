<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/test.css">
    <title>Document</title>
</head>
<body>
<header>
    <p>Лабораторная работа по laravel №6</p>
</header>
<div class="content">
    <div class="nav">
        <h2>Список групп</h2>
        <hr>
        <ul>
            @php
                $i = 1;
            @endphp
            @foreach($groups as $el)
                @if($i++ == 1)
                    <li class="groups active" id="{{ $el->id }}">
                        <p>{{ $el->nam }}</p><br>
                        <p>Учеников : {{ $el->count }}</p>
                    </li>
                @else
                    <li class="groups" id="{{ $el->id }}">
                        <p>{{ $el->nam }}</p><br>
                        <p>Учеников : {{ $el->count }}</p>
                    </li>
                @endif
            @endforeach
        </ul>
        <div class="refresh">
            <a href="/test/tr">Перезаполнить</a>
        </div>
    </div>

    <div class="main">
        <h1 class="title"></h1>
        <p style="position: absolute;top: 10px; right: 10px; cursor: pointer;" class="delete">Удалить группу</p>
        <ul class="list" style="margin-top: 70px;">
            @php
                $i = 1;
            @endphp
            @foreach($stud as $el)
                <li class="te" id="{{ $el->grup_id }}">
                    <div>
                        <ul>
                            <li>Имя: {{$el->nam}}</li>
                            <li>Фамилия: {{$el->surname}}</li>
                            <li>Номер телефона: {{$el->phone}}</li>
                        </ul>
                    </div>
                    <div>
                        <a href="/test/user/{{ $el->id }}">Удалить студента</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<script type="text/javascript" src="js/test.js"></script>
</body>
</html>
