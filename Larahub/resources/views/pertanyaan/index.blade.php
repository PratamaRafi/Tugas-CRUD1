@extends('adminlte.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Pertanyaan</th>
        <th>Action</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Diperbaharui</th>
      </tr>
    </thead>
    <tbody>
    @foreach($pertanyaan as $key => $pertanyaan)
      <tr>
        <td> {{ $key + 1 }} </td>
        <td> {{ $pertanyaan->judul }} </td>
        <td> {{ $pertanyaan->isi }} </td>
        <td>
        <form action="{{ url('/jawaban/'. $pertanyaan->id)}}" method="post">
          @csrf
          <input type="text" name="isi">
          <input hidden name="pertanyaan_id" value="{{ $pertanyaan->id }}">
          <button type="submit" class="btn btn-sm btn-warning mb-1">Bantu Jawab</button>
        </form>
          <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-sm btn-info">Detail</a>
          <a href="{{ url('/jawaban/'. $pertanyaan->id)}}" class="btn btn-sm btn-info">Jawaban</a>
          <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Hapus <i class="fas fa-trash"></i> </button>
          </form>
        </td>
        <td> {{ $pertanyaan->created_at }} </td>
        <td> {{ $pertanyaan->updated_at }} </td>
      </tr>
     @endforeach
    </tbody>
  </table>
  <div class="ml-3">
  <a class="btn btn-info" href="/pertanyaan/create" role="button">Beri Pertanyaan</a>
  </div>
  
@endsection