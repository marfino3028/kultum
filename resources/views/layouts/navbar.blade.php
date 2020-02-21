  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{{ url('/') }}}"><img src="{{ asset('/img/icon-home.png') }}" width="160px" height="50px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0" method="get" action="{{url('search')}}">
             <input class="form-control mr-sm-2" type="text" name="q" placeholder="Kata Kunci" aria-label="Search">
             <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
           </form>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ url('/kultum') }}"><i class="fas fa-home"></i>&nbsp;Kultum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-users"></i>&nbsp;Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/santri') }}"><i class="fas fa-address-book"></i>&nbsp;Data Santri</a>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        @if (Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-item"> <img class="rounded-circle img-responsive pic" src="{{ asset('img/avatar/'.Auth::user()->pictures) }}" > </div>
            <a class="dropdown-item" href="{{ route('kultum.create') }}"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Buat Kultum</a>
            <a class="dropdown-item" href="{{ url('/profile') }}"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;Profile</a>
            @if(Auth::user()->roles == 'Administrator')
            <a class="dropdown-item" href="{{ url('/users') }}"><i class="fas fa-users"></i>&nbsp;Kelola User</a>
            @endif
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>&nbsp;{{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;Akun
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>&nbsp;{{ __('Login') }}</a>
          <a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-edit fa-regular"></i>&nbsp;{{ __('Register') }}</a>
        </div>
        @endif
      </li>
    </ul>
  </div>
</div>
</nav>