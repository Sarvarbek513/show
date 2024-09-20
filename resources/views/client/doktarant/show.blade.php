@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#ffffff;" class="container">
        <a style="color:#ffffff;" href="{{ url('/doktarants') }}"><b>Doktarantlar uchun</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('doktarants') ? 'active' : '' }}">{{ $doktarants->name }}</b>
    </div>
</div>

<div class="container-fluid bg-light grid-margin stretch-card p-5">
  <div style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);" class="container bg-white p-4 px-4">
    {!! $doktarants->long_description  !!}
      <p><strong><i class="fa fa-eye"></i></strong> {{ $doktarants->views }}</p>
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
