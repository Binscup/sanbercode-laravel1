@extends('layouts.master')
@section('judul')
Detail kategori
@endsection

@section('content')
<h1>{{ $kategori->nama }}</h1>
<p>{{ $kategori->description }}</p>
<a href="/kategori" type="submit" class="btn btn-warning">Kembali</a>
@endsection