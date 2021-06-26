<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">

    <h1 class="logo"><a href="{{url('/')}}">KARSART</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src=" -->

    <nav class="nav-menu d-none d-lg-block">

      <ul>
        <li class="active"><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/#portfolio')}}">Arts</a></li>
        <li><a href="{{url('/#services')}}">Services</a></li>

      </ul>

    </nav><!-- .nav-menu -->
    @guest
      <a href="{{url('/login')}}" class="get-started-btn ml-auto">Login</a>
    @else
      <a href="{{url('/home')}}" class="get-started-btn ml-auto">Dashboard</a>
    @endguest

  </div>
</header><!-- End Header -->