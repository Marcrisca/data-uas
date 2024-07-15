@extends('layout.template')
@section('title', 'Jenis List - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Jenis List</h2>
                <a href="{{ route('jenis.create') }}" class="btn btn-primary mb-3">Create New Jenis</a>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($jenis->isEmpty())
                    <div class="alert alert-warning">Tidak ada data jenis kendaraan.</div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenis as $j)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $j->nama }}</td>
                                    <td>
                                        <a href="{{ route('jenis.show', $j->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye text-white"></i></a>
                                        <a href="{{ route('jenis.edit', $j->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('jenis.destroy', $j->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this jenis?')"><i class="bi bi-trash3"></i></button>
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
