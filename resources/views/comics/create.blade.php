@extends('layouts.app')

@section('main_content')
  
 
  
  <div class="add-bg-image"> 
    
    <h1>Aggiungi un fumetto</h1>
    
    <form action="{{ route('comics.store') }}" method="post">
      @csrf
      <div class="input-box">
       <div class="input">
          <label for=""></label>
          <input type="text" placeholder="Titolo: " name="title">
        </div>
        <div class="input">
          <label for=""></label>
          <input type="text" placeholder="Type: " name="type">
        </div> 
      </div>
      <div class="input-box">
        <div class="input">
          <label for=""></label>
          <input type="text" placeholder="Image URL: " name="thumb">
        </div>
        <div class="input">
          <label for=""></label>
          <input type="date" placeholder="Data di pubblicazione: " name="sale_date">
        </div>
      </div>
      <div class="input-box">
        <div class="input">
          <label for=""></label>
          <input type="text" placeholder="Serie: " name="series">
        </div>
        <div class="input">
          <label for=""></label>
          <input type="number" step="0.01" min="0" max="10000" placeholder="Prezzo: " name="price">
        </div>
      </div>
      <div class="input-box">
        <div class="input">
          <label for=""></label>
          <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrizione: " name="description"></textarea>
        </div>
      </div>
      
      <button>Salva</button>
    </form>
  </div>
@endsection