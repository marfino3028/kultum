@extends('layouts.index')
@section('main')

<!-- Page Header -->

<!-- Navigation -->
  @include('layouts.navbar')

  <header class="masthead" style="background-image: url({{ asset('img/home.png') }}); background-size: cover;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Ahlan wa Sahlan</h1>
            <span class="subheading">Selamat datang di website kuliah tujuh menit santri</span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->

  <section class="page-section mb-10" id="about">
    <div class="container jumbotron">
      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-dark">Kultum Terbaru</h2>
      <div class="dropdown-divider">
      </div>
      <!-- About Section Content -->
      <div class="row">
        @foreach($ar_kultum as $kultum)
        <div class="col-sm-6 ml-auto text-justify post-preview">
          <a href="{{ route('kultum.show', $kultum->judul) }}">
            <h5 class="post-title">
              {{ $kultum->judul }}
            </h5>
            <h6 class="post-subtitle">
              {{ substr($kultum->isi, 0, 100) }}...
              <small>Selengkapnya</small>
            </h6>
          </a>
        </div>
        @endforeach
      </div>
      <div class="row more">
        <div class="col-md-auto offset-md-3 mx-auto">
          <a href="{{ url('/kultum') }}" class="btn btn-secondary">Selengkapnya</a>
        </div>
      </div>
    </div>
  </section>

  <hr>

@endsection

  