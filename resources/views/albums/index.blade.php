@extends('layouts/admin')
@section('content')

<div class="col">
        <h1 class="display-2">View all Albums</h1>
        <a href="{{ route('albums.create') }}" class="btn btn-primary">New Album</a>
</div>

<div class="row">    
    @foreach($albums as $albums)
    
    <div class="col-md-3 mt-2 mb-2">
        <div class="card">
            <div class="cover">
                <!-- <img src="path_to_image" class="img-fluid" alt="Album Name Cover"> -->
            </div>
        <div class="card-body">
            <h5 class="card-title">{{ $albums -> title }}</h5>
            <div>{{ $albums -> release_year}}</div>
            <div>{{ $albums->artist->name }}</div>
             
            <div class="btn-control">
            <a href="{{ route('albums.edit', $albums -> id ) }}" class="btn btn-secondary">Edit</a>
            <a href="{{ route('albums.trash', $albums -> id )}}" class="btn btn-danger">Delete</a> 
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection