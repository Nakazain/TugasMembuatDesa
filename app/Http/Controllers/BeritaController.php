<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $post = Berita::paginate(3);
        return view('umah', compact('post'));
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
}
