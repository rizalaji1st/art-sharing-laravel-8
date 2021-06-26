<?php

namespace App\Http\Controllers\Admin\ManajemenKonten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Konten;
use App\Models\RefKategoriKonten;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ManajemenKontenController extends Controller
{
    public function index(){
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            $kontens = Konten::all();
        }
        else{
            $kontens = Konten::where([['created_by', $user->id]])->get();
        }
        
        return view('pages.admin.manajemen_konten.index', compact('kontens'));
    }

    public function create(){
        $kategoris = RefKategoriKonten::all();

        return view('pages.admin.manajemen_konten.create', compact('kategoris'));
    }

    public function store(Request $request){
        
        $validated = Validator::make($request->all(),[
            'judul' => ['required'],
            'deskripsi' => ['required'],
            'kategori' => ['required'],
            'isActive' => ['required']
        ]); 
        if($validated->fails()){
            return redirect('/admin/manajemen-konten/create')->with('warning','Beberapa field masih kosong');
        }

        $data = $request->except(['_token']);
        $user = Auth::id();
        $slug = Str::of($data['judul'])->slug('-');
        $konten = Konten::where('slug',$slug)->count();
        $slug = $konten ? $slug .'-' .Carbon::now()->format('m-d-y') : $slug;
        $file = $request->file('file');
        $ekstensi = $request->file('file')->getClientOriginalExtension();
        $nama_file = $slug . '-' .Carbon::now()->timestamp .'.'. $ekstensi;
        $path_file = Storage::putFileAs('public/data_file/post_gambar', $file, $nama_file);
        $Konten = Konten::create([
            'judul' => $data['judul'],
            'slug' => $slug,
            'deskripsi' => $data['deskripsi'],
            'id_kategori' => (int) $data['kategori'],
            'is_active' => (int)$data['isActive'] ? true : false,
            'is_main' => false,
            'path_gambar' => $path_file,
            'created_at' => Carbon::now(),
            'created_by' => $user
        ]);


        return redirect('/admin/manajemen-konten')->with('success','Konten berhasil ditambahkan');
    }

    public function update(Konten $konten){
        $kategoris = RefKategoriKonten::all();

        return view('pages.admin.manajemen_konten.update', compact('konten','kategoris'));
    }

    public function updateStore(Request $request, Konten $konten){
        $validated = Validator::make($request->all(),[
            'judul' => ['required'],
            'deskripsi' => ['required'],
            'kategori' => ['required'],
            'isActive' => ['required']
        ]); 
        if($validated->fails()){
            return redirect('/admin/manajemen-konten/update/'.$konten->id)->with('warning','Beberapa field masih kosong');
        }

        $data = $request->except(['_token']);
        $user = Auth::id();
        $slug = $konten->judul;

        if ($request->file('file') != null) {
            Storage::delete($konten->path_gambar);
            $file = $request->file('file');
            $ekstensi = $request->file('file')->getClientOriginalExtension();
            $slug = Str::of($data['judul'])->slug('-');
            $kontenSameSlug = Konten::where('slug',$slug)->count();
            $slug = $kontenSameSlug ? $slug .'-' .Carbon::now()->format('m-d-y') : $slug;
            $nama_file = $slug . '-' .Carbon::now()->timestamp .'.'. $ekstensi;
            $path_file = Storage::putFileAs('public/data_file/post_gambar', $file, $nama_file);
            $konten->path_gambar = $path_file;
        }
        
        $konten->judul = $data['judul'];
        $konten->slug = $slug;
        $konten->deskripsi = $data['deskripsi'];
        $konten->id_kategori = (int) $data['kategori'];
        $konten->is_active = (int)$data['isActive'] ? true : false;
        $konten->is_main = false;
        $konten->updated_at = Carbon::now();
        $konten->updated_by = $user;
        $konten->save();
        
        return redirect('/admin/manajemen-konten')->with('success','Konten berhasil diupdate');
    }

    public function delete(Konten $konten){
        Storage::delete($konten->path_gambar);
        $konten->delete();

        return redirect('/admin/manajemen-konten')->with('success','Konten berhasil dihapus');
    }
}
