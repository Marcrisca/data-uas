@extends('layout.template')
@section('title', 'Daftar Area Parkir - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Area Parkir</h2>
                <a href="{{ route('area_parkir.create') }}" class="btn btn-primary mb-3">Tambah Area Parkir Baru</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($areaParkir->isEmpty())
                    <div class="alert alert-warning">Tidak ada data area parkir.</div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kampus</th>
                                <th>Kapasitas</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($areaParkir as $area)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $area->nama }}</td>
                                    <td>{{ $area->kampus->nama }}</td>
                                    <td>{{ $area->kapasitas }}</td>
                                    <td>{{ $area->keterangan }}</td>
                                    <td>
                                        <a href="{{ route('area_parkir.show', $area->id) }}" class="btn btn-info btn-sm"><i
                                                class="bi bi-eye text-white"></i></a>
                                        <a href="{{ route('area_parkir.edit', $area->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('area_parkir.destroy', $area->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus area parkir ini?')"><i
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
