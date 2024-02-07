<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogItem;
use App\Models\Panel;
use App\Models\Worker;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        $panels = Panel::all();
        $blog = BlogItem::all();
        $blog = [$blog[0],$blog[1],$blog[2]];
        return view('front.home.home', compact(['workers', 'panels', 'blog']));
    }

    public function abdul()
    {
        return view('front.abdulkadir');
    }

    public function contact_us()
    {
        return view('front.contact_us');
    }

    public function tv_programs()
    {
        return view('front.tv_programs');
    }

    public function blog()
    {
        $blog = BlogItem::orderBy('id','desc')->get();
        return view('front.makaleler', compact('blog'));
    }
    public function get_item($id)
    {
        $blog = BlogItem::find($id);
        $blogs = BlogItem::all()->random(3);
        return view('front.makale', compact('blog','blogs'));
    }

}
