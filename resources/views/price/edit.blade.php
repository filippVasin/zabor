@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <form action="{{ route('price.update',['id'=>$price['id']]) }}" method="post" enctype="multipart/form-data">
            <div class="box-body" style="display: flex;
                                                flex-direction: column;
                                                width: 300px;
                                                height: 300px;
                                                justify-content: space-between;">
                <label style="margin-top: 10px"> Название столбца:</label>
                <input type="text"  name="column_name" required  value="{{ $price['column_name'] }}">
                <label style="margin-top: 10px"> Цена один:</label>
                <input type="text"  name="price_one" required  value="{{ $price['price_one'] }}">
                <label style="margin-top: 10px"> Цена два:</label>
                <input type="text"  name="price_two" required  value="{{ $price['price_two'] }}">
                <label style="margin-top: 10px"> Цена три:</label>
                <input type="text"  name="price_three"   value="{{ $price['price_three'] }}">

                <input type="submit"  value="Сохранить" name="submit" class="btn btn-success" style="margin-top: 5px">

                <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            </div>
        </form>
        <a href="{{ route('price')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>
    </div>
@endsection