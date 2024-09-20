@extends('layouts.app-layout')
@section('content')

<!-- Breadcrumb Section -->
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#ffffff;" class="container">
        <a style="color:#ffffff;" href="{{ url('/news') }}"><b>Yangiliklar</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">{{ $news->name }}</b>
    </div>
</div>

<!-- News Section -->
<div class="container-fluid bg-light grid-margin stretch-card p-5">
  <div class="container bg-white p-4 px-5" style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);">
    
    @if ($news->pdf !== NULL)
      <div class="d-flex justify-content-end mb-3">
        <a style="font-size: 19px" href="{{ route('news.downloadPDF', $news->id) }}" class="btn btn-primary">
            <i class="fa fa-download"></i> Yuklab olish
        </a>
      </div>
    @endif
    
    <!-- News Title -->
    <h3>{!!  $news->name  !!}</h3>  

    <!-- Created Date -->
    <p class="mt-4" style="font-size: 15px">
      <i class="fa fa-clock"></i> {{ $news->created_at->toDateString()}}
    </p>
    
    <!-- News Image (Responsive) -->
    <div class="d-flex justify-content-center mt-5 mb-4">
      <img class="img-fluid w-50 w-md-50" src="{{ asset($news->image) }}" alt="">
    </div>

    <!-- Long Description -->
    <div>
      {!!  $news->long_description  !!}
    </div>

    <!-- Views Count -->
    <p><strong><i class="fa fa-eye"></i></strong> {{ $news->views }}</p>
    
    <!-- Social Media Icons (Responsive) -->
    <div class="container">
      <div class="social-icons d-flex justify-content-end gap-2">
        <a href="#" class="vk" title="VK"><i class="fab fa-vk"></i></a>
        <a href="#" class="odnoklassniki" title="Odnoklassniki"><i class="fab fa-odnoklassniki"></i></a>
        <a href="#" class="telegram" title="Telegram"><i class="fab fa-telegram"></i></a>
        <a href="#" class="x" title="X"><i class="fab fa-x-twitter"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- Custom Responsive Styles -->
<style>
  /* Mobile Styles */
  @media (max-width: 576px) {
    .container-fluid {
      padding: 1rem;
    }
    h3 {
      font-size: 1.5rem;
    }
    .social-icons a {
      font-size: 1.2rem;
    }
    .w-75 {
      width: 100% !important; /* Full-width image on mobile */
    }
    .p-5 {
      padding: 1.5rem !important; /* Reduce padding on smaller screens */
    }
  }

  /* Tablet Styles */
  @media (min-width: 577px) and (max-width: 768px) {
    .container-fluid {
      padding: 2rem;
    }
    h3 {
      font-size: 1.75rem;
    }
    .social-icons a {
      font-size: 1.5rem;
    }
    .w-75 {
      width: 75% !important;
    }
    .p-5 {
      padding: 2rem !important; /* Reduce padding for tablets */
    }
  }
</style>

@endsection
