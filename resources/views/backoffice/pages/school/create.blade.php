@extends('backoffice.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4>Tambah Sekolah</h4>
        <form action="{{ route('admin.school.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Sekolah</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.school.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
