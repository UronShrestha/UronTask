<!-- resources/views/organization/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Organization') }}</div>

                    <div class="card-body">
                        <form action="{{route('organizations.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                            <label for="Organizationname" class="form-label">Organization Name</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                
                          <div class="mb-3">
                            <label for="ogranizationaddress" class="form-label">Organization Address</label>
                            <input type="text" class="form-control" name="address">
                          </div>
                        
                          <div class="mb-3">
                            <label for="ogranizationaddress" class="form-label">Organization Description</label>
                            <input type="text" class="form-control" name="orgdesc">
                          </div>
                          <div class="mb-3">
                            <label for="software" class="form-label">Software Used</label>
                            <select multiple class="form-control" id="software" name="software[]" required>
                                @foreach($software as $soft)
                                    <option value="{{ $soft->id }}">{{ $soft->name }}</option>
                                @endforeach
                            </select>
                        </div>
                              <div class="mb-3">
                                 <input type="submit" value="Save" class="btn btn-success">
                          </div>
                
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
