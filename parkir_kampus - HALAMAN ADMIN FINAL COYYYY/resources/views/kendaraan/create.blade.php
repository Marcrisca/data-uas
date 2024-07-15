@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kendaraan</h1>
    <form action="#" method="POST">
        @csrf
        <div class="form-group">
            <label for="merk">Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" required>
        </div>
        <div class="form-group">
            <label for="pemilik">Pemilik</label>
            <input type="text" class="form-control" id="pemilik" name="pemilik" required>
        </div>
        <div class="form-group">
            <label for="nopol">No. Polisi</label>
            <input type="text" class="form-control" id="nopol" name="nopol" required>
        </div>
        <div class="form-group">
            <label for="thn_beli">Tahun Beli</label>
            <input type="number" class="form-control" id="thn_beli" name="thn_beli" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
        </div>
        <div class="form-group">
            <label for="jenis_kendaraan_id">Jenis Kendaraan</label>
            <select class="form-control" id="jenis_kendaraan_id" name="jenis_kendaraan_id" required>
                @foreach($jenis as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kapasitas_kursi">Kapasitas Kursi</label>
            <input type="number" class="form-control" id="kapasitas_kursi" name="kapasitas_kursi" required>
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" class="form-control" id="rating" name="rating" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
