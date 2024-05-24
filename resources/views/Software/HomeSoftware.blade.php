

@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-10">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>

             @endif
       </div>
    <div class="row justify-content-center">
        <div class="col-10">
<a href="{{ route('software.create')}}" class="btn btn-success btn-sm mb-3">Add New Software</a>
    
   

       
<table class="table table-striped table-bordered">
    <thead>
    
    <th>SN
     
        <th> Software Name</th>
        <th>Software Url</th>
        <th>Software Description</th>
        
        <th>Delete</th>
        <th>Update</th>

    </thead>
    @foreach ($pagedSoftware as $software)
        <tr>
        
            <td>{{ $software->id}}</td>
            <td>{{ $software->name}}</td>
            <td>{{ $software->url}}</td>
            <td>{{ $software->softwaredesc}}</td>
            
            
            <td>
              <form action="{{route('software.destroy',$software->id)}}" method="POST">
                @csrf
                @method('DELETE')   
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
            <td><a href="{{route('software.edit',$software->id)}}" class="btn btn-warning btn-sm">Update</a></td>
            
        </tr>
    @endforeach
</table>
<div class="mt-4">
    {{ $pagedSoftware->links()}}  {{-- this is for pagination links--}}
</div>
        </div>
    </div>
</div>

@endsection
