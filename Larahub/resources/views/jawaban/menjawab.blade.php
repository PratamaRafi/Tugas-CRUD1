@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <form action="/jawaban/hasil" method="POST">
     @csrf
     
      <div class="form-group">
        <label for="isi">Silahkan bantu jawab disini :</label>
        <input type="text" class="form-control" placeholder="Silahkan Isi Jawaban" name="isi" id="isi">
      </div>
      <button type="submit" class="btn btn-primary">Ini Jawaban Saya</button>
    </form>
</div>
@endsection