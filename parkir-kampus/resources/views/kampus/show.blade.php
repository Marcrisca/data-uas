@extends('layout.template')
@section('title', 'View Kampus - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>View Kampus</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $kampus->nama }}</h5>
                        <p class="card-text"><strong>Alamat:</strong> {{ $kampus->alamat }}</p>
                        <p class="card-text"><strong>Latitude:</strong> {{ $kampus->latitude }}</p>
                        <p class="card-text"><strong>Longitude:</strong> {{ $kampus->longitude }}</p>
                        <a href="{{ route('kampus.index') }}" class="btn btn-secondary">Back</a>
                        <a href="{{ route('kampus.edit', $kampus->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('kampus.destroy', $kampus->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this kampus?')"><i class="bi bi-trash3"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
