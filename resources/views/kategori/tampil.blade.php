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
                <form action="/kategori/{{ $value->id }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/kategori/{{ $value->id }}" type="submit" class="btn btn-info">Detail</a>
                    <a href="/kategori/{{ $value->id }}/edit" type="submit" class="btn btn-warning">edit</a> 
                    <input type="submit" value="delete" class="btn btn-danger sm-btn">
                </form>
            </td>
        </tr>
        @empty
             <tr>Tidak ada data</tr>
        @endforelse
    </tbody>
  </table>
@endsection