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
                <thead>
                <tr>
                    <th>Время</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                </tr>
                </thead>
                <tbody>
                @if($leads)
                    @foreach($leads as $lead)
                        <tr>
                            <td>{{ $lead['date']}}</td>
                            <td>{{ $lead['name']}}</td>
                            <td>{{ $lead['phone']}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
                <tfoot>
                <tr>
                    <th>Время</th>
                    <th>Имя</th>
                    <th>Телефон</th>
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
