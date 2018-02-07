@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Прайс-лист:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Цена один</th>
                        <th>Цена два</th>
                        <th>Цена три</th>
                        <th>Название столбца</th>
                        <th>Таблица</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($prices)
                        @foreach($prices as $price)
                            <tr>
                                <td>{{ $price['price_one']}}</td>
                                <td>{{ $price['price_two']}}</td>
                                <td>{{ $price['price_three']}}</td>
                                <td>{{ $price['column_name']}}</td>
                                <td>{{ $price['table_name']}}</td>
                                {{--<td>{{ $category[$sale['category_id']-1]['name']}} </td>--}}
                                <td>
                                    <a href="{{ url('home/price/edit?id='.$price['id']) }}"><button><i class="glyphicon glyphicon-edit"></i></button></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Цена один</th>
                        <th>Цена два</th>
                        <th>Цена три</th>
                        <th>Название столбца</th>
                        <th>Таблица</th>
                        <th>Действия</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection