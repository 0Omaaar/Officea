<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aPropos()
    {
        return view('a_propos');
    }

    public function questionsFrequentes()
    {
        return view('questions_frequentes');
    }

    public function notreOffre()
    {
        return view('notre_offre');
    }

    public function tarifs()
    {
        return view('tarifs');
    }

    public function contact()
    {
        return view('contact');
    }
    public function home()
    {
        return view('home');
    }
}
