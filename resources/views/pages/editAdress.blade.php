@extends('template.second')
@section('content')
<form method="POST" action="/update_adress/{{$edit->id}}">
    @csrf
  
    <h1 class="text-center mb-5">Edit adress </h1>
  
      <div class="form-group text-center">
  
        <label for="exampleFormControlTextarea1">New Adress</label>
        <input type="text" name="adresse1" value={{$edit->adresse1}}>
  
        <button type="submit">Edit</button>
  
      </div>
  
  
  
  
    </form>
    
@endsection