@extends('layouts.app')

@section('content')

    <main class="price-page--main">

        <section class="price-page--slick">

            <div class="container">
                <div class="row">
                    <div class="w-100 text-color-title main-section-title">
                        <h2>{{ $category['page_title']}}</h2>
                    </div>
                </div>

                <div class="row">

                    <div class="price-page--slick-wrapper">
                    @if($photos)

                        <div class="price-page--slick-show">
                            @foreach($photos as $photo)
                                <div class="price-page--slick-img"><img src="img/content/{{ $photo['path'] }}" alt="img"></div>
                            @endforeach
                        </div>

                        <div class="price-page--slick-pagination">
                            @foreach($photos as $photo)
                                <div class="price-page--slick-pagination_style-border"><img src="img/content//{{ $photo['path'] }}" alt="img"></div>
                            @endforeach
                        </div>
                    @endif
                    </div>

                </div>

            </div>

        </section>

                {{--вывод таблицы --}}
                @include('table.'.$category_id)

        <section class="price-page--color-container">
            <div class="container">
                <div class="row">
                    <div class="w-100 text-color-title main-section-title">
                        <h2>Возможные цвета</h2>
                    </div>
                </div>

                <div class="row justify-content-between price-page--color-table-row">
                    @if($colors)
                        @foreach($colors as $key=>$color)
                            @if($key % 8 == 0 && $key !=0 )
                                </div>
                                <div class="row justify-content-between price-page--color-table-row">
                            @endif

                            <div class="price-page--color-col">
                                <div class="price-page--color-row-title" style="background: url('img/content/color/{{ $color['img'] }}')  center left;"></div>
                                <div class="d-flex justify-content-center align-items-center text-blue price-page--color-row-art">Арт. {{ $color['code'] }}</div>
                                <div class="d-flex justify-content-center align-items-center text-blue font-weight-bold price-page--color-row-color">{{ $color['name'] }}</div>
                            </div>
                        @endforeach
                    @endif




                </div>

            </div>
        </section>

        <section class="row price-page--action-container">
            <div class="container">
                <div class="row">
                    <div class="w-100 text-red main-section-title">
                        <h2>Акции!</h2>
                    </div>
                </div>
                <div class="row flex-nowrap justify-content-between price-page--action-row-wrapper">
                    <div class="price-page--action-table-wrapper">
                        @if($sales)
                            @foreach($sales as $key=>$sale)
                                @if($key % 2 == 0 && $key !=0 )
                                    </div>
                                    <div class="price-page--action-table-wrapper">
                                @endif

                                <div class="d-flex flex-column price-page--action-block">
                                    <div class="w-100 text-center price-page--action-date">до <?php
                                        $arr = [
                                                'января',
                                                'февраля',
                                                'марта',
                                                'апреля',
                                                'мая',
                                                'июня',
                                                'июля',
                                                'августа',
                                                'сентября',
                                                'октября',
                                                'ноября',
                                                'декабря'
                                        ];

                                        $month = date('n',strtotime($sale['date']))-1;
                                        echo date('d').' '.$arr[$month].' '.date('Y');
                                        ?>  <br /><b>{{ $sale['title'] }}</b></div>
                                    <div class="price-page--action-wrapper">
                                        <div class="d-flex justify-content-center price-page--action-img"><img src="img/content/sale/<?php if($sale['img'] !=''){echo $sale['img'];} else { echo 'action3.png';} ?>" alt="img"></div>
                                        <div class="text-center price-page--action-num">{{ $sale['description'] }} <b>{{ $sale['where'] }}</b></div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>


                {{--/----------------------------------------------------------------------------------------------}}
                <div class="row flex-nowrap justify-content-between price-page--action-row-wrapper">
                    <div class="price-page--action-table-wrapper">
                        @if($sales)
                            @foreach($sales as $key=>$sale)
                                @if($key % 2 == 0 && $key !=0 )
                    </div>
                    <div class="price-page--action-table-wrapper">
                        @endif

                        <div class="d-flex flex-column price-page--action-block">
                            <div class="w-100 text-center price-page--action-date">до <?php
                                $arr = [
                                    'января',
                                    'февраля',
                                    'марта',
                                    'апреля',
                                    'мая',
                                    'июня',
                                    'июля',
                                    'августа',
                                    'сентября',
                                    'октября',
                                    'ноября',
                                    'декабря'
                                ];

                                $month = date('n',strtotime($sale['date']))-1;
                                echo date('d').' '.$arr[$month].' '.date('Y');
                                ?>  <br /><b>{{ $sale['title'] }}</b></div>
                            <div class="price-page--action-wrapper">
                                <div class="d-flex justify-content-center price-page--action-img"><img src="img/content/sale/<?php if($sale['img'] !=''){echo $sale['img'];} else { echo 'action3.png';} ?>" alt="img"></div>
                                <div class="text-center price-page--action-num">{{ $sale['description'] }} <b>{{ $sale['where'] }}</b></div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                {{--/-----------------------------------------------------------------------------------}}


            </div>
        </section>

        <section class="price-page--form">
            <div class="container">
                <div class="row">
                    <div class="form--wrapper form-blue w-100">
                        <h3 class="text-uppercase">Получить бесплатную консультацию</h3>

                        {!! Form::open(['url' => 'lead/create', 'class' => 'form--container form--features d-lg-flex justify-content-lg-between']) !!}

                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Имя" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <input class="form-control tel" type="text" name="phone"  placeholder="+7(...)...-..-.." value="{{old('phone')}}">
                            </div>
                            <button type="submit" class="btn form--btn-style features--form--btn">Обратный звонок </button>
                        {!! Form::close() !!}

                        {{--<form id="" class="form--container form--features d-lg-flex justify-content-lg-between"--}}
                              {{--action="">--}}
                           {{----}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </section>

@endsection()