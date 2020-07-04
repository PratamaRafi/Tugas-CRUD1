@extends('adminlte.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
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
        <a href="/jawaban/{{$pertanyaan->id}}" class="btn btn-sm btn-info">Bantu Jawab</a>
          <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-sm btn-info">Detail</a>
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
  <a class="btn btn-primary" href="/pertanyaan/create" role="button">Beri Pertanyaan</a>
  </div>
  
@endsection