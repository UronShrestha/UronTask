@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Software') }}</div>

                    <div class="card-body">
                        <form action="{{ route('software.update', $software->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Software Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $software->name }}" required>
                            </div>
                
                            <div class="mb-3">
                                <label for="url" class="form-label">Software URL</label>
                                <input type="text" class="form-control" name="url" value="{{ $software->url }}" required>
                            </div>
                        
                            <div class="mb-3">
                                <label for="softwaredesc" class="form-label">Software Description</label>
                                <input type="text" class="form-control" name="softwaredesc" value="{{ $software->softwaredesc }}" required>
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Update" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
