

{{-- <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'cars' : '' }}" href="cars">Post</a>
            </li>

          
        </ul>
    </div>
</nav> --}}

</header>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a  class="nav-link px-2 text-secondary {{ request()->is('/') ? 'active' : '' }}"href="/">Home</a></li>
          <li><a  class="nav-link px-2 text-white {{ request()->is('about') ? 'active' : '' }}" href="about">about</a></li>
          <li><a  class="nav-link px-2 text-white {{ request()->is('cars') ? 'cars' : '' }}" href="cars">post</a></li>

        </ul>
  
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
  
        @auth
          {{auth()->user()->name}}
          <div class="text-end">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
          </div>
        @endguest
      </div>
    </div>
  </header>


