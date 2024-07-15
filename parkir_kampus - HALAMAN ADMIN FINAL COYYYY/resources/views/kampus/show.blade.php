<x-layout>
    <x-slot:card_title>NF PARKING</x-slot>
<div class="container">
    <h1>Kampus</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_kampus as $kampus)
            <tr>
                <td>{{ $kampus->id }}</td>
                <td>{{ $kampus->nama }}</td>
                <td>{{ $kampus->alamat }}</td>
                <td>{{ $kampus->latitude }}</td>
                <td>{{ $kampus->longitude }}</td>
                <td>
                    <a href="{{ route('kampus', $kampus->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('kampus', $kampus->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kampus', $kampus->id) }}" method="POST" style="display:inline-block;">
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
