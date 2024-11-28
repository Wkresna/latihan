<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

@extends('backoffice.layouts.app')

@section('content')
  
<div class="card">
    <div class="card-body">
    <a href="{{ route('admin.education.create') }}" class="btn btn-primary btn-lg">Tambah Data</a>
 
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Sekolah</th>
                        <th>Jurusan</th>
                        <th>Mulai</th>
                        <th>Sampai</th>
                        <th>Keterangan</th>
                        <th>Dibuat Pada</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $value)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->start_date }}</td>
                            <td>{{ $value->end_date }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.education.edit', $value->id) }}" class="btn btn-dark">Edit</a>
                                <form action="{{ route('admin.education.destroy', $value->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>        

        </div>
    
    </div>
@endsection
