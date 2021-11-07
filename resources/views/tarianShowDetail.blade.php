@extends('layout.tableLayout')
@section('title','tarian')
@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Detail Tarian {{ $tarian['tarian_name'] }}</h1>
        <p><b>Nama Tari: </b>{{ $tarian['tarian_name'] }}</p>
        <p><b>Tipe Tarian: </b>{{ $tarian['tipe_tarian'] }}</p>
        <p><b>Pencipta Tarian: </b><a href="{{ route('pencipta.show', $tarian->pencipta->id) }}">
            {{ $tarian->pencipta->pencipta_name }}
        </a></p>
        <p><b>Tanggal Diciptakan: </b>{{ $tarian['tanggal'] }}</p>
        <p><b>Deskripsi Tarian: </b>{{ $tarian['description'] }}</p>
    </div>
</div>
@endsection