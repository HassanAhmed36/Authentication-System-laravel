@extends('layout.master')
@section('main_section')
<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        </ul>
       <div class="d-flex align-items-center">
        <li class="nav-item dropdown list-unstyled">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name  ?? "guest"}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('logout') }}">logout</a></li>

            </ul>
          </li>
       </div>
      </div>
    </div>
  </nav>

  <div class="container mt-5 py-3">
    <h4 class="fw-semibold mb-3">Hello, {{ Auth::user()->name ?? 'guest' }}</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quasi voluptas modi blanditiis excepturi tenetur nihil! Aspernatur quo ipsum, blanditiis hic excepturi minus quaerat veniam delectus nihil reiciendis tenetur. Voluptatum.</p>

  </div>

@endsection
