<div>
    <h1>Comic Main</h1>
    @foreach ($comics as $comic)
    <p><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></p>
    {{-- <p>{{$comic->description}}</p>
    <img src="{{$comic->thumb}}" alt="">
    <p>{{$comic->price}}</p>
    <p>{{$comic->series}}</p>
    <p>{{$comic->sale_date}}</p>
    <p>{{$comic->type}}</p> --}}
    @endforeach
</div>