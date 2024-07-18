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
  <div style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);" class="container bg-white p-4 px-5">
    {!! $doktarants->long_description  !!}
      <p><strong><i class="fa fa-eye"></i></strong> {{ $doktarants->views }}</p>
  </div>
</div>
@endsection
