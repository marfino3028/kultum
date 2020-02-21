<div class="col-md-4">
  <div class="list-group">
    <div class="list-group-item bg-info">
      <h4 class="mb-1">Kategori</h4>
    </div>
    <div class="list-group-item">
      @foreach($ar_kategori as $kategori)
      <div class="list-group">
        <form method="get" action="{{url('filter')}}">
             <input type="hidden" name="cat" value="{{ $kategori->id }}">
             <button class="list-group-item list-group-item-action bg-dark" type="submit">{{ $kategori->nama }}</button>
        </form>
          <!-- a href="{{ url('/filter/'. $kategori->id) }}" class="list-group-item list-group-item-action">{{ $kategori->nama }}</a -->
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>
</div>
</section>