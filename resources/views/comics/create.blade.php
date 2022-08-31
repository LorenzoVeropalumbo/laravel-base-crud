@extends('layouts.app')

@section('main_content')

  <div class="add-bg-image"> 
    
    <h1>Aggiungi un fumetto</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
    
    <form action="{{ route('comics.store') }}" method="post">
      @csrf
      <div class="input-box">
       <div class="input">
          <label for="title"></label>
          <input type="text" placeholder="Titolo: " name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="input">
          <label for="type"></label>
          <input type="text" placeholder="Type: " name="type" id="type" value="{{ old('type') }}">
        </div> 
      </div>
      <div class="input-box">
        <div class="input">
          <label for="thumb"></label>
          <input type="text" placeholder="Image URL: " name="thumb" id="thumb" value="{{ old('thumb') }}">
        </div>
        <div class="input">
          <label for="sale_date"></label>
          <input type="date" placeholder="Data di pubblicazione: " name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
        </div>
      </div>
      <div class="input-box">
        <div class="input">
          <label for="series"></label>
          <input type="text" placeholder="Serie: " name="series" id="series" value="{{ old('series') }}">
        </div>
        <div class="input">
          <label for="price"></label>
          <input type="number" step="0.01" min="0" max="10000000" placeholder="Prezzo: " name="price" id="price" value="{{ old('price') }}">
        </div>
      </div>
      <div class="input-box">
        <div class="input">
          <label for="description"></label>
          <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>
      </div>     
      <button>salva</button>
    </form>
  </div>
@endsection