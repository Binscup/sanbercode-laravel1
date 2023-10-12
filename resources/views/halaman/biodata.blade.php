@extends('layouts.master')
@section('judul')
Halaman biodata
@endsection

@section('content')
    <h1>Buat Account Baru</h1>
    <form action="/welcome" method="post">
        @csrf
        <label>Nama depan</label> <br>
        <input type="text" name="name"><br><br>
        <label>Nama belakang</label> <br>
        <input type="text" name="alamat"><br><br>

        <label>Jenis kelamin</label><br>
        <input type="radio" name="jk" value="1">laki-laki
        <input type="radio" name="jk" value="2">perempuan <br><br>
        <label>Description</label><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="kirim">
    </form>
@endsection