@extends('layout.tableLayout')
@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Daftarkan Tarian</h1>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('tarian.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Kode Tarian: </label>
                    <input type="text" class="form-control" name="tarian_code" value="{{ $tarian['tarian_code'] }}" required>
                </div>
                <div class="form-group">
                    <label>Nama Tarian: </label>
                    <input type="text" class="form-control" name="tarian_name" value="{{ $tarian['tarian_name'] }}" required>
                </div>
                <div class="form-group">
                    <label>Tipe Tarian: </label>
                    <input type="text" class="form-control" name="tipe_tarian" value="{{ $tarian['tipe_tarian'] }}" required>
                </div>
                <div class="form-group">
                    <label for="type">Pencipta Tari: </label>
                    <select class="form-select" name="pencipta_tari" id="type" required>
                        @foreach ($pencipta as $cipta)  
                            <option value="{{ $cipta->id }}">{{ $cipta->pencipta_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Tari Diciptakan: </label>
                    <input type="text" class="form-control" name="tanggal" value="{{ $tarian['tanggal'] }}" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi tentang Tari: </label>
                    <input type="text" class="form-control" name="description" value="{{ $tarian['description'] }}" required>
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
                    <button type="submit" class="btn btn-success">Daftarkan Tari</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection