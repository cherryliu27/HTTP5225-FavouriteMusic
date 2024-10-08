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
            <img src="{{ $artist->image}}" class="img-fluid" alt="Album Name Cover"> 
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $artist -> name }}</h5>
            <span class="badge bg-secondary">{{ $artist -> genre }}</span>
            <div>Active Since: {{ $artist -> active }}</div>
            <div>Origin: {{ $artist -> origin }}</div>
            <div>
            <a href="{{ route('artists.albums', $artist->id) }}" class="btn btn-info">Albums</a>
            </div>
            <div class="btn-control">
            <a href="{{ route('artists.edit', $artist -> id ) }}" class="btn btn-secondary">Edit</a>
            <a href="{{ route('artists.trash', $artist -> id )}}" class="btn btn-danger">Delete</a> 
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection