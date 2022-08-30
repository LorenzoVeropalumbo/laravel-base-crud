@extends('layouts.app')

@section('main_content')
  <div class="card-single-comic">
    <div class="comic-thumb">
      <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <div class="comic-description">
      <div class="highlited-text">{{ $comic->title }}</div>
      <div>{{ $comic->description }}</div>
      <div class="highlited-text">Data di Pubblicazione: {{ $comic->sale_date }}</div> 
      <div class="highlited-text">Serie: {{ $comic->series }}</div>
      <div class="highlited-text">Prezzo: {{ $comic->price }}&euro;</div>
    </div>
  </div>
@endsection 