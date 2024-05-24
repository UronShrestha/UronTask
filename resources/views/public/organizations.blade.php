@extends('layouts.publicguest')

@section('content')
<style>
.flex-container {
  display: flex;
  flex-wrap: wrap;

}

.flex-container > div {
    background-color: rgb(255, 30, 49);
  margin: 20px;
  padding: 20px;
  font-size: 16px;
  text-align: center;
 
  box-sizing: border-box;
}

.flex-container > div h4 {
  margin-bottom: 15px;
  color:white;
}

.flex-container .btn {
  display: inline-block;
  margin: 10px 10px;
}
</style>

<div class="container mt-4">
    <p class="text-center" style="margin-top:70px; margin-bottom:40px;">Organization With Their Software</p>
    <div class="flex-container">
        @foreach ($organizations as $organization)
            <div>
                <h4>{{ $organization->name }}</h4>
                @foreach ($organization->software as $software)
                    <button type="button" class="btn btn-outline-info mb-2">
                        <a href="{{ $software->url }}" target="_blank" style="text-decoration: none; border: 2px solid white; background-color: white; padding: 10px; color: red;">
                            {{ $software->name }}
                        </a>
                    </button>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endsection
