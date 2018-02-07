@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <form action="{{ route('main.update',['id'=>1]) }}" method="post" enctype="multipart/form-data">
            <div class="box-body" style="display: flex;
                                                flex-direction: column;
                                                width: 300px;
                                                height: 680px;
                                                justify-content: space-between;">
                <label style="margin-top: 10px"> Телефон:</label>
                <input type="text"  name="company_phone" required  value="{{ $main['company_phone'] }}">
                <label style="margin-top: 10px"> E-mail:</label>
                <input type="text"  name="company_email" required  value="{{ $main['company_email'] }}">
                <label style="margin-top: 10px"> E-mail для заявок:</label>
                <input type="text"  name="leads_email" required  value="{{ $main['leads_email'] }}">
                <label style="margin-top: 10px"> Оффер:</label>
                <textarea type="text"  name="offer" style="width: 400px; height: 150px" >{{ $main['offer'] }}</textarea>
                <label style="margin-top: 10px"> Видео(ссылка с Youtube):</label>
                <input type="text"  name="video" style="width: 400px;"   value="https://www.youtube.com/embed/{{ $main['video'] }}">
                <label style="margin-top: 10px"> Заголовок для видео:</label>
                <input type="text"  name="video_title"   value="{{ $main['video_title'] }}">
                <label style="margin-top: 10px"> Главная картинка</label>
                <input type="file"  name="file" class="btn-default" required>

                <input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">

                <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            </div>
        </form>
        <a href="{{ route('main')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>
    </div>
@endsection