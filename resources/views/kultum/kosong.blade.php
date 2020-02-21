@extends('layouts.index')
@section('main')
@php
$ar_kategori = App\Kategori::all();
@endphp
<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('img/kultum.jpg') }})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Maaf, halaman yang anda cari tidak dapat ditemukan.</h1>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h3 class="text-justify">Silahkan periksa kembali kata kunci atau lihat kategori yang lain.<h3>
        </div>
    @include('kultum.sidebar')
  </article>
  @endsection
