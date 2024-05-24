@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Organization') }}</div>

                    <div class="card-body">
                        <form action="{{ route('organizations.update', $organization->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Organization Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $organization->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Organization Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $organization->address }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="orgdesc" class="form-label">Organization Description</label>
                                <input type="text" class="form-control" name="orgdesc" value="{{ $organization->orgdesc }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="software" class="form-label">Software Used</label>
                                <select multiple class="form-control" id="software" name="software[]" required>
                                    @foreach($software as $soft)
                                        <option value="{{ $soft->id }}" {{ in_array($soft->id, $selectedSoftware) ? 'selected' : '' }}>{{ $soft->name }}</option>
                                    @endforeach
                                </select>
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
