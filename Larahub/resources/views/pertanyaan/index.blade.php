@extends('adminlte.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
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