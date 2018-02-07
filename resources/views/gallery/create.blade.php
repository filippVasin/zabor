@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <form action="{{ route('gallery.upload') }}" method="post" enctype="multipart/form-data">
            <div class="box-body" style="display: flex;
                                                flex-direction: column;
                                                width: 300px;
                                                height: 200px;
                                                justify-content: space-between;">
                <label>Выбирете файл:</label>
                <input type="file"  name="file" id="file" class="btn-default" required>
                <select name="category_id">
                    @if($categories)
                        @foreach($categories as $category)
                            <option value = "{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                    @endif
                </select>
                <input type="submit"  value="Загрузить" name="submit" class="btn btn-success" style="margin-top: 5px">
                <input type="hidden" value="{{ csrf_token()}}" name="_token" >
            </div>
        </form>
        <a href="{{ route('gallery')}}"  class="btn btn-cancel" style="margin-left: 10px;width: 280px;">Отмена</a>
    </div>
@endsection