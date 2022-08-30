@extends('layouts.app')

@section('main_content')
  <h1>Dc Comics</h1>
  <div class="container-comics">  
    @foreach ($comics as $comic)
      <div class="card-comic">
        <div class="comic-thumb">
          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div>{{ $comic->title }}</div>
        <div>EDIZIONE: {{ $comic->series }}</div> 
        <div>PREZZO: {{ $comic->price }}&euro;</div>
        <div class="highlited-text"><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Ulteriori dettagli</a></div>
        <br> 
      </div> 
    @endforeach
  </div>
    
@endsection