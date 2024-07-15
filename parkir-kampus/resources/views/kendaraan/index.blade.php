@extends('layout.template')
@section('title', 'Daftar Kendaraan - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Kendaraan</h2>
                <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Kendaraan Baru</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($kendaraan->isEmpty())
                    <div class="alert alert-warning">Tidak ada data kendaraan.</div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Merk</th>
                                <th>No. Polisi</th>
                                <th>Tahun Beli</th>
                                <th>Deskripsi</th>
                                <th>Jenis Kendaraan</th>
                                <th>Kapasitas Kursi</th>
                                <th>Rating</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kendaraan as $kendaraan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kendaraan->merk }}</td>
                                    <td>{{ $kendaraan->nopol }}</td>
                                    <td>{{ $kendaraan->thn_beli }}</td>
                                    <td>{{ $kendaraan->deskripsi }}</td>
                                    <td>{{ $kendaraan->jenisKendaraan->nama }}</td>
                                    <td>{{ $kendaraan->kapasitas_kursi }}</td>
                                    <td>{{ $kendaraan->rating }}</td>
                                    <td>
                                        <a href="{{ route('kendaraan.show', $kendaraan->id) }}"
                                            class="btn btn-info btn-sm"><i class="bi bi-eye text-white"></i></a>
                                        <a href="{{ route('kendaraan.edit', $kendaraan->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?')"><i class="bi bi-trash3"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
