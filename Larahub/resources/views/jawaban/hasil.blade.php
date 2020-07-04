@extends('adminlte.master')

@section('content')
<div>
     <h3>Pertanyaan : {{ $pertanyaan->isi }} </h3>
</div>
<div>
     <p>jawaban : {{ $jawaban->isi }} </p>
</div>
<button type="submit" class="btn btn-primary">Kembali Ke Halaman Utama</button>

@endsection