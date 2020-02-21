@extends('layouts.index')
@section('main')
@php
$ar_judul = ['No','Kategori','Action'];
$no = 1;
@endphp
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
<a class="btn btn-info" href="{{ url('exportKat') }}">
  <i class="fas fa-file-excel"></i> Export Tabel
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('kategori.form')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br/><br/>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  	@foreach($ar_judul as $jdl)
                      <th>{{ $jdl }}</th>
                    @endforeach
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($ar_kategori as $kat)
                  	<tr>
                  		<td>{{ $no++ }}</td>
                  		<td>{{ $kat->nama }}</td>
                  		<td>
                  			<form action="{{  route('kategori.destroy', $kat->id) }}" method="POST">
                        <a href="{{ route('kategori.show', $kat->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('kategori.edit', $kat->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
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

@endsection