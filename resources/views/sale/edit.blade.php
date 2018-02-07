@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <form action="{{ route('sale.update',['id'=>$sale['id']]) }}" method="post" enctype="multipart/form-data">
            <div class="box-body" style="display: flex;
                                                flex-direction: column;
                                                width: 300px;
                                                height: 200px;
                                                justify-content: space-between;">
                <input type="text"  name="title" required value="{{ $sale['title'] }}">
                <input type="text"  name="description" required value="{{ $sale['description'] }}">
                <input type="text"  name="where" required value="{{ $sale['where'] }}">
                <input type="date"  name="date" required value="{{ $sale['date'] }}">
                {{--<select name="category_id">--}}
                    {{--@if($categories)--}}
                        {{--@foreach($categories as $category)--}}
                            {{--@if($category['id'] == $color['category_id'] )--}}
                                {{--<option value = "{{ $category['id'] }}" selected>{{ $category['name'] }}</option>--}}
                            {{--@else--}}
                                {{--<option value = "{{ $category['id'] }}">{{ $category['name'] }}</option>--}}
                            {{--@endif--}}
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