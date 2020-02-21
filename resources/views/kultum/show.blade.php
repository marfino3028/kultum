@extends('layouts.index')
@section('main')
<!-- Page Header -->
@foreach($ar_kultum as $kultum)
<header class="masthead" style="background-image: url({{ asset('img/kultum.jpg') }})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="site-heading">

        </div>
      </div>
    </div>
  </div>
</header>
<!-- Post Content -->
<article>
  <div class="container jumbotron">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2 class="text-center text-dark">{{ $kultum->judul }}</h2>
        <div class="line"></div> 
        <p class="text-justify text-big text-dark" id="kultum">{!! nl2br(e($kultum->isi)) !!}<p>
        </div>
      </div>
      <div class="line"></div>
      <center class="text-dark">
        @if (Auth::check())
        <form action="{{  route('kultum.destroy', $kultum->id) }}" method="POST">
          <a href="{{ route('kultum.edit', $kultum->id) }}" class="btn btn-warning"><i class='fas fa-pen' ></i> Edit</a>&nbsp;
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="fas fa-eraser"></i> Hapus</button>
        </form>
        @endif
        <span class="meta">Dibuat oleh
          <a href="#">{{ $kultum->santri }}</a>
          pada {{ $kultum->tanggal }}</span>
        </center>
      </div>
    </article>
    @endforeach
    @endsection
