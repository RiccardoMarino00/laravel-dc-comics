@extends('app')

@section('content')
<form action="{{route('comics.update', $comic)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="contenitore-input">
        <label for="title" >Titolo</label>
        <input type="text" name="title" id="title" value="{{$comic->title}}">
    </div>

    <div class="contenitore-input">
        <label for="description" >Descrizione</label>
        <textarea  name="description" id="description">{{$comic->description}}</textarea>
    </div>

    <div class="container-input">
        <label for="price" >Prezzo</label>
        <input type="text" name="price" id="price" value="{{$comic->price}}">
    </div>

    <div class="contenitore-input">
        <label for="sale_date" >Data di vendita</label>
        <input type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}" >
    </div>

    <div class="contenitore-input">
        <label for="type" >Tipo</label>
        <input type="text" name="type" id="type" value="{{$comic->type}}" >
    </div>

    <div class="contenitore-input">
        <label for="series" >Saga</label>
        <input type="text" name="series" id="series" value="{{$comic->series}}" >
    </div>

    <div class="contenitore-input">
        <label for="thumb" >Immagine</label>
        <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}" >
    </div>
    <button>Modifica</button>
</form>
<form action="{{ route('comics.destroy', $comic) }}" method="POST">
    @method('DELETE')
    @csrf
    <button>Elimina</button>
</form>
@endsection