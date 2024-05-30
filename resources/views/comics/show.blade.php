@extends('app')

@section('content')

<div class="comics-contenitore">
    <div class="comics-riga">
        <div class="comics-col">
            <img class="thumb-comic" src="{{$comic->thumb}}" alt="">
            <div class="info">
                <p>{{$comic->title}}</p>
                <p>{{$comic->description}}</p>
                <p>{{$comic->price}}</p>
                <p>{{$comic->series}}</p>
                <p>{{$comic->sale_date}}</p>
                <p>{{$comic->type}}</p>
            </div>
        </div>
    </div>   
</div>
@endsection
