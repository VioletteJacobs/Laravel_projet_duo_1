@extends('template.main')
@section('content')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">
  
          <div class="row "  style="margin-top: 100px">

            @foreach ($dbArticle as $article)

              <div class="col-lg-4 mt-4 mt-lg-0">
                  <h3>{{$article->titre}}</h3>
                <div class="box">
                  <span>{{$article->span}}</span>
                  <h4>{{$article->h4}}</h4>
                  <p>{{$article->p}}</p>
                </div>
              </div>
                
            @endforeach

          


  
            {{-- <div class="col-lg-4">
                <h3>Titre1</h3>
              <div class="box">
                <span>01</span>
                <h4>Lorem Ipsum</h4>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
                <h3>Titre2</h3>
              <div class="box">
                <span>02</span>
                <h4>Repellat Nihil</h4>
                <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
                <h3>Titre3</h3>
              <div class="box">
                <span>03</span>
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
              </div>
            </div>
  
          </div>
          <div class="row">
  
            <div class="col-lg-4">
                <h3>Titre4</h3>
              <div class="box">
                <span>04</span>
                <h4>Lorem Ipsum</h4>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
                <h3>Titre5</h3>
              <div class="box">
                <span>05</span>
                <h4>Repellat Nihil</h4>
                <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
                <h3>Titre6</h3>
              <div class="box">
                <span>06</span>
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
              </div>
            </div> --}}
  
          </div>
  
        </div>
      </section><!-- End Why Us Section -->
@endsection