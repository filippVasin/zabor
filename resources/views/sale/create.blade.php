@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <form action="{{ route('sale.upload') }}" method="post" enctype="multipart/form-data">
            <div class="box-body" style="display: flex;
                                                flex-direction: column;
                                                width: 300px;
                                                height: 200px;
                                                justify-content: space-between;">
                <input type="text"  name="title" required placeholder="Заголовок" >
                <input type="text"  name="description" required placeholder="Описание" >
                <input type="text"  name="where"  required placeholder="Условие" >
                <input type="date"  name="date"  required placeholder="Срок" >
                <input type="file"  name="file"  class="btn-default" required>
                {{--<select name="category_id">--}}
                    {{--@if($categories)--}}
                        {{--@foreach($categories as $category)--}}
                            {{--<option value = "{{ $category['id'] }}">{{ $category['name'] }}</option>--}}
                        {{--@endforeach--}}
                    {{--@endif--}}
                {{--</select>--}}
                <input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">
                <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            </div>
        </form>
        <a href="{{ route('sale')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>
    </div>
@endsection