@extends('layouts.app-layout')
@section('content')
<div class="container-fluid bg-light p-3">
    <div style="display:flex;align-items: center;color:#304147;" class="container">
        <a style="color:#304147;" href="{{ url('/news') }}"><b>Yangiliklar</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">{{ $news->name }}</b>
    </div>
  </div>
    <div class="container grid-margin stretch-card mt-5 mb-5">
       <p> {!!  $news->long_description  !!}</p>
    </div>
@endsection
