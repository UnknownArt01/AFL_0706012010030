@extends('layout.tableLayout')
@section('title','pencipta')
@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Detail Pencipta {{ $pencipta['pencipta_code'] }}</h1>
        <p><b>Nama Pencipta Tari: </b>{{ $pencipta['pencipta_name'] }}</p>
        <p><b>Daerah Asal Tinggal: </b>{{ $pencipta['daerah_asal'] }}</p>
        <p><b>Tanggal lahir: </b>{{ $pencipta['TTL'] }}</p>
        <p><b>Deskripsi: </b>{{ $pencipta['description_pencipta'] }}</p>
        <br>
        <br>
        <h3>List Tarian</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Tarian</th>
                    <th scope="col">Tipe Tarian</th>
                    <th scope="col">Tanggal Diciptakan</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @php $index = 1 @endphp
                @foreach ($pencipta->tarian as $tari)
                    <tr>
                        <th scope="row">{{ $index }}</th>
                        @php $index++ @endphp
                        <td>{{ $tari['tarian_name'] }}</td>
                        <td>{{ $tari['tipe_tarian'] }}</td>
                        <td>{{ $tari['tanggal'] }}</td>
                        <td>{{ $tari['description'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection