@extends('backoffice.layouts.app')
@section('content')
{{$data}}
    <div class="card">
        <div class="card-body">
            <form action="{{$data != null ? route ('admin.education.update',$data->id):route('admin.education.store')}}" method="post">
                @csrf
                @if ($data != null)
                    @method('PUT')
                @endif
                <div class="mb-3">
                    
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control">
                        
                        <label for="">Jurusan</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $data->title) }}" class="form-control">
                        
                        <label for="">Mulai Tanggal</label>
                        <input type="date" name="start_date" id="start_date" value="{{$data->start_date}}" class="form-control" style="width: 150px;">
                        
                        <label for="">Sampai Tanggal</label>
                        <input type="date" name="end_date" id="end_date" value="{{$data->end_date}}" class="form-control" style="width: 150px;">

                        <label for="">Keterangan</label>
                        <input type="text" name="description" id="description" value="{{ old('description', $data->description) }}" class="form-control">
                    </div>
                    
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection