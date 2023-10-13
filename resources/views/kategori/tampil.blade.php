@extends('layouts.master')
@section('judul')
Halaman list kategori
@endsection

@section('content')
<a href="/kategori/create" type="submit" class="btn btn-primary">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($kategori as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>
                <a href="/kategori/{{ $value->id }}" type="submit" class="btn btn-info">Detail</a>
            </td>
        </tr>
        @empty
             <tr>Tidak ada data</tr>
        @endforelse
    </tbody>
  </table>
@endsection