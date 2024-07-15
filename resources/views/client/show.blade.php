@extends('layouts.app-layout')
@section('content')
<div class="clipped-image">
  
</div>
<div class="container-fluid bg-light p-3">
    <div style="display:flex;align-items: center;color:#304147;" class="container">
        <a style="color:#304147;" href="{{ url('/news') }}"><b>Yangiliklar</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">{{ $news->name }}</b>
    </div>
  </div>
    <div class="container-fluid bg-light grid-margin stretch-card mb-5">
      <div class="container bg-white p-5">
          {!!  $news->long_description  !!}
          <p><strong><i class="fa fa-eye"></i></strong> {{ $news->views }}</p>
      </div>
    </div>
@endsection
