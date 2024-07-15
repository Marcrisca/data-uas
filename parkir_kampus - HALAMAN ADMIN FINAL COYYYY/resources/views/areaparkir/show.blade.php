<x-layout>
    <x-slot:card_title>NF PARKING</x-slot>
    <div class="container">
        <h1>Area Parkir</h1>
        <a href="{{ route('areaparkir') }}" class="btn btn-primary">Tambah Area Parkir</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Kapasitas</th>
                    <th>Keterangan</th>
                    <th>ID Kampus</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_areaparkir as $areaParkir)
                    <tr>
                        <td>{{ $areaParkir->id }}</td>
                        <td>{{ $areaParkir->nama }}</td>
                        <td>{{ $areaParkir->lokasi }}</td>
                        <td>{{ $areaParkir->kapasitas }}</td>
                        <td>{{ $areaParkir->keterangan }}</td>
                        <td>{{ $areaParkir->kampus_id }}</td>
                        <td>
                            <a href="{{ route('areaparkir', $areaParkir->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('areaparkir', $areaParkir->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('areaparkir', $areaParkir->id) }}" method="POST" style="display:inline-block;">
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
