@extends('template.second')

@section('content')

<h1>All adress</h1>

<table class="table mt-5 pt-5" style="margin-top:200px">
    <h1 class="mt-5">All adress</h1>

  <tbody>
      
    @foreach ($dbAdress as $adress)
    <tr>

      <th scope="row">{{$adress->id}}</th>

      <td>{{$adress->adresse1}}</td>
      <td>
        <form action="/delete_adress/{{$adress->id}}" method="POST">
          @csrf
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <td><a href="/edit_adress/{{$adress->id}}" class="btn btn-primary">Edit</a></td>
      </td>
 

    </tr>

        
    @endforeach

  </tbody>
 </table>



<table class="table mt-5">
    <h1 class="mt-5">All mail</h1>

  <tbody>
      
    @foreach ($dbMail as $mail)
    <tr>

      <th scope="row">{{$mail->id}}</th>

      <td>{{$mail->mail1}}</td>
      <td>
        <form action="/delete_mail/{{$mail->id}}" method="POST">
          @csrf
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <td><a href="/edit_mail/{{$mail->id}}" class="btn btn-primary">Edit</a></td>
      </td>

    </tr>

        
    @endforeach

  </tbody>
 </table>


<table class="table mt-5">
    <h1 class="mt-5">All phone</h1>

  <tbody>
      
    @foreach ($dbPhone as $phone)
    <tr>

      <th scope="row">{{$phone->id}}</th>

      <td>{{$phone->phone1}}</td>
      <td>
        <form action="/delete_phone/{{$phone->id}}" method="POST">
          @csrf
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <td><a href="/edit_phone/{{$phone->id}}" class="btn btn-primary">Edit</a></td>
      </td>


    </tr>

        
    @endforeach

  </tbody>
 </table>






 <form method="POST" action="/store_adress">
  @csrf

  <h1 class="text-center mb-5">Modify adress </h1>

    <div class="form-group text-center">

      <label for="exampleFormControlTextarea1">New Adress</label>
      <input type="text" name="adresse1">

      <button type="submit">Enter</button>

    </div>




  </form>







<form method="POST" action="/store_mail">
  @csrf

  <h1 class="text-center mb-5">Modify mail </h1>

    <div class="form-group text-center">

      <label for="exampleFormControlTextarea1">New mail</label>
      <input type="text" name="mail1">
      <button type="submit">Enter</button>


    </div>


  </form>







<form method="POST" action="/store_phone">
  @csrf

  <h1 class="text-center mb-5">Modify phone </h1>

    <div class="form-group text-center">

      <label for="exampleFormControlTextarea1">New phone</label>
      <input type="text" name="phone1">
      <button type="submit">Enter</button>


    </div>


  </form>




    
@endsection