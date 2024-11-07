<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    function about() {
        $title = 'Tentang kami'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.about.index',[
            'title_page' => $title
        ]);
    }
    function experience() {
        $title = 'exp'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.experience.index',[
            'title_page' => $title
        ]);
    }
    function education() {
        $title = 'exp'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.education.index',[
            'title_page' => $title
        ]);
    }
    function skills() {
        $title = 'skils'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.skills.index',[
            'title_page' => $title
        ]);
    }
    function interest() {
        $title = 'int'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.interest.index',[
            'title_page' => $title
        ]);
    }
    function awards() {
        $title = 'awards'; //mengisi judul url isi kata yagn kita mau
        return view('frontend.pages.awards.index',[
            'title_page' => $title
        ]);
    }


}
