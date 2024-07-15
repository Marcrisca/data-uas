@extends('layout.template')
@section('title', 'View Jenis - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>View Jenis</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $jeni->nama }}</h5>
                        <a href="{{ route('jenis.index') }}" class="btn btn-secondary">Back</a>
                        <a href="{{ route('jenis.edit', $jeni->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('jenis.destroy', $jeni->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this jenis?')"><i class="bi bi-trash3"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
