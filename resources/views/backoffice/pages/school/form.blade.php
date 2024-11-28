@extends('backoffice.layouts.app')
@section('content')
{{$data}}
    <div class="card">
        <div class="card-body">
            <form action="{{$data != null ? route ('admin.school.update',$data->id):route('admin.school.store')}}" method="post">
                @csrf
                @if ($data != null)
                    @method('PUT')
                @endif
                <div class="mb-3">
                    
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{$data->name}}" class="form-control">
                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection