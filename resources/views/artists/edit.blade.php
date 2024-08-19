@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Update Artist
        </h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('artists.update', $artist->id) }}" method="POST">
        @csrf
        @method('PUT')
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Artist Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $artist->name }}">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $artist->genre }}">
        </div>
        <div class="mb-3">
            <label for="active" class="form-label">Active Since</label>
            <input type="text" class="form-control" id="active" name="active" value="{{ $artist->active }}">
        </div>
        <div class="mb-3">
            <label for="origin" class="form-label">Origin</label>
            <input type="text" class="form-control" id="origin" name="origin" value="{{ $artist->origin }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
