@extends('template.second')
@section('content')
<form method="POST" action="/update_li/{{$edit->id}}" class="mt-5">
    @csrf
  
    <h1>Li edit </h1>
  
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <input type="text" name="liContent" value="{{$edit->liContent}}">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection