@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            View all Artists
        </h1>
        <a href="{{ route('artists.create') }}" class="btn btn-primary">New Artist</a>
    </div>
</div>
<!-- <div class="row">
    @foreach($artists as $artist)
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $artist -> name }} {{ $artist -> genre }}</h5>
                <a href="{{ route('artists.edit', $artist -> id ) }}" class="card-link">Edit</a>
                <a href="{{ route('artists.trash', $artist -> id )}}" class="card-link">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div> -->
@foreach($artists as $artist)
<div class="col-md-3 mt-2 mb-2">
    <div class="card">
        <div class="cover">
            <!-- <img src="path_to_image" class="img-fluid" alt="Album Name Cover"> -->
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $artist -> name }}</h5>
            <span class="badge bg-secondary">{{ $artist -> genre }}</span>
            <p class="card-text">Albums</p>

            <!-- Check if songs are available -->
            <ul>
                <!-- Iterate through songs -->
                <li>Album 1</li>
                <li>Album 2</li>
                <!-- End iteration -->
            </ul>
            <!-- If no songs are found -->
            <!-- <p>No songs found for this album.</p> -->
             <div>
             <a href="{{ route('artists.edit', $artist -> id ) }}" class="card-link">Edit</a>
             <a href="{{ route('artists.trash', $artist -> id )}}" class="card-link">Delete</a> 
             </div>

        </div>
    </div>
</div>
@endforeach
@endsection