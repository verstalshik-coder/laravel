@extends('mainlayout')

@section('style')
    <link rel="stylesheet" href="css/download.css">
@endsection

@section('main-content')
    <div class="progressbar"></div>
    <div class="scrollpath"></div>

    <section class="main-content">
        <div class="download">
            <div class="head">ЗАГРУЗИТЬ</div>
            <a href="download/Warframe.msi"><div class="btn">Начать загрузку</div></a>
            <p style="border-top: 2px solid white;border-bottom: 2px solid white;width: 60%;margin: 0 auto;padding: 15px;">Системные требования</p>
            <div class="scrollable">
                <p style="padding-top: 40px;">ОС: Windows 7 64-Бит (32-разрядная не поддерживается)</p>
                <p>Процессор: Intel Core 2 Duo e6400 или AMD Athlon x64 4000+ (~2.2 Гигагерц двухъядерный процессор)</p>
                <p>Видео: DirectX 11+ совместимая Графическая Карта</p>
                <p>Оперативная память: 4 Гигабайт RAM</p>
                <p>Жесткий диск: 50 Гигабайт доступного пространства HD</p>
                <p style="padding-bottom: 40px;">Интернет: Широкополосное Подключение к Интернету</p>
            </div>
        </div>
    </section>

    <script src="js/download.js"></script>
@endsection
