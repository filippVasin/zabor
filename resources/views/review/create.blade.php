@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <form action="{{ route('review.upload') }}" method="post" enctype="multipart/form-data">
            <div class="box-body" style="display: flex;
                                                flex-direction: column;
                                                width: 300px;
                                                height: 400px;
                                                justify-content: space-between;">
                <input type="text"  name="name"  required placeholder="Имя">
                <input type="text"  name="position"  required placeholder="От куда">
                <textarea type="text"  name="text"  required placeholder="Текст"></textarea>
                <input type="file"  name="file" id="file" class="btn-default" required>
                <select name="social_icon">
                    <option value = "vk_icon.svg">Вконтакте</option>
                    <option value = "instagram_icon.svg">Инстаграмм</option>
                </select>
                <input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">
                <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            </div>
        </form>
        <a href="{{ route('review')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>
    </div>
@endsection