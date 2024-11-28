@extends('backoffice.layouts.app')

@section('content')
<!-- {{$data}} -->
<div class="card">
    <div class="card-header text-rgiht">
        <a href="{{route('admin.school.create')}}" class="btn btn-primary"> Tambah Data</a>
    </div>

    <div class="card-body">
        <form action="{{route('admin.school.index')}}" class = mb-5 method="get">
            <div class = "input-grout">
                <input type="text" name = "keyword" id = "" class="form-control">
                    <button class="btn btn-primary" type="submit"> Search Data.</button>
                    <a class="btn btn-danger" href="{{route('admin.school.index')}}"> Refresh Table. </a>
            </div>
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <th width="10%">Nomor</th>
                <th width="50%">Nama Sekolah</th>
                <th>Dibuat Pada</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($data as $index => $value)
                <tr>
                    <td>
                        {{$index+1}}
                    </td>
                    <td>
                        {{$value->name}}
                    </td>
                    <td>
                        {{$value->created_at}}
                    </td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('admin.school.edit', $value->id) }}" class="btn btn-dark">Edit</a>
                        <!-- Tombol Delete -->
                        <button class="btn btn-danger delete-item" data-id="{{$value->id}}"
                            type="button">Delete</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
<!-- memanggil scrip jquery di : resources/views/backoffice/layouts/app.blade.php utk mengeksekusi button delete -->
@push('script')
<!-- .delete-item dipanggil dari coding : "btn btn-danger delete-item" line 31 -->
<!-- Swal.fire dst -> memanggil pesan/dialog box -->
<script>
    $(document).ready(function () {
        $('.delete-item').click(function () {
            let school_id = $(this).data('id')
            // untuk menampilkan id ke layar
            // console.log({cek_school_id : school_id
            // });

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "/admin/school/" + school_id+"/destroy",
                        data: {
                            _token: '{{csrf_token()}}'
                        },
                        success: function (response) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your record has been deleted.",
                                icon: "success"
                            });
                            window.location.reload();
                        },
                        error: function(error) {
                            Swal.fire({
                                title: "Ups error!",
                                text: "deleted cancelled",
                                icon: "error"
                            });
                        }
                    });
                }
            });
        });
    });

</script>
@endpush
