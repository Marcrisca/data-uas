@extends('layout.template')

@section('title', isset($transaksi) ? 'Edit Transaksi - Parkir Kampus' : 'Tambah Transaksi Baru - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ isset($transaksi) ? 'Edit Transaksi' : 'Tambah Transaksi Baru' }}</h2>
                <form
                    action="{{ isset($transaksi) ? route('transaksi.update', $transaksi->id) : route('transaksi.store') }}"
                    method="POST">
                    @csrf
                    @if (isset($transaksi))
                        @method('PUT')
                    @endif
                    <div class="form-group mb-3">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                            name="tanggal" value="{{ old('tanggal', isset($transaksi) ? $transaksi->tanggal : '') }}"
                            required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="mulai">Mulai</label>
                        <input type="time" class="form-control @error('mulai') is-invalid @enderror" id="mulai"
                            name="mulai" value="{{ old('mulai', isset($transaksi) ? $transaksi->mulai : '') }}" required>
                        @error('mulai')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="keluar">Keluar</label>
                        <input type="time" class="form-control @error('keluar') is-invalid @enderror" id="keluar"
                            name="keluar" value="{{ old('keluar', isset($transaksi) ? $transaksi->keluar : '') }}">
                        @error('keluar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan"
                            name="keterangan"
                            value="{{ old('keterangan', isset($transaksi) ? $transaksi->keterangan : '') }}" required>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="kendaraan_id">Kendaraan</label>
                        <select class="form-control @error('kendaraan_id') is-invalid @enderror" id="kendaraan_id"
                            name="kendaraan_id" required>
                            <option value="">Pilih Kendaraan</option>
                            @foreach ($kendaraans as $kendaraan)
                                <option value="{{ $kendaraan->id }}"
                                    {{ old('kendaraan_id', isset($transaksi) ? $transaksi->kendaraan_id : '') == $kendaraan->id ? 'selected' : '' }}>
                                    {{ $kendaraan->merk }} ({{ $kendaraan->nopol }})</option>
                            @endforeach
                        </select>
                        @error('kendaraan_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="area_parkir_id">Area Parkir</label>
                        <select class="form-control @error('area_parkir_id') is-invalid @enderror" id="area_parkir_id"
                            name="area_parkir_id" required>
                            <option value="">Pilih Area Parkir</option>
                            @foreach ($areaParkir as $areaParkir)
                                <option value="{{ $areaParkir->id }}"
                                    {{ old('area_parkir_id', isset($transaksi) ? $transaksi->area_parkir_id : '') == $areaParkir->id ? 'selected' : '' }}>
                                    {{ $areaParkir->nama }}</option>
                            @endforeach
                        </select>
                        @error('area_parkir_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($transaksi) ? 'Update' : 'Create' }}</button>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
