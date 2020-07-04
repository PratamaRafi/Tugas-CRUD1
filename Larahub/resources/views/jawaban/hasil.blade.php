@extends('adminlte.master')

@section('content')

<div class="card">
<table class="table">
    <thead>
            <tr>
                <th>No</th>
                <th>Jawaban</th>
            </tr>
     </thead>
     <tbody>
     @foreach($jawaban as $key => $jawaban )
         <tr>    
            <td> {{ $key + 1 }} </td>
            <td> {{ $jawaban->isi }} </td>
         </tr>
     @endforeach
     </tbody>
</table>
<a href="/pertanyaan" class="btn btn-lg btn-info mx-auto mb-3">Kembali Ke Halaman Utama</a>

</div>




@endsection