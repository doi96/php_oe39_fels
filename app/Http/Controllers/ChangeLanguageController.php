<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChangeLanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $lang = $request->language;
        $language = config('app.locale');
        if ($lang == 'vi') {
            $language = 'vi';
        }else{
            $language = 'en';
        }
        Session::put('language', $language);
        return redirect()->back();
    }
}
