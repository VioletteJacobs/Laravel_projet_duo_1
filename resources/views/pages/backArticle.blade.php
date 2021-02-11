@extends('template.second')

@section('content')


<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($dbArticle as $article)
    <tr>

      <th scope="row">{{$article->id}}</th>

      <td>{{$article->titre}}</td>
      <td>{{$article->span}}</td>
      <td>{{$article->h4}}</td>
      <td>{{$article->p}}</td>
      <td><a href="/show_article/{{$article->id}}" class="btn btn-success">Show</a></td>

    </tr>

        
    @endforeach
    {{-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> --}}
  </tbody>
</table>






<form method="POST" action="/store_article">
  @csrf

  <h1 class="text-center mb-5">Article generator </h1>

    <div class="form-group text-center">

      <label for="exampleFormControlTextarea1">Titre</label>
      <input type="text" name="titre"></input>

      <label for="exampleFormControlTextarea1">Span</label>
      <input type="text" name="span"></input>

      <label for="exampleFormControlTextarea1">Subtitle</label>
      <input type="text" name="subtitle"></input>

      <label for="exampleFormControlTextarea1">Content</label>
      <input type="text" name="content"></input>

      <button class="m-auto" type="submit">Enter</button>

    </div>


  </form>




    
@endsection