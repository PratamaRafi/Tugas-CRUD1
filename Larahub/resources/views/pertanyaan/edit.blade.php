@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
     @csrf
     @method('PUT')
     <div>
        <p>Tanggal Dibuat : {{ $pertanyaan->created_at }}</p>
        </div>
        <div>
        <p>Tanggal Diupdate : {{ $pertanyaan->updated_at }}</p>
        </div>
      <div class="form-group">
        <label for="judul">Edit Judul :</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul" value="{{$pertanyaan->judul}}" name="judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Edit Isi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Isi" value="{{$pertanyaan->isi}}" name="isi" id="isi">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection