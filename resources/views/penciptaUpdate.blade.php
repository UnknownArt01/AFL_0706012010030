@extends('layout.tableLayout')
@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Edit Data</h1>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('pencipta.update',$pencipta['id']) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Kode Pencipta Tari: </label>
                    <input type="text" class="form-control" name="pencipta_code" value="{{ $pencipta['pencipta_code'] }}" required>
                </div>
                <div class="form-group">
                    <label>Nama Pencipta Tari: </label>
                    <input type="text" class="form-control" name="pencipta_name" value="{{ $pencipta['pencipta_name'] }}" required>
                </div>
                <div class="form-group">
                    <label>Daerah Asal: </label>
                    <input type="text" class="form-control" name="daerah_asal" value="{{ $pencipta['daerah_asal'] }}" required>
                </div>
                <div class="form-group">
                    <label>Tempat Tanggal Lahir: </label>
                    <input type="text" class="form-control" name="TTL" value="{{ $pencipta['TTL'] }}" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi tentang Pencipta Tari: </label>
                    <input type="text" class="form-control" name="description_pencipta" value="{{ $pencipta['description_pencipta'] }}" required>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Edit Data</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection