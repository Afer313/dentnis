<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogItem;
use App\Models\Panel;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $posts = BlogItem::all();
        $workers = Worker::all();
        $panels = Panel::all();
        return view('admin.editing.ckeditor', compact('posts', 'workers', 'panels'));
    }

    public function signUp(Request $request)
    {
        $this->logout($request);
        return view('admin.loginning.signUp');
    }

    public function signUping(Request $request)
    {
        $request->validate(['username' => 'required|max:255|unique:users', 'password' => 'required|min:8', 'confirm_password' => 'required_with:password|same:password,']);
        $request->password = Hash::make($request->password);
        $user = new User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
        Auth::login($user);
        return redirect('/admin/');
    }

    public function logIn()
    {
        return view('admin.loginning.logIn');
    }

    public function logIning(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($data)) {
            return redirect('/admin');
        } else {
            return redirect()->back()->withInput()->withErrors(['username' => 'Invalid credentials', 'password' => 'password error']);
        }
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function ContentUpdateGet($id)
    {
        $posts =  BlogItem::all();
        $post = BlogItem::all()->find($id);
        return view('admin.editing.updating', compact('posts','post'));
    }
}
