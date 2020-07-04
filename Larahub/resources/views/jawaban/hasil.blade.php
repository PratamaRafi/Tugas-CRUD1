@extends('adminlte.master')

@section('content')
<div>
     <p>jawaban : {{ $jawaban->isi }} </p>
</div>
<button type="submit" class="btn btn-primary">Kembali Ke Halaman Utama</button>

@endsection