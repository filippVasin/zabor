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
                    <a href="{{ route('gallery.create') }}" class="btn btn-success">Добавить</a>
                    <thead>
                    <tr>
                        <th>Фото</th>
                        <th>Категория</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($photos)
                        @foreach($photos as $photo)
                            <tr>
                                <td><img src="../img/content/{{ $photo['path']}}" alt="img"></td>
                                <td>{{ $category[$photo['category_id']-1]['name']}}
                                </td>
                                <td>{!! Form::open(['method' => 'DELETE',
                                    'route' =>['gallery.destroy', $photo['id']]])!!}
                                    <button onclick="return confirm('Удалить Фотографию?')"><i class="glyphicon glyphicon-remove"></i></button>
                                    {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Фото</th>
                        <th>Категория</th>
                        <th>Действия</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    {{--<script>--}}

    {{--$(function () {--}}
    {{--$('#example1').DataTable()--}}
    {{--$('#example1').DataTable({--}}
    {{--'paging'      : true,--}}
    {{--'lengthChange': false,--}}
    {{--'searching'   : false,--}}
    {{--'ordering'    : true,--}}
    {{--'info'        : true,--}}
    {{--'autoWidth'   : false--}}
    {{--})--}}
    {{--})--}}
    {{--</script>--}}
@endsection