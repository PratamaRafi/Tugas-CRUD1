@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
        @csrf
        <div>
        <h3>Judul Pertanyaan : {{ $pertanyaan->judul }} </h3>
        </div>
        <div>
        <p>Isi Pertanyaan : {{ $pertanyaan->isi }}</p>
        </div>
        <div>
        <p>Tanggal Dibuat : {{ $pertanyaan->created_at }}</p>
        </div>
        <div>
        <p>Tanggal Diupdate : {{ $pertanyaan->updated_at }}</p>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection