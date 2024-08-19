@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Update Album
        </h1>
    </div>
</div>
<div class="row">
<form action="{{ route('albums.update', $album->id) }}" method="POST">
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
            <label for="artist_id" class="form-label">Artist</label>
            <select id="artist_id" name="artist_id">
            <option value="1" {{ $album->artist_id == 1 ? 'selected' : '' }}>DPR IAN</option>
            <option value="2" {{ $album->artist_id == 2 ? 'selected' : '' }}>Ariana Grande</option>
            <option value="3" {{ $album->artist_id == 3 ? 'selected' : '' }}>Keshi</option>
            <option value="4" {{ $album->artist_id == 4 ? 'selected' : '' }}>Ava Max</option>
            <option value="5" {{ $album->artist_id == 5 ? 'selected' : '' }}>The 1975</option>
            <option value="6" {{ $album->artist_id == 6 ? 'selected' : '' }}>VIXX</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Album Title</label>
            <input type="text" class="form-control" id="title" name="title" aria- describedby="title" value="{{ $album->title }}">
        </div>
        <div class="mb-3">
            <label for="release_year" class="form-label">Release Year</label>
            <input type="text" class="form-control" id="release_year" name="release_year" aria- describedby="release_year" value="{{ $album->release_year }}">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
