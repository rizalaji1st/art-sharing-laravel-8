<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\User;
use App\Models\RefKategoriKonten;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return $this->middleware('auth', ['except' => ['welcome']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome(){
        $kontens = Konten::orderBy('id','desc')->get(); 
        $kategoris = RefKategoriKonten::all();
        return view('welcome', compact('kontens', 'kategoris'));
    }
}
