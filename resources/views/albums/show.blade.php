@extends('layouts/admin')
@section('content')
<div class="col">
        <h1 class="display-2">Album</h1>
</div>

<div class="row">        
    <div class="col-md-3 mt-2 mb-2">
        <div class="card">
            <div class="cover">
                <!-- <img src="path_to_image" class="img-fluid" alt="Album Name Cover"> -->
            </div>
        <div class="card-body">
            <h5 class="card-title">{{ $album -> title }}</h5>
            <div>{{ $album -> release_year}}</div>
            <div>{{ $album->artist->name }}</div>
             
            <div class="btn-control">
             <a href="{{ route('albums.edit', $album -> id ) }}" class="card-link">Edit</a>
             <a href="{{ route('albums.trash', $album -> id )}}" class="card-link">Delete</a> 
            </div>
        </div>
    </div>
</div>
@endsection