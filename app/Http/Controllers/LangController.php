<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function changeLanguage($locale): \Illuminate\Http\RedirectResponse
    {
        if (in_array($locale, ['en', 'ru', 'tr'])) {
            session(['locale' => $locale]);
        }

        return redirect()->back();
    }
}
