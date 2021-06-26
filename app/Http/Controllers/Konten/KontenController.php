<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\User;
use App\Models\RefKategoriKonten;
use Illuminate\Support\Facades\Storage;

class KontenController extends Controller
{
    public function index(){
        $kontens = Konten::orderBy('id','desc')->get(); 
        return view('pages.konten.blog.index', compact('kontens'));
    }

    public function detail($slug){
        $konten = Konten::where('slug',$slug)->first();
        $user = User::where('id',$konten->created_by)->first();
        return view('pages.konten.detail',compact('konten', 'user'));
    }

    public function detailTest(){
        return view('pages.konten.detail');
    }

    public function preview($slug){
        $konten = Konten::where('slug',$slug)->first();
        $user = User::where('id',$konten->created_by)->first();
        return view('pages.konten.preview',compact('konten', 'user'));
    }

    public function previewTest(){
        return view('pages.konten.preview');
    }

    public function download($slug){
        $konten = Konten::where('slug',$slug)->first();
        return Storage::download($konten->path_gambar);
    }

    public function blog($slug){
        $konten = Konten::where('slug',$slug)->first();
        $latest_kontens = Konten::orderBy('id','desc')->take(5)->get();
        $kategoris = RefKategoriKonten::all();
        if (!$konten) {
            return view('pages.konten.404NotFound');
        }
        $user = User::where('id',$konten->created_by)->first();
        return view('pages.konten.blog.single-blog',compact('konten', 'user', 'kategoris','latest_kontens'));
    }
}
