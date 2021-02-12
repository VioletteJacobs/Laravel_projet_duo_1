@extends('template.second')
@section('content')
<form method="POST" action="/update_phone/{{$edit->id}}">
    @csrf
  
    <h1 class="text-center mb-5">Edit phone </h1>
  
      <div class="form-group text-center">
  
        <label for="exampleFormControlTextarea1">New phone</label>
        <input type="text" name="phone1" value="{{$edit->phone1}}">
        <button type="submit" class="btn btn-primary">Edit</button>
  
  
      </div>
  
  
    </form>
@endsection