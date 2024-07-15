@extends('layout.template')
@section('title', 'Lihat Area Parkir - Parkir Kampus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Lihat Area Parkir</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $areaParkir->nama }}</h5>
                        <p class="card-text"><strong>Kampus:</strong> {{ $areaParkir->kampus->nama }}</p>
                        <p class="card-text"><strong>Kapasitas:</strong> {{ $areaParkir->kapasitas }}</p>
                        <p class="card-text"><strong>Keterangan:</strong> {{ $areaParkir->keterangan }}</p>
                        <a href="{{ route('area_parkir.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('area_parkir.edit', $areaParkir->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('area_parkir.destroy', $areaParkir->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus area parkir ini?')"><i
                                    class="bi bi-trash3"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
