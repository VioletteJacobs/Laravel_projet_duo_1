@extends('template.main')
@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>{{$dbHome[0]->h1}}</h1>
          <ul>
            
            @foreach ($dbLis as $li)
            <li><i class="{{$dbHome[0]->check}}"></i> {{$li->liContent}}</li>

              
          @endforeach
          </ul>
          <div class="mt-3">
            <a href="#about" class="btn-get-started scrollto">{{$dbHome[0]->btn1}}</a>
            <a href="" class="btn-get-quote">{{$dbHome[0]->btn2}}</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src={{asset($dbHome[0]->img1)}} class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>{{$dbHome[0]->h2}}</h2>
            <h3>{{$dbHome[0]->h3}}</h3>
            {{-- rajouter une image --}}
            <img class="img-fluid w-50" src={{$dbHome[0]->img2}}  alt="photo de bateau sur la mer">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              {{$dbHome[0]->p1}}
            </p>
            <ul>
              @foreach ($dbLis2 as $li)
                <li><i class="{{$dbHome[0]->dblCheck}}"></i> {{$li->liContent}}</li>

                  
              @endforeach
              
            </ul>
            <p class="font-italic">
              {{$dbHome[0]->p2}}
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
@endsection