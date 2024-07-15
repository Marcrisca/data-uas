@extends('layout.template')

@section('title', isset($kampus) ? 'Edit Kampus - Parkir Kampus' : 'Create New Kampus - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ isset($kampus) ? 'Edit Kampus' : 'Create New Kampus' }}</h2>
                <form action="{{ isset($kampus) ? route('kampus.update', $kampus->id) : route('kampus.store') }}"
                    method="POST">
                    @csrf
                    @if (isset($kampus))
                        @method('PUT')
                    @endif
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama', isset($kampus) ? $kampus->nama : '') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            name="alamat" value="{{ old('alamat', isset($kampus) ? $kampus->alamat : '') }}" required>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="latitude">Latitude</label>
                        <input type="number" step="any" class="form-control @error('latitude') is-invalid @enderror"
                            id="latitude" name="latitude"
                            value="{{ old('latitude', isset($kampus) ? $kampus->latitude : '') }}" required>
                        @error('latitude')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="longitude">Longitude</label>
                        <input type="number" step="any" class="form-control @error('longitude') is-invalid @enderror"
                            id="longitude" name="longitude"
                            value="{{ old('longitude', isset($kampus) ? $kampus->longitude : '') }}" required>
                        @error('longitude')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($kampus) ? 'Update' : 'Create' }}</button>
                    <a href="{{ route('kampus.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
