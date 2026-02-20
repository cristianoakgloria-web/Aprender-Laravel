<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function index(): View
    {
                
        //return view('home', ['name' => $nome, 'habits' => $habitos]);
        return view('home');
    }



}