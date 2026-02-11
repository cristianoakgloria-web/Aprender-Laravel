<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $nome = "Ana";
        $habitos = ["Ler", "Correr", "Viajar"];
        
        //return view('home', ['name' => $nome, 'habits' => $habitos]);

        return view('home', compact('nome', 'habitos'));
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}