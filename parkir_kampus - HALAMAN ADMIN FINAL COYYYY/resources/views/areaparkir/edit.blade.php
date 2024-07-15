@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Area Parkir</h1>
        <form action="{{ route('admin.area_parkir.update', $areaParkir->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $areaParkir->nama }}" required>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" id="lokasi" value="{{ $areaParkir->lokasi }}" required>
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="number" name="kapasitas" class="form-control" id="kapasitas" value="{{ $areaParkir->kapasitas }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection