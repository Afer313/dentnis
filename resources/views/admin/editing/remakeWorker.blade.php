@extends('admin.editing.ckeditor')
@section('remakeWorker')
    <form class="minForm" action="{{ route('remakeWorker', ['id' => $worker->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <input name="name_tr" type="text" value="{{$worker->name_tr}}">
        <input name="position_tr" type="text" value="{{$worker->position_tr}}">
        <input name="name_en" type="text" value="{{$worker->name_en}}">
        <input name="position_en" type="text" value="{{$worker->position_en}}">
        <input name="name_ru" type="text" value="{{$worker->name_ru}}">
        <input name="position_ru" type="text" value="{{$worker->position_ru}}">
        <input name="img" accept="image/png, image/jpeg, image/jpeg, image/png" value="{{$worker->img}}" type="file">
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
