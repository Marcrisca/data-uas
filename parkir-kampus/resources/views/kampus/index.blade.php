@extends('layout.template')
@section('title', 'Kampus List - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Kampus List</h2>
                <a href="{{ route('kampus.create') }}" class="btn btn-primary mb-3">Create New Kampus</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($kampus->isEmpty())
                    <div class="alert alert-warning">Tidak ada data kampus.</div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kampus as $k)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $k->nama }}</td>
                                    <td>{{ $k->alamat }}</td>
                                    <td>{{ $k->latitude }}</td>
                                    <td>{{ $k->longitude }}</td>
                                    <td>
                                        <a href="{{ route('kampus.show', $k->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye text-white"></i></a>
                                        <a href="{{ route('kampus.edit', $k->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('kampus.destroy', $k->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this kampus?')"><i class="bi bi-trash3"></i></button>
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
