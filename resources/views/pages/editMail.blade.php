@extends('template.second')
@section('content')
<form method="POST" action="/update_mail/{{$edit->id}}">
    @csrf
  
    <h1 class="text-center mb-5">Edit mail </h1>
  
      <div class="form-group text-center">
  
        <label for="exampleFormControlTextarea1">New mail</label>
        <input type="text" name="mail1" value="{{$edit->mail1}}">
        <button type="submit" class="btn btn-primary">Edit</button>

      </div>
  
  
    </form>
@endsection