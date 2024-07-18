@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#ffffff;" class="container">
        <a style="color:#ffffff;" href="{{ url('/news') }}"><b>Yangiliklar</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">{{ $news->name }}</b>
    </div>
</div>

<div class="container-fluid bg-light grid-margin stretch-card p-5">
  <div style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);" class="container bg-white p-4 px-5">
    <div style="display: flex;float:right"><a style="font-size: 19px" href="/download/780733.pdf"><i class="fa fa-download"></i> Yuklab olish</a></div>
      {!!  $news->long_description  !!}
      <p><strong><i class="fa fa-eye"></i></strong> {{ $news->views }}</p>
  </div>
</div>
@endsection
