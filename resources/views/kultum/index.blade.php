@extends('layouts.index')
@section('main')
@php
$ar_kategori = App\Kategori::all();
$ar_santri = App\Santri::all();
@endphp
<!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Kultum Santri</h1>
            <span class="subheading">Web yang berisi kumpulan kultum santri</span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->
  <section>
  <div class="container">
    <div class="row jumbotron">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($ar_kultum as $kultum)
        <div class="post-preview">
          <a href="{{ route('kultum.show', $kultum->judul) }}">
            <h2 class="post-title">
              {{ $kultum->judul }}
            </h2>
            <h3 class="post-subtitle">
              {{ substr($kultum->isi, 0, 100) }}...
              <small>Selengkapnya</small>
            </h3>
          </a>
          <p class="post-meta">Dibuat oleh
            <a href="#">{{ $kultum->santri }}</a>
            pada {{ $kultum->tanggal }}</p>
        </div>
        <hr>
        @endforeach
        <!-- Pager -->
        <div class="clearfix">
          {{ $ar_kultum->links() }}
        </div>
      </div>
      @include('kultum.sidebar')

  <hr>

@endsection

  