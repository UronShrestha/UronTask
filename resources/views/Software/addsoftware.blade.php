@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Add Software') }}</div>

                    <div class="card-body">
                        <form action="{{ route('software.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Software Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>

                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="softwareUrl" class="form-label">Software URL</label>
                                <input type="url" class="form-control @error('url') is-invalid @enderror" name="url" required>

                                @error('softwareurl')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                              <label for="softwaredesc" class="form-label">Software Desc </label>
                              <input type="text" class="form-control @error('softwaredesc') is-invalid @enderror" name="softwaredesc" required>

                              @error('softwaredesc')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                       <div class="mb-3">

                       

                            <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection