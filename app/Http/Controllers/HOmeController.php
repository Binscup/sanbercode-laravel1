<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class HOmeController extends Controller
{
    public function utama()
    {
        return view('welcome');
    }
    public function bio()
    {
        return view('halaman.biodata');
    }
    public function kirim(Request $request)
    {
        $name = $request ['name'];
        $alamat = $request ['alamat'];
        $jenisKelamin = $request ['jk'];

        return view('halaman.home', ['name' => $name, 'alamat' => $alamat, 'jenisKelamin' => $jenisKelamin]);
    }
    
}
