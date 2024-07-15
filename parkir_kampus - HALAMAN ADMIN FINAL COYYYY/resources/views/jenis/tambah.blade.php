@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Jenis</h1>
        <form action="{{ route('admin.jenis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection