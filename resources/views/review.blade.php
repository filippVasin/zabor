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
                    <a href="{{ route('review.create') }}" class="btn btn-success">Добавить</a>
                    <thead>
                    <tr>
                        <th>Аватар</th>
                        <th>Имя</th>
                        <th>От куда</th>
                        <th>Текст</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($reviews)
                        @foreach($reviews as $review)
                            <tr>
                                <td><img src="../img/content/category_ava/{{ $review['avatar']}}" alt="img"></td>
                                <td>{{ $review['name']}}</td>
                                <td>{{ $review['position']}}</td>
                                <td>{{ $review['text']}}</td>
                                <td>{!! Form::open(['method' => 'DELETE',
                                    'route' =>['review.destroy', $review['id']]])!!}
                                    <button onclick="return confirm('Удалить отзыв?')"><i class="glyphicon glyphicon-remove"></i></button>
                                    {!! Form::close() !!}
                                    <a href="{{ url('home/review/edit?id='.$review['id']) }}"><button><i class="glyphicon glyphicon-edit"></i></button></a>

                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Аватар</th>
                        <th>Имя</th>
                        <th>От куда</th>
                        <th>Текст</th>
                        <th>Действия</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection