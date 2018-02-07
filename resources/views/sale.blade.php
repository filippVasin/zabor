@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Заявки:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <a href="{{ route('sale.create') }}" class="btn btn-success">Добавить</a>
                    <thead>
                    <tr>
                        <th>Баннер</th>
                        <th>Заголовок</th>
                        <th>Описание</th>
                        <th>Условие</th>
                        <th>Срок</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($sales)
                        @foreach($sales as $sale)
                            <tr>
                                <td><img src="../img/content/sale/<?php if($sale['img'] !=''){echo $sale['img'];} else { echo 'action3.png';} ?>" alt="img"></td>
                                <td>{{ $sale['title']}}</td>
                                <td>{{ $sale['description']}}</td>
                                <td>{{ $sale['where']}}</td>
                                <td>{{ $sale['date']}}</td>
                                {{--<td>{{ $category[$sale['category_id']-1]['name']}} </td>--}}
                                <td>{!! Form::open(['method' => 'DELETE',
                                    'route' =>['sale.destroy', $sale['id']]])!!}
                                    <button onclick="return confirm('Удалить акцию?')"><i class="glyphicon glyphicon-remove"></i></button>
                                    {!! Form::close() !!}
                                    <a href="{{ url('home/sale/edit?id='.$sale['id']) }}"><button><i class="glyphicon glyphicon-edit"></i></button></a>

                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Баннер</th>
                        <th>Заголовок</th>
                        <th>Описание</th>
                        <th>Условие</th>
                        <th>Срок</th>
                        <th>Действия</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection