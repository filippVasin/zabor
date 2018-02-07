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
                    <a href="{{ route('color.create') }}" class="btn btn-success">Добавить</a>
                    <thead>
                    <tr>
                        <th>Цвет</th>
                        <th>Название</th>
                        <th>Артикул</th>
                        <th>Категория</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($colors)
                        @foreach($colors as $color)
                            <tr>
                                <td><img src="../img/content/color/{{ $color['img']}}" alt="img"></td>
                                <td>{{ $color['name']}}</td>
                                <td>{{ $color['code']}}</td>
                                <td>{{ $category[$color['category_id']-1]['name']}} </td>
                                <td>{!! Form::open(['method' => 'DELETE',
                                    'route' =>['color.destroy', $color['id']]])!!}
                                    <button onclick="return confirm('Удалить цвет?')"><i class="glyphicon glyphicon-remove"></i></button>
                                    {!! Form::close() !!}
                                    <a href="{{ url('home/color/edit?id='.$color['id']) }}"><button><i class="glyphicon glyphicon-edit"></i></button></a>

                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Цвет</th>
                        <th>Название</th>
                        <th>Артикул</th>
                        <th>Категория</th>
                        <th>Действия</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection