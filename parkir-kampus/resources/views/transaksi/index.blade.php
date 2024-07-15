@extends('layout.template')
@section('title', 'Daftar Transaksi - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Transaksi</h2>
                <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">Tambah Transaksi Baru</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($transaksi->isEmpty())
                    <div class="alert alert-warning">Tidak ada data transaksi.</div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Mulai</th>
                                <th>Keluar</th>
                                <th>Kendaraan</th>
                                <th>Area Parkir</th>
                                <th>Keterangan</th>
                                <th>Biaya</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $transaksi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $transaksi->tanggal }}</td>
                                    <td>{{ $transaksi->mulai }}</td>
                                    <td>{{ $transaksi->keluar }}</td>
                                    <td>{{ $transaksi->kendaraan->merk }} ({{ $transaksi->kendaraan->nopol }})</td>
                                    <td>{{ $transaksi->areaParkir->nama }}</td>
                                    <td>{{ $transaksi->keterangan }}</td>
                                    <td>{{ $transaksi->biaya }}</td>
                                    <td>
                                        <a href="{{ route('transaksi.show', $transaksi->id) }}"
                                            class="btn btn-info btn-sm"><i class="bi bi-eye text-white"></i></a>
                                        <a href="{{ route('transaksi.edit', $transaksi->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')"><i
                                                    class="bi bi-trash3"></i></button>
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
