@extends('layout.template')
@section('title', 'Lihat Transaksi - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Lihat Transaksi</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transaksi Tanggal: {{ $transaksi->tanggal }}</h5>
                        <p class="card-text"><strong>Mulai:</strong> {{ $transaksi->mulai }}</p>
                        <p class="card-text"><strong>Keluar:</strong> {{ $transaksi->keluar }}</p>
                        <p class="card-text"><strong>Kendaraan:</strong> {{ $transaksi->kendaraan->merk }}
                            ({{ $transaksi->kendaraan->nopol }})</p>
                        <p class="card-text"><strong>Area Parkir:</strong> {{ $transaksi->areaParkir->nama }}</p>
                        <p class="card-text"><strong>Keterangan:</strong> {{ $transaksi->keterangan }}</p>
                        <p class="card-text"><strong>Biaya:</strong> {{ $transaksi->biaya }}</p>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')"><i class="bi bi-trash3"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
