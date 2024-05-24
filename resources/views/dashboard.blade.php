@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organization Used Software</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                        
                           @php
                               $sn=1
                           @endphp 
                            <tr>
                                <th>S.N</th>
                                <th>Organization Name</th>
                                <th>Address</th>
                                <th>Software Used</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($organizations as $organization)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{ $organization->name }}</td>
                                    <td>{{ $organization->address }}</td>
                                    <td>
                                        @foreach ($organization->software as $software)
                                            {{ $software->name }}
                                            @if (!$loop->last), @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
