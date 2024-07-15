<x-layout>
    <x-slot:card_title>NF PARKING</x-slot>
<div class="container">
    <h1>Data Kendaraan</h1>
    <a href="#" class="btn btn-primary">Tambah Kendaraan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Pemilik</th>
                <th>No. Polisi</th>
                <th>Tahun Beli</th>
                <th>Jenis Kendaraan</th>
                <th>Kapasitas</th>
                <th>Rating</th>
                <th>Jenis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_kendaraan as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->merk }}</td>
                    <td>{{ $kendaraan->pemilik }}</td>
                    <td>{{ $kendaraan->nopol }}</td>
                    <td>{{ $kendaraan->thn_beli }}</td>
                    <td>{{ $kendaraan->jenis_kendaraan_id }}</td>
                    <td>{{ $kendaraan->kapasitas_kursi }}</td>
                    <td>{{ $kendaraan->rating }}</td>
                    <td>{{ $kendaraan->jenis_id }}</td>
                    <td>
                        <a href="{{ route('kendaraan', $kendaraan->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('kendaraan', $kendaraan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kendaraan', $kendaraan->id) }}" method="POST" style="display:inline-block;">
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
