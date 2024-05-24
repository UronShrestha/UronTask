

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
<a href="{{ route('organizations.create')}}" class="btn btn-success btn-sm mb-3">Add New Organization</a>
      
   

       
<table class="table table-striped table-bordered">
    <thead>
        @php
        $sn=1
    @endphp 
    <th>S.N</th>
        <th>Id</th>
        <th> Organizations Name</th>
        <th>Organization Address</th>
        <th>Organization Description</th>
        
        <th>Delete</th>
        <th>Update</th>

    </thead>
    @foreach ($organizations as $organization)
        <tr>
            <td>{{$sn++;}}
            <td>{{ $organization->id}}</td>
            <td>{{ $organization->name}}</td>
            <td>{{ $organization->address}}</td>
            <td>{{ $organization->orgdesc}}</td>
            
            
            <td>
              <form action="{{route('organizations.destroy',$organization->id)}}" method="POST">
                @csrf
                @method('DELETE')   
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
            <td><a href="{{route('organizations.edit',$organization->id)}}" class="btn btn-warning btn-sm">Update</a></td>
            
        </tr>
    @endforeach
</table>
        </div>
    </div>
</div>

@endsection
