<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">{{$dbnavfoot[0]-> titre}}</a></h1> --}}
      <h1 class="logo"><a href="index.html"></a></h1>



      <nav class="nav-menu d-none d-lg-block">
        <ul>
          @foreach ($dbNav as $li)

          <li class="active"><a href={{$li->href}}>{{$li->contenu}}</a></li>


              
          @endforeach
          {{-- <li class="active"><a href="/">{{$dbnavfoot[0]-> a1}}</a></li>
          <li><a href="/articles">{{$dbnavfoot[0]-> a2}}</a></li>
          <li><a href="/contact">{{$dbnavfoot[0]-> a3}}</a></li> --}}

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->