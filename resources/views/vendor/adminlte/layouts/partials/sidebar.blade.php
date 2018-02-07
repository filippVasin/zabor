<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Меню</li>
            <!-- Optionally, you can add icons to the links -->

            <li><a href="{{ url('/home') }}"><i class='fa fa-link'></i> <span>Заявки</span></a></li>
            <li><a href="{{ route('main') }}"><i class='fa fa-link'></i> <span>Основная</span></a></li>
            <li><a href="{{ route('gallery') }}"><i class='fa fa-link'></i> <span>Галерея</span></a></li>
            <li><a href="{{ route('color') }}"><i class='fa fa-link'></i> <span>Цвета</span></a></li>
            <li><a href="{{ route('review') }}"><i class='fa fa-link'></i> <span>Отзывы</span></a></li>
            <li><a href="{{ route('sale') }}"><i class='fa fa-link'></i> <span>Акции</span></a></li>
            <li><a href="{{ route('price') }}"><i class='fa fa-link'></i> <span>Цены</span></a></li>
            {{--<li class="treeview">--}}
                {{--<a href="#"><i class='fa fa-link'></i> <span>Категории</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Заборы из Профнастила</a></li>--}}
                    {{--<li><a href="#">Заборы из Евроштакетника</a></li>--}}
                    {{--<li><a href="#">Заборы ти­па «Гардис»</a></li>--}}
                    {{--<li><a href="#">Заборы из сетки ребца</a></li>--}}
                    {{--<li><a href="#">Заборы Деревянные</a></li>--}}
                    {{--<li><a href="#">Ворота и Калитки</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
