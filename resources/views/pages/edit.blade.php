@extends('template.second')
@section('content')
<h1>Bonjour</h1>
    <form action="/update_article/{{$edit->id}}" class="mt-5" method="POST">
        @csrf
        <label for="">Titre: 
            <input type="text" name="titre" value="{{$edit->titre}}">
        </label>
        <label for="">Span: 
            <input type="text" name="span" value="{{$edit->span}}">
        </label>
        <label for="">H4: 
            <input type="text" name="h4" value="{{$edit->h4}}">
        </label>
        <label for="">P: 
            <input type="text" name="p" value="{{$edit->p}}">
        </label>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection