@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Jenis</h1>
        <form action="{{ route('admin.jenis.update', $jenis->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $jenis->nama }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
