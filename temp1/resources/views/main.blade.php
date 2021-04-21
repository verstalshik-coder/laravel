@extends('mainlayout')

@section('style')
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css">
@endsection

@section('main-content')
    <section>
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-content">
                            <div class="content">
                                <h3 class="header"></h3>
                                <p class="paragraph"></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-content">
                            <div class="content">
                                <h3 class="header"></h3>
                                <p class="paragraph"></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-content">
                            <div class="content">
                                <h3 class="header"></h3>
                                <p class="paragraph"></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-content">
                            <div class="content">
                                <h3 class="header"></h3>
                                <p class="paragraph"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="js/main.slider.init.js"></script>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="news-box">
            <div class="platform-but">
                <div class="active" id="pc"><p>PC</p></div>
                <div class="" id="psn"><p>PSN</p></div>
                <div class="" id="xb"><p>XBOX</p></div>
                <div class="" id="ns"><p>NINTENDO </p></div>
            </div>

            <div class="fresh-news">
                <div class="new">
                    <img src="img/main/fresh1.png" alt="">
                    <div class="fresh-news-des">
                        <p class="head">Отпразднуйте год быка</p>
                        <p>Получите эксклюзивные награды до 5-го марта</p>
                        <a href="#"><p>Почитать подробнее</p></a>
                    </div>
                </div>

                <div class="new">
                    <img src="img/main/fresh1.png" alt="">
                    <div class="fresh-news-des">
                        <p class="head">Отпразднуйте год быка</p>
                        <p>Получите эксклюзивные награды до 5-го марта</p>
                        <a href="#"><p>Почитать подробнее</p></a>
                    </div>
                </div>

                <div class="new">
                    <img src="img/main/fresh1.png" alt="">
                    <div class="fresh-news-des">
                        <p class="head">Отпразднуйте год быка</p>
                        <p>Получите эксклюзивные награды до 5-го марта</p>
                        <a href=""><p>Почитать подробнее</p></a>
                    </div>
                </div>
            </div>

            <hr>
        {{--        <div class="articles">--}}
        {{--            <?php--}}

        {{--            while ($row = $result->fetch_assoc() and $i < $count): ?>--}}
        {{--            <div class="old-news">--}}
        {{--                <img src="<?=$row['imglink']?>" alt="">--}}
        {{--                <div>--}}
        {{--                    <p class="head"><?=$row['title']?></p>--}}
        {{--                    <p class="date"><?=$row['date']?></p>--}}
        {{--                    <hr>--}}
        {{--                    <p><?=$row['description']?></p>--}}
        {{--                    <a href="<?=$row['link']?>"><p>Почитать подробнее</p></a>--}}
        {{--                </div>--}}
        {{--            </div>--}}

        {{--        <?php $i=$i+1;endwhile;$count=$count+3;$i=0?>--}}

        @foreach($data as $el)
                <div class="old-news">
                    <img src="img/main/{{ $el->src }}" alt="">
                    <div>
                        <p class="head">{{ $el->title }}</p>
                        <p class="date">Написано на {{ $el->time }}</p>
                        <hr>
                        <p>{{ $el->desc }}</p>
                        <a href="{{ $el->link }}"><p>Почитать подробнее</p></a>
                    </div>
                </div>
        @endforeach
        <!-- <div class="old-news">
					<img src="img/main/old1.png" alt="">
					<div>
						<p class="head">ДОСТУП ОКТАВИЯ ПРАЙМ</p>
						<p class="date">Написано на 2021-02-23 14:10:00</p>
						<hr>
						<p>Исполните симфонию разрушения с Октавией Прайм!</p>
						<a href="#"><p>Почитать подробнее</p></a>
					</div>
				</div> -->


            <div class="load" onclick="">
                <p>Загрузить еще</p>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/swiper.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
@endsection
