<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogItem;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function loadPostToTable(Request $request)
    {
        $data = $request->validate(['title_tr' => 'required | unique:blog', 'title_ru' => 'required | unique:blog', 'title_en' => 'required | unique:blog', 'text_en' => 'required', 'text_tr' => 'required', 'text_ru' => 'required', 'content_preview_en' => 'required', 'content_preview_tr' => 'required', 'content_preview_ru' => 'required', 'img' => 'required']);
        $post = new BlogItem;
        $post->title_tr = $data['title_tr'];
        $post->title_ru = $data['title_ru'];
        $post->title_en = $data['title_en'];
        $post->content_tr = $data['text_tr'];
        $post->content_ru = $data['text_ru'];
        $post->content_en = $data['text_en'];
        $post->content_preview_tr = $data['content_preview_tr'];
        $post->content_preview_en = $data['content_preview_en'];
        $post->content_preview_ru = $data['content_preview_ru'];
        $post->img = $data['img'];

        $post->save();
        return redirect()->back();
    }

    public function deletePost($id)
    {
        $post = BlogItem::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }

    public function contentUpdate(Request $request, $id)
    {
        $data = $request->validate(['title_tr' => 'required', 'title_ru' => 'required', 'title_en' => 'required', 'text_en' => 'required', 'text_tr' => 'required', 'text_ru' => 'required', 'img' => 'required', 'preview_tr' => 'required', 'preview_en' => 'required', 'preview_ru' => 'required']);
        BlogItem::where('id', $id)->update(['title_tr' => $data['title_tr'], 'title_ru' => $data['title_ru'], 'title_en' => $data['title_en'], 'content_tr' => $data['text_tr'], 'content_ru' => $data['text_ru'], 'content_en' => $data['text_en'], 'img' => $data['img'], 'content_preview_tr' => $data['preview_tr'], 'content_preview_en' => $data['preview_en'], 'content_preview_ru' => $data['preview_ru']]);
        return redirect()->back();
    }
}
