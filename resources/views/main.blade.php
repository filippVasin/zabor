@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <div class="box">
            <a href="{{ route('main.edit') }}" class="btn btn-success" style="margin: 10px" >Изменить</a>
            <div class="box-header" style="display: flex;
                                                flex-direction: column;
                                                height: 200px;
                                                justify-content: space-between;">
                <h3 class="box-title">Телефон: {{ $main['company_phone']}}</h3>
                <h3 class="box-title">E-mail: {{ $main['company_email']}}</h3>
                <h3 class="box-title">E-mail для заявок: {{ $main['leads_email']}}</h3>


            </div>
            <div class="box-header" style="background: #ccc">
                <h3 class="box-title">Оффер:
                    <?php
                    $str = str_replace('spanyellow','<span style="color:yellow">',$main['offer']);
                    $str = str_replace('nospan','</span>',$str);
                    $str = str_replace('sspan','<span>',$str);
                    echo $str;
                    ?>
                </h3>
            </div>
            <div class="box-header">
                <h3 class="box-title">Заголовок для видео: {{ $main['video_title']}}</h3>
                <div class="row justify-content-center">
                    <iframe width="860" height="480" src="https://www.youtube.com/embed/{{ $main['video'] }}" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            {{--{{ $main['company_phone']}}--}}

            <!-- /.box-body -->
        </div>
    </div>
@endsection