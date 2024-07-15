@extends('layout.template')
@section('title', 'Lihat Kendaraan - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Lihat Kendaraan</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $kendaraan->merk }}</h5>
                        <p class="card-text"><strong>No. Polisi:</strong> {{ $kendaraan->nopol }}</p>
                        <p class="card-text"><strong>Tahun Beli:</strong> {{ $kendaraan->thn_beli }}</p>
                        <p class="card-text"><strong>Deskripsi:</strong> {{ $kendaraan->deskripsi }}</p>
                        <p class="card-text"><strong>Jenis Kendaraan:</strong> {{ $kendaraan->jenisKendaraan->nama }}</p>
                        <p class="card-text"><strong>Kapasitas Kursi:</strong> {{ $kendaraan->kapasitas_kursi }}</p>
                        <p class="card-text"><strong>Rating:</strong> {{ $kendaraan->rating }}</p>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?')"><i class="bi bi-trash3"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
