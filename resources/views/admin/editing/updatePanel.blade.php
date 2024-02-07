@extends('admin.editing.ckeditor')
@section('remakePanel')
    <form class="minForm" style="display: block" action="{{ route('remakePanel', ['id' => $panel->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <input name="cont_en" type="text" value="{{$panel->cont_en}}">
        <input name="cont_ru" type="text" value="{{$panel->cont_ru}}">
        <input name="cont_tr" type="text" value="{{$panel->cont_tr}}">
        <input name="link" type="text" value="{{$panel->link}}">
        <input name="img" accept="image/png, image/jpeg, image/jpeg, image/png" value="{{$panel->img}}" type="file">
        <label>Girzi yapmak icin 0 kullanin || Gorunmesi icin 1</label>
        <input name="visibility" type="number" min="0" max="1" value="{{$panel->visibility}}">
        <button type="submit">Redakte Et!</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
