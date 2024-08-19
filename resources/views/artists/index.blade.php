@extends('layouts/admin')
@section('content')
<div class="col">
        <h1 class="display-2">View all Artists</h1>
        <a href="{{ route('artists.create') }}" class="btn btn-primary">New Artist</a>
</div>

<div class="row">
    @foreach($artists as $artist)
    
    <div class="col-md-3 mt-2 mb-2">
        <div class="card">
            <div class="cover">
                <!-- <img src="path_to_image" class="img-fluid" alt="Album Name Cover"> -->
            </div>
        <div class="card-body">
            <h5 class="card-title">{{ $artist -> name }}</h5>
            <span class="badge bg-secondary">{{ $artist -> genre }}</span>
            <div>
            <a href="{{ route('artists.albums', $artist->id) }}" class="btn btn-primary">Albums</a>
            </div>
             
            <div class="btn-control">
             <a href="{{ route('artists.edit', $artist -> id ) }}" class="card-link">Edit</a>
             <a href="{{ route('artists.trash', $artist -> id )}}" class="card-link">Delete</a> 
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection