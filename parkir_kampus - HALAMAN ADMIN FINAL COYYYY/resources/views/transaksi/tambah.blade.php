@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Transaksi</h1>
        <form action="{{ route('admin.transaksi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required>
            </div>
            <div class="form-group">
                <label for="mulai">Mulai</label>
                <input type="time" name="mulai" class="form-control" id="mulai" required>
            </div>
            <div class="form-group">
                <label for="akhir">Akhir</label>
                <input type="time" name="akhir" class="form-control" id="akhir" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" required>
            </div>
            <div class="form-group">
                <label for="biaya">Biaya</label>
                <input type="number" name="biaya" class="form-control" id="biaya" required>
            </div>
            <div class="form-group">
                <label for="kendaraan_id">Kendaraan</label>
                <select name="kendaraan_id" class="form-control" id="kendaraan_id" required>
                    @foreach($kendaraan as $item)
                        <option value="{{ $item->id }}">{{ $item->merk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="area_parkir_id">Area Parkir</label>
                <select name="area_parkir_id" class="form-control" id="area_parkir_id" required>
                    @foreach($area_parkir as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection