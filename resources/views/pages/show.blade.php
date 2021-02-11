@extends('template.second')
@section('content')
<div class="container mt-5">
        <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$show-> titre}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$show-> Span}}</h6>
      <p class="card-text">{{$show-> h4}}</p>
      <p class="card-text">{{$show-> p}}</p>
      <a href="/backarticle" class="card-link">Go articles</a>
    </div>
  </div>
</div>

@endsection
