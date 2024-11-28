@extends('backoffice.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4>Tambah Data Pendidikan</h4>
        <form action="{{ route('admin.education.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Sekolah</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Jurusan</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="start_date">Mulai</label>
                <input type="date" name="start_date" id="start_date" class="form-control" style="width: 150px;" required>
            </div>
            <div class="form-group">
                <label for="end_date">Sampai</label>
                <input type="date" name="end_date" id="end_date" class="form-control" style="width: 150px;">
            </div>
            <div class="form-group">
                <label for="description">Keterangan</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.education.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
