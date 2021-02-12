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
    @foreach ($dbLis as $li)
    <tr>
      <th scope="row">{{$li->id}}</th>

      <td>{{$li->liContent}}</td>
      <td>
        <form action="/delete_li/{{$li->id}}" method="POST">
          @csrf
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="/edit_li/{{$li->id}}" class="btn btn-primary">Edit</a></td>
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






<form method="POST" action="/store_li">
  @csrf

  <h1>Li generator </h1>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea name="liContent" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit">Enter</button>
  </form>




    
@endsection