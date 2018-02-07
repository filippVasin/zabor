@extends('layouts.app')

@section('content')

    <main class="main-page--main">
        <section class="fw-main-row fw-row d-flex flex-column justify-content-between img-style main-page--top"
                 style="background: url('img/content/main/{{ $main['banner'] }}') no-repeat center left;">
            <h2>
              <?php
                $str = str_replace('spanyellow','<span class="color-text">',$main['offer']);
                $str = str_replace('nospan','</span>',$str);
                $str = str_replace('sspan','<span>',$str);
                echo $str;
                ?>
            </h2>

            <div class="container">
                <div class="form--wrapper">
                    <h3>Заказать бесплатный замер вашего забора</h3>
                    {{--<form id="" class="form--container form--header d-lg-flex justify-content-lg-between" action="">--}}
                        {{--<div class="form-group">--}}
                            {{--<input class="form-control" type="text" name="name" id="" placeholder="Имя">--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<input class="form-control tel" type="text" name="telephone" id=""--}}
                                   {{--placeholder="+7(...)...-..-..">--}}
                        {{--</div>--}}
                        {{--<button type="submit" class="btn form--btn-style">Заказать</button>--}}
                    {{--</form>--}}
                    {!! Form::open(['url' => 'lead/create', 'name' => 'form1' ,'class' => 'form--container form--features d-lg-flex justify-content-lg-between']) !!}

                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Имя" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <input class="form-control tel" type="text" name="phone"  placeholder="+7(...)...-..-.." value="{{old('phone')}}">
                    </div>
                    <button type="submit" name="form1" class="btn form--btn-style features--form--btn">Обратный звонок </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </section>

        <section class="container-fluid price">
            <div class="container">
                <div class="row">
                    <div class="price--title w-100">
                        <h2 class="title">Наши Заборы «Под Ключ»</h2>
                    </div>
                </div>
                <div class="row row-flex row-flex-wrap price--container">
                    @if($categories)
                        @foreach($categories as $category)
                            <div class="col-md-4 col-sm-12">
                                <div class="d-flex flex-column justify-content-between price--block">
                                    <div class="d-flex flex-column justify-content-center price--img"><img
                                                width="330" height="235"
                                                src="img/content/category_ava/{{ $category['avatar']}}"
                                                alt="img"></div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h4 class="price--subtitle">{{ $category['name']}}</h4>
                                        <p class="price--text">
                                            @if($category['price'] != 0)
                                                от <b>{{ $category['price']}}</b> руб/м.п
                                            @endif
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a class="price--btn" href="category?id={{ $category['id']}}">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="row features">
            <div class="container">
                <div class="row">
                    <div class="features--title w-100">
                        <h2>Почему вы выбираете нас?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-sm-12">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center features--img"><img src="img/svg/zamer.svg"
                                                                                          alt="svg"></div>
                            <div class="features--text">
                                <p class="text-center">Бесплатный выезд на замер в течении 24 часов</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center features--img"><img src="img/svg/ownbusiness.svg"
                                                                                          alt="svg"></div>
                            <div class="features--text">
                                <p class="text-center">Собственное производство</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center features--img"><img src="img/svg/office.svg"
                                                                                          alt="svg"></div>
                            <div class="features--text">
                                <p class="text-center">Мобильный офис</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center features--img"><img src="img/svg/workers.svg"
                                                                                          alt="svg"></div>
                            <div class="features--text">
                                <p class="text-center">Опытные работники</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center features--img"><img src="img/svg/garantee.svg"
                                                                                          alt="svg"></div>
                            <div class="features--text">
                                <p class="text-center">Гарантия 1 год на все виды услуг</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center features--img"><img src="img/svg/moneygod.svg"
                                                                                          alt="svg"></div>
                            <div class="features--text">
                                <p class="text-center">Цены ниже чем у конкурентов в 93% случаев</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="form--wrapper form-blue w-100 features--form">--}}
                        {{--<h3 class="text-uppercase">Получить бесплатную консультацию</h3>--}}
                        {{--{!! Form::open([ 'route' => 'create2','name' => 'form2', 'class' => 'form--container form--features d-lg-flex justify-content-lg-between']) !!}--}}

                        {{--<div class="form-group">--}}
                            {{--<input class="form-control" type="text" name="name2" placeholder="Имя" value="{{old('name2')}}">--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<input class="form-control tel" type="text" name="phone2"  placeholder="+7(...)...-..-.." value="{{old('phone2')}}">--}}
                        {{--</div>--}}
                        {{--<button type="submit" name="form2" class="btn form--btn-style features--form--btn">Обратный звонок </button>--}}
                        {{--{!! Form::close() !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </section>

        <section class="container-fluid work">
            <div class="container">
                <div class="row">
                    <div class="work--title w-100">
                        <h2>Фото наших работ</h2>
                    </div>
                </div>
                <div class="work-slick">
                    <div class="work-slick-block">
                        @if($photos)
                            @foreach($photos as $key=>$photo)
                                @if($key % 3 == 0 && $key !=0 )
                                    </div>
                                    <div class="work-slick-block">
                                @endif
                                <div class="work-slick-img d-flex justify-content-center"><img src="img/content/{{ $photo['path']}}"
                                                                                               alt="img"></div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="row justify-content-center work-slick-container-btn">
                    <div class="work-slick-btn d-flex align-items-center">
                        <div class="work-slick-text">еще</div>
                    </div>
                </div>
            </div>
        </section>

        @if($main['video'] != '')
        <section class="row video">
            <div class="container">
                <div class="row">
                    <div class="video--title w-100">
                        <h2>{{ $main['video_title'] }}</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <iframe width="860" height="480" src="https://www.youtube.com/embed/{{ $main['video'] }}" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        @endif
        <section class="row img-style fact"
                 style="background: url('img/img_blok_zamer_757px.jpg') no-repeat center left;">
            <div class="container d-lg-flex flex-lg-column justify-content-lg-between">
                <div class="row">
                    <div class="fact--title w-100">
                        <h2>5 простых этапов от заказа до забора</h2>
                    </div>
                </div>
                <div class="row justify-content-md-between">
                    <div class="col-lg-2 col-sm-12">
                        <div class="fact--img"><img src="img/svg/icon_phone.svg" alt="svg"></div>
                        <div class="fact--subtitle">
                            <h3>ВЫ ОСТАВЛЯЕТЕ ЗАЯВКУ</h3>
                        </div>
                        <div class="fact--text">
                            <p>Вы оставляете заявку на интересующие вас услуги через наш сайт, или оставляете заявку по
                                телефону.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="fact--img"><img src="img/svg/icon_2.svg" alt="svg"></div>
                        <div class="fact--subtitle">
                            <h3>МЫ ВЫПОЛНЯЕМ ЗАМЕР</h3>
                        </div>
                        <div class="fact--text">
                            <p>Наш инженер приедет к Вам и выполнит замеры. Если вы самостоятельно выполнили замер, то
                                просто сообщаете параметры участка нашему менеджеру .</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="fact--img"><img src="img/svg/icon_3.svg" alt="svg"></div>
                        <div class="fact--subtitle">
                            <h3>СЧИТАЕМ СМЕТУ</h3>
                        </div>
                        <div class="fact--text">
                            <p>Мы в минимальные сроки готовим для Вас несколько вариантов расчета сметы, чтобы
                                максимально подстроиться под ваш бюджет.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="fact--img"><img src="img/svg/icon_4.svg" alt="svg"></div>
                        <div class="fact--subtitle">
                            <h3>ЗАКЛЮЧАЕМ ДОГОВОР</h3>
                        </div>
                        <div class="fact--text">
                            <p>Мы с вами заключаем договор на оказание строительных услуг, в котором прописываем наши
                                обязанности и ваши гарантии.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <div class="fact--img"><img src="img/svg/icon_5.svg" alt="svg"></div>
                        <div class="fact--subtitle">
                            <h3>ВЫПОЛНЯЕМ МОНТАЖ</h3>
                        </div>
                        <div class="fact--text">
                            <p>Наши специалисты приезжают к вам в максимально короткие сроки, и выполняют все
                                строительно-монтажные работы под ключ!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="fact--link w-100"><a class="" href="">Вызвать замерщика</a></div>
                </div>
            </div>
        </section>

        <section class="row flex-column customers">
            <div class="container">
                <div class="row">
                    <div class="w-100 customers--title">
                        <h2>Отзывы наших клиентов</h2>
                    </div>
                </div>

                <div class="customers-slick">
                    @if($reviews)
                        @foreach($reviews as $review)
                            <div class="d-flex flex-column customers-slick-block">
                                <div class="customers-slick-photo"><img width="97" height="97" src="img/content/category_ava/{{ $review['avatar']}}"
                                                                        alt="photo"></div>
                                <div class="customers-slick-name">
                                    <p>{{ $review['name']}}</p>
                                </div>
                                <div class="customers-slick-firm">
                                    <p>{{ $review['position']}}</p>
                                </div>
                                <div class="customers-slick-text">
                                    <p>‘’{{ $review['text']}}’’</p>
                                </div>
                                <div class="d-flex align-items-end justify-content-end customers-slick-social"><a href=""><img width="37" height="21"
                                                                                                                               src="img/svg/{{ $review['social_icon']}}" alt="svg"></a>
                                </div>
                            </div>

                        @endforeach
                    @endif
                </div>
                <div class="row justify-content-center customers-slick-container-btn">
                    <div class="customers-slick-btn d-flex align-items-center"></div>
                </div>
            </div>
        </section>

@endsection()