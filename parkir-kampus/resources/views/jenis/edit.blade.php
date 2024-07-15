@extends('layout.template')

@section('title', isset($jeni) ? 'Edit Jenis - Parkir Kampus' : 'Create New Jenis - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ isset($jeni) ? 'Edit Jenis' : 'Create New Jenis' }}</h2>
                <form action="{{ isset($jeni) ? route('jenis.update', $jeni->id) : route('jenis.store') }}"
                    method="POST">
                    @csrf
                    @if (isset($jeni))
                        @method('PUT')
                    @endif
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama', isset($jeni) ? $jeni->nama : '') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($jeni) ? 'Update' : 'Create' }}</button>
                    <a href="{{ route('jenis.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
