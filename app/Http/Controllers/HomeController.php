<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('welcome');
    }

    public function changeLanguage($language)
    {
        $lang = $language;
        if (!in_array($lang, ['en', 'vi'])) {
            abort(404);
        }
        Session::put('language', $lang);
        return redirect()->back();
    }
}
