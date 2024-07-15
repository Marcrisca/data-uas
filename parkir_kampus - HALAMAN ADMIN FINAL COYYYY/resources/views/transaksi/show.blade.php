<x-layout>
    <x-slot:card_title>NF PARKING</x-slot>
    <div class="container">
        <h1>Transaksi</h1>
        <a href="{{ route('transaksi') }}" class="btn btn-primary">Tambah Transaksi</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Mulai</th>
                    <th>Akhir</th>
                    <th>Keterangan</th>
                    <th>Biaya</th>
                    <th>Kendaraan</th>
                    <th>Area Parkir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_transaksi as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->tanggal }}</td>
                        <td>{{ $transaksi->mulai }}</td>
                        <td>{{ $transaksi->akhir }}</td>
                        <td>{{ $transaksi->keterangan }}</td>
                        <td>{{ $transaksi->biaya }}</td>
                        <td>{{ $transaksi->kendaraan_id}}</td>
                        <td>{{ $transaksi->area_parkir_id }}</td>
                        <td>
                            <a href="{{ route('transaksi', $transaksi->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('transaksi', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('transaksi', $transaksi->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

