@extends('layouts.index')
@section('main')
@php
$ar_judul = ['No','Nama','Roles','Email','Foto','Aksi'];
$no = 1;
@endphp
<header class="masthead" style="background-image: url({{ asset('img/kultum.jpg') }})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="site-heading">
          <h1> Data User </h1>
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
              @foreach($ar_users as $users)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->roles }}</td>
                <td>{{ $users->email }}</td>
                <td class="text-center">
                  @if(!empty($users->pictures))
                  <img class="pic-table fa-9x rounded-circle" src="{{ asset('/img/avatar/'.$users->pictures) }}">
                  @else
                  <i class="fas fa-angry fa-9x"></i>
                  @endif
                </td>
                <td>
                  <form action="{{  route('users.destroy', $users->id) }}" method="POST">
                    <a href="{{ route('users.show', $users->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('users.edit', $users->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
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
