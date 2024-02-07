@extends('admin.editing.ckeditor')
@section('update')
    <button id="enCall2">En</button>
    <button id="trCall2">Tr</button>
    <button id="ruCall2">Ru</button>
    <form class="form" action="{{route('ContentUpdate',['id' => $post->id])}}" method="post">
        @csrf
        <input name="img" class="main_img" value="{{$post->img}}" placeholder="Main image (only url)" >
        <br>
        <div class="holder" id="holder4">
            <h2>
                English
            </h2>
            <input type="text" value="{{$post->title_en}}" placeholder="Title En" name="title_en">
            <input type="text" value="{{$post->content_preview_en}}" placeholder="Preview En" name="preview_en">
            <textarea id="editor4" name="text_en">{{$post->content_en}}</textarea>
        </div>
        <div class="holder" id="holder5">
            <h2>
                Türkce
            </h2>
            <input type="text" value="{{$post->title_tr}}" placeholder="Title Tr" name="title_tr">
            <input type="text" value="{{$post->content_preview_tr}}" placeholder="Preview Tr" name="preview_tr">
            <textarea id="editor5" name="text_tr">{{$post->content_tr}}</textarea>
        </div>
        <div class="holder" id="holder6">
            <h2>Русский</h2>
            <input type="text" value="{{$post->title_ru}}" placeholder="Title Ru" name="title_ru">
            <input type="text" value="{{$post->content_preview_ru}}" placeholder="Preview Ru" name="preview_ru">
            <textarea id="editor6" name="text_ru">{{$post->content_ru}}</textarea>
        </div>
        <button type="submit">Update content
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up"
                 viewBox="0 0 13 13">
                <path fill-rule="evenodd"
                      d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
            </svg>
        </button>
    </form>
@endsection
