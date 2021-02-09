<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">{{$dbnavfoot[0]-> titre}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          @foreach ($dbLinav as $item)
          <li><a href="/">{{$item -> contenu}}</a></li>
          @endforeach
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->