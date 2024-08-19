@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Add an Album
        </h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('albums.store') }}" method="post">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="artist_id" class="form-label">Artist</label>
            <select id="artist_id" name="artist_id">
                <option value=""></option>
                <option value="1">DPR IAN</option>
                <option value="2">Ariana Grande</option>
                <option value="3">Keshi</option>
                <option value="4">Ava Max</option>
                <option value="5">The 1975</option>
                <option value="6">VIXX</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Album Title</label>
            <input type="text" class="form-control" id="title" name="title" aria- describedby="title">
        </div>
        <div class="mb-3">
            <label for="release_year" class="form-label">Release Year</label>
            <input type="text" class="form-control" id="release_year" name="release_year" aria- describedby="release_year">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection