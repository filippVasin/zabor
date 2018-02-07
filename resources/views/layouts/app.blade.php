<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Арт Забор</title>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|PT+Sans:400,400i,700,700i"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script type="text/javascript" src="{{asset('js/device.min.js')}}"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row header">
        <div class="container header--container">
            <nav class="navbar d-lg-flex flex-lg-row justify-content-lg-between align-items-lg-center expander">

                <button class="hamburger hamburger--slider navbar-toggler navbar-toggler-right hidden-lg-up"
                        type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>

                <a class="navbar-brand hidden-md-down" href="/"><img src="img/logo_header.png" width="100"
                                                                     alt="logo"></a>
                <div class="d-flex flex-column align-items-center">
                    <div class="header--title"><h1>Заборы «Под Ключ» <span>в Новосибирске и НСО</span></h1></div>
                    <div class="collapse d-lg-block navbar-collapse navbar--style" id="navbarSupportedContent">
                        <ul class="d-lg-flex justify-content-lg-between flex-lg-row list-style">
                            <li class="nav-item">
                                <a class="nav-link" href="#">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Заборы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Фотогалерея</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Отзывы</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-brand d-lg-flex flex-lg-column d-md-none header--contact">
                    <div class="d-flex align-items-center"><img src="img/svg/phone_blue.svg"
                                                                alt="svg"><span>{{ $main['company_phone'] }}</span></div>
                    <div><p class="m-0">2-ая Станционная 21 оф. 38</p></div>
                    <div><p class="m-0">8:00-20:00 ежедневно</p></div>
                    <div><a href="mailto:{{ $main['company_email'] }}">{{ $main['company_email'] }}</a></div>
                </div>

            </nav>
        </div>
    </div>

        @yield('content')
    <section class="row flex-column map">
        <div class="container">
            <div class="map--title">
                <h2>Как нас найти</h2>
            </div>
        </div>
        <div class="map--container" style="background:transparent;position:relative;">
            <div id="overflou" style="display:block;width:100%;height:100%;position:absolute;top:0;bottom:0;right:0;left:0;z-index:2000;"></div>
            <iframe  src="https://yandex.ru/map-widget/v1/?um=constructor%3A581ebc12997ece80d58df56d398029a23daaf753f5391e3218159ad62e7fbe0b&amp;source=constructor"
                     style="width:100%;height:100%;" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    </main>

    <footer class="row footer">
        <div class="container footer--container">

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <nav class="footer--navigation">
                        <ul class="d-flex justify-content-between flex-wrap">
                            <li><a href="">О нас</a></li>
                            <li><a href="">Заборы</a></li>
                            <li><a href="">Фотогалерея</a></li>
                            <li><a href="">Отзывы</a></li>
                        </ul>
                    </nav>
                </div>

            </div>

            <div class="row flex-lg-row flex-md-column">

                <div class="col-md-8 col-sm-12">
                    <div class="footer--text">
                        <p>Нам нравится строить заборы, нравится делать это качественно. За последние 3 года мы
                            значительно
                            увеличили разнообразие типов заборов и ограждений, используем современные технологии и
                            материалы. Мы активно привлекаем квалифицированных специалистов, для того чтобы клиент
                            оставался
                            доволен нашей работой!
                            <br/>
                            Политика нашей компании- низкие цены при достойном качестве.
                            <br/>
                            Выбирайте АртЗабор54 и на вашем участке воцарится уют и благополучие.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 footer--right-container">
                    <div class="d-flex align-items-center footer--telephone"><img src="img/svg/Shape_white.svg"
                                                                                  alt="svg"><span>{{ $main['company_phone'] }}</span></div>
                    <div class="footer--address"><p class="m-0">Россиия, г.Новосибирск</p></div>
                    <div class="footer--number"><p class="m-0">ул. 2-ая Станционная 21 оф 38</p></div>
                    <div class="footer--email"><span>e-mail:</span><a href="mailto:{{ $main['company_email'] }}">{{ $main['company_email'] }}</a>
                    </div>
                </div>

            </div>

            <div class="row flex-lg-row flex-md-column">

                <div class="col-md-8 col-sm-12">
                    <div class="footer--copyright">
                        <p>©АртЗабор54 2018</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 d-lg-block d-none footer--right-container">
                    <div class="footer--logo"><a href=""><img width="82" height="56" src="img/logo_Footer.png" alt="logo"></a></div>
                </div>

            </div>
        </div>
    </footer>

</div>
<script type="text/javascript" src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/hyphenation.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('js/validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>