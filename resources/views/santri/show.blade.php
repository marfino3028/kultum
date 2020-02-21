@extends('layouts.index')
@section('main')
<!------ Include the above in your HEAD tag ---------->
<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('img/about-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Profile saya</h1>
        </div>
    </div>
</div>
</div>
</header>

@foreach($ar_santri as $santri)                
<!-- Main Content --->
<div class="container">
    <div class="card shadow mb-6">
        <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-light text-center">{{ $santri->nama }}</h4>
      </div>
      <div class="card-body">
      <div class="text-center">
        @if(!empty($santri->foto))
        <img id="poto" class="img-fluid img-thumbnail" src="{{asset('img/'.$santri->foto)}}">
        @else
        <img id="poto" class="img-fluid img-thumbnail" src="{{asset('img/no_foto.png')}}">
        @endif
    </div>
    <br>
    <div class="alert alert-dismissable alert-primary">
      Tempat Lahir : {{ $santri->tempat_lahir }} <br/>
      Tanggal Lahir : {{ $santri->tanggal_lahir }} <br/>
      Asal : {{ $santri->asal }} <br/>
      Alamat : {{ $santri->alamat }} <br/>
      Tingkatan : {{ $santri->tingkatan }} <br/>
      Kelas : {{ $santri->kelas }} <br/>
  </div>
  <center>
    <a target="_blank" rel="nofollow" href="{{ url('/pegawai') }}" 
    class="btn btn-primary btn-lg">
Kembali</a>
</center>
</div>
</div>
</div>
@endforeach
@endsection