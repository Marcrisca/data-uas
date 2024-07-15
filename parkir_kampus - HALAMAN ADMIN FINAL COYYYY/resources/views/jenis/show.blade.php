<x-layout>
    <x-slot:card_title>NF PARKING</x-slot>
    <div class="container">
        <h1>Jenis</h1>
        <a href="{{ route('admin.jenis.create') }}" class="btn btn-primary">Tambah Jenis</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_jenis as $jenis)
                    <tr>
                        <td>{{ $jenis->id }}</td>
                        <td>{{ $jenis->nama }}</td>
                        <td>
                            <a href="{{ route('admin.jenis.edit', $jenis->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.jenis.destroy', $jenis->id) }}" method="POST" style="display:inline-block;">
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

