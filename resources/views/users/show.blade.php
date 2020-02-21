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

@foreach($ar_profile as $profile)                
<!-- Main Content --->
<fieldset>
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card profile-card-1 card-bg">
                    <img src="{{ asset('/img/profile-bg.jpg') }}" alt="profile-sample1" class="background"/>
                    <img src="{{ asset('/img/avatar/'.$profile->pictures) }}" alt="profile-image" class="profile "/>
                    <div class="card-content">
                    <h2 class="card-text">{{ $profile->name }}<small class="card-text">{{ $profile->roles }}</small><small class="card-text">{{ $profile->email }}</small></h2>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                    </div>
            </div>
        </div>
    </div>
</div>
    </fieldset>
@endforeach
@endsection