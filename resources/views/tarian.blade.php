@extends('layout.tableLayout')
@section('title','Tarian')
@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Daftar Tarian</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('tarian.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Daftarkan Tarian</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Tarian</th>
                <th scope="col">Nama Tarian</th>
                <th scope="col">Tipe Tarian</th>
                <th scope="col">Pencipta Tari</th>
                <th scope="col">Tanggal Tari diciptakan</th>
                <th scope="col">Diskripsi</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($tarian as $tari)
                <tr>
                    <th scope="row">{{ $index }}</th>
                    @php $index++ @endphp
                    <td>{{ $tari['tarian_code'] }}</td>
                    <td>{{ $tari['tarian_name'] }}</td>
                    <td>{{ $tari['tipe_tarian'] }}</td>
                    <td>
                        <a href="{{ route('pencipta.show', $tari->pencipta->id) }}">
                            {{ $tari->pencipta->pencipta_name }}
                        </a>
                    </td>
                    <td>{{ $tari['tanggal'] }}</td>
                    <td>{{ $tari['description'] }}</td>
                    <td class="text-center">
                        <form action="{{ route('tarian.destroy',$tari->id) }}" method="POST">   
                            <a class="btn btn-info" href="{{ route('tarian.show',$tari->tarian_code) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('tarian.edit', $tari->tarian_code) }}">Edit</a>
                            @csrf
                            @method('DELETE')      
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection