<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/forAdmin/myApp.css')}}">
</head>
<body data-editor="BalloonEditor" data-collaboration="false" data-revision-history="false">
<menu class="static_menu">
    <button class="menu_item" id="main_btn1" onclick="openMenu1()">Blog</button>
    <button class="menu_item" id="main_btn2" onclick="openMenu2()">Anasayfa</button>
    <a href="{{route('logout')}}">
        <button class="logoutBtn"> &times; Log out &times;</button>
    </a>
</menu>
<menu class="menu" id="menuSelect1">
    <button class="menu_item" id="menuFun1">Kontent ekle</button>
    <button class="menu_item" id="menuFun2">Kontent redakte et</button>
    <button class="menu_item" id="menuFun3">Kontent sil</button>
</menu>
<menu class="menu" id="menuSelect2">
    <button class="menu_item" id="menuFun4">Switcherler</button>
    <button class="menu_item" id="menuFun5">Karuseller</button>
    <button class="menu_item" id="menuFun6">Ekib</button>
    <button class="menu_item" id="menuFun7">Ana Panel</button>
</menu>
<div class="nasock" id="page1">
    <button id="enCall">En</button>
    <button id="trCall">Tr</button>
    <button id="ruCall">Ru</button>
    <form class="form" action="{{route('newContentForBlog')}}" method="post">
        @csrf
        <input name="img" class="main_img" placeholder="Main image (only url)">
        <br>
        <div class="holder" id="holder1">
            <h2>English</h2>
            <input type="text" placeholder="Title En" name="title_en">
            <input type="text" placeholder="Preview En" name="content_preview_en">
            <textarea id="editor1" name="text_en"></textarea>
        </div>
        <div class="holder" id="holder2">
            <h2>Türkce</h2>
            <input type="text" placeholder="Title Tr" name="title_tr">
            <input type="text" placeholder="Preview Tr" name="content_preview_tr">
            <textarea id="editor2" name="text_tr"></textarea>
        </div>
        <div class="holder" id="holder3">
            <h2>Русский</h2>
            <input type="text" placeholder="Title Ru" name="title_ru">
            <input type="text" placeholder="Preview RU" name="content_preview_ru">
            <textarea id="editor3" name="text_ru"></textarea>
        </div>
        <button type="submit">Upload to Web-Page
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up"
                 viewBox="0 0 13 13">
                <path fill-rule="evenodd"
                      d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
            </svg>
        </button>
    </form>
</div>
<div class="nasock" id="page2">
    @yield('update')
    @foreach($posts as $post)
        <a href="{{route('ContentUpdateGet',['id'=>$post->id])}}">
            <div class="post_for_edit">
                <h2>Id: {{$post->id}}</h2>
                <h2>{{$post->title_tr}}</h2>
                <h2>{{$post->title_en}}</h2>
                <h2>{{$post->title_ru}}</h2>
            </div>
        </a>
    @endforeach
</div>
<div class="nasock" id="page3">
    @foreach($posts as $post)
        <div class="post_for_edit">
            <h2>Id: {{$post->id}}</h2>
            <h2>{{$post->title_tr}}</h2>
            <h2>{{$post->title_en}}</h2>
            <h2>{{$post->title_ru}}</h2>
        </div>
        <form action="{{ route('deletePost', ['id' => $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="redBtn" type="submit">Delete Post</button>
        </form>
    @endforeach
</div>
<div class="nasock" id="page4">
    page 4
</div>
<div class="nasock" id="page5">
    page 5
