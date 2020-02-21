  @extends('layouts.index')
  @section('main')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>About Us</h1>
            <span class="subheading">This is our team.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Team Member 1 -->
      <div class="col-xl-6 col-md-9 mb-8">
        <div class="card border-0 shadow">
          <img src="{{ asset('/img/team/1.jpeg') }}" class="card-img-top about" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Muhammad Kemal Idris</h5>
            <div class="card-text">Leader, Full Stack</div>
          </div>
        </div>
      </div>
      <!-- Team Member 2 -->
      <div class="col-xl-6 col-md-9 mb-8">
        <div class="card border-0 shadow">
          <img src="{{ asset('/img/team/2.jpg') }}" class="card-img-top about" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Handi</h5>
            <div class="card-text">Design, User Experience</div>
          </div>
        </div>
      </div>
      <!-- Team Member 3 -->
      <div class="col-xl-6 col-md-9 mb-8">
        <div class="card border-0 shadow">
          <img src="{{ asset('/img/team/3.gif') }}" class="card-img-top about" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Syauqi</h5>
            <div class="card-text">Design, Backend Dev</div>
          </div>
        </div>
      </div>
      <!-- Team Member 4 -->
      <div class="col-xl-6 col-md-9 mb-8">
        <div class="card border-0 shadow">
          <img src="{{ asset('/img/team/4.png') }}" class="card-img-top about" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0">Sayed</h5>
            <div class="card-text">Presentation, Representative</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
<!-- /.container -->
@endsection