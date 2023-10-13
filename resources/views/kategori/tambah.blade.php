@extends('layouts.master')
@section('judul')
Halaman tambah kategori
@endsection

@section('content')
<form action="/kategori" method="post">
    @csrf
    <div class="form-group">
      <label>Nama kategori</label>
      <input type="email" name="nama" class="form-control">
    </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <div class="form-group">
      <label>Deskripsi kategori</label>
      <textarea name="description" class="form-control"  cols="30" rows="10"></textarea>
    </div>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection