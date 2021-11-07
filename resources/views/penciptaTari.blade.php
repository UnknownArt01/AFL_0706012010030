@extends('layout.tableLayout')
@section('title','Pencipta Tari')
@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Daftar Pencipta Tari</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('pencipta.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Daftarkan Diri</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Pencipta</th>
                <th scope="col">Nama</th>
                <th scope="col">Daerah</th>
                <th scope="col">TTL</th>
                <th scope="col">Diskripsi</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($pencipta as $cipta)
                <tr>
                    <th scope="row">{{ $index }}</th>
                    @php $index++ @endphp
                    <td>{{ $cipta['pencipta_code'] }}</td>
                    <td>{{ $cipta['pencipta_name'] }}</td>
                    <td>{{ $cipta['daerah_asal'] }}</td>
                    <td>{{ $cipta['TTL'] }}</td>
                    <td>{{ $cipta['description_pencipta'] }}</td>
                    <td class="text-center">
                        <form action="{{ route('pencipta.destroy',$cipta->pencipta_code) }}" method="POST">   
                            <a class="btn btn-info" href="{{ route('pencipta.show',$cipta->pencipta_code) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('pencipta.edit', $cipta->pencipta_code) }}">Edit</a>
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