</div>
<div class="nasock" id="page6">
    <table border="1">
        <thead>
        <tr>
            <td class="theader" colspan="10">
                Ekib
            </td>
        </tr>
        <tr>
            <td class="theader">ID:</td>
            <td class="theader">Ad Turkce</td>
            <td class="theader">Vasife Turkce</td>
            <td class="theader">Ad Inglisce</td>
            <td class="theader">Vasife Inglisce</td>
            <td class="theader">Ad Rus dilinde</td>
            <td class="theader">Vasife Rus dilinde</td>
            <td class="theader">Image</td>
            <td class="theader">Redakt et</td>
            <td class="theader" bgcolor="red">Kisi Boz</td>
        </tr>
        </thead>
        <tbody>
        @if(isset($workers))
            @foreach($workers as $worker)
                <tr>
                    <td>{{$worker->id}}</td>
                    <td>{{$worker->name_tr}}</td>
                    <td>{{$worker->position_tr}}</td>
                    <td>{{$worker->name_en}}</td>
                    <td>{{$worker->position_en}}</td>
                    <td>{{$worker->name_ru}}</td>
                    <td>{{$worker->position_ru}}</td>
                    <td><img src="{{asset('storage/'. $worker->img)}}" width="90px" height="90px"></td>
                    <td>
                        <a href="{{route('remakeWorkerGet', [$worker->id])}}">
                            Redakt et
                        </a>
                    </td>
                    <td bgcolor="red">
                        <form method="post" action="{{ route('deleteWorker', [$worker->id]) }}" style="display:inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" style=" padding: 0; margin:0; border: none; background-color: transparent;">
                                Kisini boz&times;
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <button onclick="openMinForm1()">Yeni kisi ekle</button>
    <form id="minForm1" class="minForm" action="{{route('saveNewWorker')}}" enctype="multipart/form-data" method="post">
        @csrf
        <input name="name_tr" type="text" placeholder="Ad, Soyad">
        <input name="position_tr" type="text" placeholder="Vezife">
        <input name="name_en" type="text" placeholder="Ad, Soyad Ingisce">
        <input name="position_en" type="text" placeholder="Vezife Ingszce">
        <input name="name_ru" type="text" placeholder="Ad, Soyad Rus dilinde">
        <input name="position_ru" type="text" placeholder="Vezife Rus dilinde">
        <input name="img" accept="image/png, image/jpeg, image/jpeg, image/png" type="file">
        <button type="submit">Kayd Et!</button>
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
    @yield('remakeWorker')
</div>
<div class="nasock" id="page7">
    <table border="1">
        <thead>
        <tr>
            <td class="theader" colspan="9">
                Ana sayfa paneller
            </td>
        </tr>
        <tr>
            <td class="theader">ID:</td>
            <td class="theader">Kontent En</td>
            <td class="theader">Kontent Ru</td>
            <td class="theader">Kontent Tr</td>
            <td class="theader">Link</td>
            <td class="theader">Image</td>
            <td class="theader">Gorunsun?</td>
            <td class="theader">Redakt et</td>
            <td class="theader" bgcolor="red">Panel Boz</td>
        </tr>
        </thead>
        <tbody>
        @if(isset($panels))
            @foreach($panels as $panel)
                <tr>
                    <td>{{$panel->id}}</td>
                    <td>{{$panel->cont_en}}</td>
                    <td>{{$panel->cont_ru}}</td>
                    <td>{{$panel->cont_tr}}</td>
                    <td style="overflow:auto!important;width:200px!important;">
                        <p style="overflow:auto!important; width: 200px">{{$panel->link}}</p>
                    </td>
                    <td><img src="{{asset('storage/'. $panel->img)}}" width="90px" height="90px"></td>
                    <td>
                        @if($panel->visibility == 1)
                            {{'Evet'}}
                        @elseif($panel->visibility == 0)
                            {{'Hayir'}}
                        @endif
                    </td>
                    <td>
                        <a href="{{route('remakePanelGet', [$panel->id])}}">
                            Redakt et
                        </a>
                    </td>
                    <td bgcolor="red">
                        <form method="post" action="{{ route('deletePanel', [$panel->id]) }}" style="display:inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" style=" padding: 0; margin:0; border: none; background-color: transparent;">
                                paneli boz&times;
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <button onclick="openMinForm2()">Yeni panel ekle</button>
    <form id="minForm2" class="minForm" action="{{route('saveNewPanel')}}" enctype="multipart/form-data" method="post">
        @csrf
        <input name="cont_en" type="text" placeholder="Kontent EN">
        <input name="cont_ru" type="text" placeholder="Kontent RU">
        <input name="cont_tr" type="text" placeholder="Kontent TR">
        <input name="link" type="text" placeholder="Link ekleyin">
        <input name="img" accept="image/png, image/jpeg, image/jpeg, image/png" type="file">
        <button type="submit">Kayd Et!</button>
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
    @yield('remakePanel')
</div>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script src="{{asset('assets/forAdmin/myApp.js')}}"></script>
</body>
</html>
