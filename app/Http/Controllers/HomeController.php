<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $post = Berita::all();
        return view('home', compact('post'));
    }

    public function add(){
        return view('add');
    }

    public function tambahdata(Request $request){
        $request->validate([
            'judul'=>('required'),
            'deskripsi'=>('required'),
            'gambar'=>'image|mimes:jpeg,png,jpg,giv,svg',
        ]);
        $imagePath = $request->file('gambar')->store('berita', 'public');
        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);
        return redirect('home');
    }

    public function detail($id){   
        $post = Berita::findOrFail($id);
        return view('detail', compact('post'));
        }
}
