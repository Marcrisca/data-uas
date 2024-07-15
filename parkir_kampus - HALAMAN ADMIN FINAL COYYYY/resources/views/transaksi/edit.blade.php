@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Transaksi</h1>
        <form action="{{ route('admin.transaksi.update', $transaksi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $transaksi->tanggal }}" required>
            </div>
            <div class="form-group">
                <label for="mulai">Mulai</label>
                <input type="time" name="mulai" class="form-control" id="mulai" value="{{ $transaksi->mulai }}" required>
            </div>
            <div class="form-group">
                <label for="akhir">Akhir</label>
                <input type="time" name="akhir" class="form-control" id="akhir" value="{{ $transaksi->akhir }}" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{ $transaksi->keterangan }}" required>
            </div>
            <div class="form-group">
                <label for="biaya">Biaya</label>
                <input type="number" name="biaya" class="form-control" id="biaya" value="{{ $transaksi->biaya }}" required>
            </div>
            <div class="form-group">
                <label for="kendaraan_id">Kendaraan</label>
                <select name="kendaraan_id" class="form-control" id="kendaraan_id" required>
                    @foreach($kendaraan as $item)
                        <option value="{{ $item->id }}" {{ $transaksi->kendaraan_id == $item->id ? 'selected' : '' }}>{{ $item->merk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="area_parkir_id">Area Parkir</label>
                <select name="area_parkir_id" class="form-control" id="area_parkir_id" required>
                    @foreach($area_parkir as $item)
                        <option value="{{ $item->id }}" {{ $transaksi->area_parkir_id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection