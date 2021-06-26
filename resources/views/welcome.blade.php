@extends('layouts.sailor')
@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('/assets/imgNgasal/hero_background2.jpg')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>KARSART</span></h2>
              <p class="animate__animated animate__fadeInUp">Karsart adalah  platform untuk mempromosikan diri, menampilkan hasil terbaik dari suatu karya, menjadi tempat mencari client untuk para artist, serta sebagai tempat membentuk reputasi bagi artist-artist di internet.</p>
              <a href="{{url('/#portfolio')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">View More</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Hero -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Art</h2>
          <p>Recent Works</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($kategoris as $kategori)
                <li data-filter=".filter-{{$kategori->nama}}">{{$kategori->nama}}</li>                
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          @foreach ($kontens as $konten)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$konten->refKategori->nama}}">
              <div class="portfolio-wrap">
                <img src=" {{ Storage::url($konten->path_gambar) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$konten->nama}}</h4>
                  <p>{{$konten->refKategori->nama}}</p>
                  <div class="portfolio-links">
                    <div>
                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                          <a><button type="button" class="btn btn-success">Like</button></a>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                          <a href="{{url('/konten/preview/'.$konten->slug)}}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><button class="btn btn-light m-1">
                            Preview
                          </button></a>
                        </div>
                        <a href="{{url('/konten/download/'.$konten->slug)}}" target="_blank"><button class="btn btn-primary">Download</button></a>
                        <div class="btn-group" role="group" aria-label="Third group">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Service</h2>
          <p>The Services We Offer</p>
        </div>

        <div class="row">
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Banyak Pengguna</a></h4>
              <p>Memiliki banyak pengguna terbanyak</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-image"></i>
              <h4><a href="#">High Quality</a></h4>
              <p>Gambar dengan resolusi tinggi dapat tersimpan</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-settings"></i>
              <h4><a href="#">Preferensi</a></h4>
              <p>Memiliki banyak preferensi kategori</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="icofont-earth"></i>
              <h4><a href="#">Global Use</a></h4>
              <p>Platform ini digunakan oleh orang di lebih dari 45 negara</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
@endsection