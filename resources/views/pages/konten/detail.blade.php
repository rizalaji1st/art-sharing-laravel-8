@extends('layouts.sailor')
@section('content')
  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container mt-5">

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
@endsection