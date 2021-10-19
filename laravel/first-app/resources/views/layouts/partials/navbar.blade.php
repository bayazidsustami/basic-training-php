<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">Bay Blog's</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if($active =='home') active @endif" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active =='about') active @endif"" href=" /about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active == " blogs") ? 'active' : '' }}" href="/blog">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active == " categories") ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My
                Dashboard</a>
            </li>
            <li>
              <hr class="dropdown-divide">
            </li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Signout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active == " login") ? 'active' : '' }}">
            <i class="bi bi-box-arrow-in-right me-2"></i>Signin</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>