@extends('app')

@section('content')
    <div class="container-index">
        <h1>Comic Main</h1>
        @foreach ($comics as $comic)
        <p><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></p>
        <a href="{{route('comics.edit', $comic)}}">Edit</a>
        @endforeach
    </div>
@endsection
