@extends('app')

@section('content')
    <div>
        <p>Rotta create</p>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="contenitore-input">
                <label for="title" >Titolo</label>
                <input type="text" name="title" id="title" placeholder="Inserisci un titolo...">
            </div>

            <div class="contenitore-input">
                <label for="description" >Descrizione</label>
                <textarea  name="description" id="description" placeholder="Inserisci una descrizione..."></textarea>
            </div>

            <div class="container-input">
                <label for="price" >Prezzo</label>
                <input type="text" name="price" id="price" placeholder="Inserisci un prezzo...">
            </div>

            <div class="contenitore-input">
                <label for="sale_date" >Data di vendita</label>
                <input type="text" name="sale_date" id="sale_date" >
            </div>

            <div class="contenitore-input">
                <label for="type" >Tipo</label>
                <input type="text" name="type" id="type" >
            </div>

            <div class="contenitore-input">
                <label for="series" >Saga</label>
                <input type="text" name="series" id="series" >
            </div>

            <div class="contenitore-input">
                <label for="thumb" >Immagine</label>
                <input type="text" name="thumb" id="thumb" >
            </div>
            
            <button>Crea</button>
        </form>
    </div>
@endsection
