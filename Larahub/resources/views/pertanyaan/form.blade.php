@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <form action="/pertanyaan" method="POST">
     @csrf
      <div class="form-group">
        <label for="judul">Judul :</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul" name="judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Isi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Isi" name="isi" id="isi">
      </div>
      <button type="submit" class="btn btn-primary">Nanya ah..</button>
    </form>
</div>
@endsection