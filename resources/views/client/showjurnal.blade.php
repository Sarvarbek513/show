@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#ffffff;" class="container">
        <a style="color:#ffffff;" href="{{ url('/journals') }}"><b>Orqaga</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">Jurnal</b>
    </div>
</div>

<div class="container-fluid bg-light grid-margin stretch-card p-5">
  <div style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);" class="container bg-white p-4 px-5">
    <h3 class="mb-3">{{ $journals->name }}</h3>
        <p style="font-size: 15px"><i class="fa fa-clock"></i> {{ $journals->created_at->toDateString()}}</p>
        <h5 class="text-center mt-5 mb-5">{{ $journals->title }}</h5>
    @if($journals->pdf)
    <a class="btn btn-primary" style="border-radius: 0px;font-family: sans-serif;" href="{{ asset($journals->pdf) }}">To`liq ekranda ko`rish</a>
        <embed src="{{ asset($journals->pdf) }}" type="application/pdf" width="100%" height="1100px" />
    @else
          
    @endif 
    <p class="mt-5"><strong><i class="fa fa-eye"></i></strong> {{ $journals->views }}</p>
    <div class="container">
      <div class="social-icons" style="display: flex;justify-content: right;gap: 5px;">
        <a href="#" class="vk" title="VK"><i class="fab fa-vk"></i></a>
        <a href="#" class="odnoklassniki" title="Odnoklassniki"><i class="fab fa-odnoklassniki"></i></a>
        <a href="#" class="telegram" title="Telegram"><i class="fab fa-telegram"></i></a>
        <a href="#" class="x" title="X"><i class="fab fa-x-twitter"></i></a>
      </div>
    </div>
  </div>
</div>
@endsection
