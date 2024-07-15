@extends('layout.template')

@section('title', isset($areaParkir) ? 'Edit Area Parkir - Parkir Kampus' : 'Tambah Area Parkir Baru - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ isset($areaParkir) ? 'Edit Area Parkir' : 'Tambah Area Parkir Baru' }}</h2>
                <form
                    action="{{ isset($areaParkir) ? route('area_parkir.update', $areaParkir->id) : route('area_parkir.store') }}"
                    method="POST">
                    @csrf
                    @if (isset($areaParkir))
                        @method('PUT')
                    @endif
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama', isset($areaParkir) ? $areaParkir->nama : '') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="kampus_id">Kampus</label>
                        <select class="form-control @error('kampus_id') is-invalid @enderror" id="kampus_id"
                            name="kampus_id" required>
                            <option value="">Pilih Kampus</option>
                            @foreach ($kampus as $k)
                                <option value="{{ $k->id }}"
                                    {{ old('kampus_id', isset($areaParkir) ? $areaParkir->kampus_id : '') == $k->id ? 'selected' : '' }}>
                                    {{ $k->nama }}</option>
                            @endforeach
                        </select>
                        @error('kampus_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="number" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas"
                            name="kapasitas"
                            value="{{ old('kapasitas', isset($areaParkir) ? $areaParkir->kapasitas : '') }}" required>
                        @error('kapasitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan">{{ old('keterangan', isset($areaParkir) ? $areaParkir->keterangan : '') }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($areaParkir) ? 'Update' : 'Create' }}</button>
                    <a href="{{ route('area_parkir.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
