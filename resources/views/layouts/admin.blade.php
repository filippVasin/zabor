<!DOCTYPE html>

<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini">
<div id="app">
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        {{--хлебные крошки --}}
        {{--@include('adminlte::layouts.partials.contentheader')--}}

        <!-- Main content -->
        <section class="content">
            {{--@yield('content')--}}
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

<script type="text/javascript" src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>


        $('#example1').DataTable({
            "language": {
                "url": "Russian.json"
            }
        });

</script>
</body>
</html>
