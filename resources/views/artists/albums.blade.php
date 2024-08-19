@extends('layouts/admin')
@section('content')
<div class="col">
    <h1 class="display-2">{{ $artist->name }}'s Albums</h1>
    <a href="{{ route('artists.index') }}" class="btn btn-primary">Back to Artists</a>
</div>

<div class="row">
    @foreach($albums as $album)
    <div class="col-md-3 mt-2 mb-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $album->title }}</h5>
                <p class="card-text">Released: {{ $album->release_year }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection