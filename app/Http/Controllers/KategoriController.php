<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function create()
    {
        return view('kategori.tambah');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'description' => 'required',
        ]);
        
        DB::table('kategori')->insert([
            'nama' => $request['nama'],
            'description' => $request['description'],
        ]);
        return redirect('/kategori');
    }
    public function tampil()
    {
        $kategori = DB::table('kategori')->get();
        // dd ($kategori);
        return view('kategori.tampil', ['kategori' => $kategori]);
    }
    public function show($id)
    {
        $kategori =  DB::table('kategori')->where('id', $id)->first();
        return view('kategori.detail', ['kategori' => $kategori]);
    }
}
