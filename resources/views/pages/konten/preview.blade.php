<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Sailor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('includes.sailor.style')

  <!-- =======================================================
  * Template Name: Sailor - v2.3.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

            <div class="col-lg-8">
              <h2 class="portfolio-title">{{$konten->judul}}</h2>
              <div class="owl-carousel portfolio-details-carousel">
                <img src=" {{ Storage::url($konten->path_gambar) }}" class="img-fluid" alt="">
              </div>
            </div>
    
            <div class="col-lg-4 portfolio-info">
              <h3>Art information</h3>
              <ul>
                <li><strong>Category</strong>: {{$konten->refKategori->nama}}</li>
                <li><strong>Artist</strong>: {{$user->name}}</li>
                <li><strong>Project date</strong>: {{ $konten->created_at->isoFormat('dddd, D MMMM Y')}}</li>
              </ul>
    
              <p><strong>Deskripsi : </strong>{!! $konten->deskripsi !!}</p>
            </div>
    
          </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('includes.sailor.script')

</body>

</html>