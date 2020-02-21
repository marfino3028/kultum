@extends('layouts.index')
@section('main')
@php
$ar_judul = ['No','Nama','Tingkatan','Kelas','Foto','Aksi'];
$no = 1;
@endphp
<header class="masthead" style="background-image: url({{ asset('img/kultum.jpg') }})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="site-heading">
          <h1> Data Santri </h1>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Post Content -->
<section>
  <div class="container">
    <div class="row jumbotron text-dark">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                @foreach($ar_judul as $jdl)
                <th class="text-center">{{ $jdl }}</th>
                @endforeach
              </tr>
            </thead>
            <tbody>
              @foreach($ar_santri as $san)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $san->nama }}</td>
                <td>{{ $san->tingkatan }}</td>
                <td>{{ $san->kelas }}</td>
                <td class="text-center">
                  @if(!empty($san->foto))
                  <img src="{{ asset("img/".$san->foto) }}" id='poto_t'>
                  @else
                  <i class="fas fa-angry fa-9x"></i>
                  @endif
                </td>
                <td>
                  <form action="{{  route('santri.destroy', $san->id) }}" method="POST">
                    <a href="{{ route('santri.show', $san->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('santri.edit', $san->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="fas fa-eraser"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
