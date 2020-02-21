@extends('layouts.index')
@section('main')
@php
$ar_kategori = App\Kategori::all();
$ar_santri = App\Santri::all();
@endphp
<header class="masthead" style="background-image: url({{ asset('img/kultum.jpg') }})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Buat Kultum</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Post Content -->
<center>
  <article>
    <div class="container">
      <!-- Page Header -->
      <form method="POST" action="{{route('kultum.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

          <!-- Form Name -->
          <legend>Form Kultum</legend>

          <!-- Text input-->
          <div class="row">
            <div class="col-lg-12 mx-auto">
          <div class="form-group">
            <label class="col-md-8 control-label" for="judul">Judul</label>  
            <div class="col-md-8">
              <input id="judul" name="judul" type="text" placeholder="Judul Kultum" class="form-control input-md @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
              @error('judul')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-8 control-label" for="isi">Isi</label>  
            <div class="col-md-8">
              <textarea id="isi" name="isi" cols="40" rows="10" class="form-control @error('isi') is-invalid @enderror">{{ old('isi') }}</textarea>
              @error('isi')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <!-- Button Drop Down -->
          <div class="form-group">
            <label class="col-md-8 control-label" for="kategori">Kategori Kultum</label>
            <div class="col-md-8">
              <select name="kategori" class="custom-select @error('kategori') is-invalid @enderror">
                <option value="">-- Pilih Kategori Kultum --</option>
                @foreach($ar_kategori as $kat)
                <option value="{{ $kat['id'] }}" @if (old('kat') == $kat['id']) selected @endif> {{ $kat['nama'] }} </option>
                @endforeach
              </select>
              @error('kategori')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

              <input type="hidden" name="santri" value="@if(!empty(Auth::user()->santri_id)) {{ Auth::user()->santri_id}} @else 0 @endif">

          <div class="form-group">
            <div class="col-md-8">
              <button name="proses" type="submit" class="btn btn-secondary" 
              value="simpan"><i class="fas fa-pen"> Ubah</i></button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </article>
</center>
@endsection
