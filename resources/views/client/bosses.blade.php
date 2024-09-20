@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#ffffff;" class="container">
        <a style="color:#ffffff;" href="{{ url('/') }}"><b>Asosiy</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('administrations') ? 'active' : '' }}">Institut raxbaryati</b>
    </div>
</div>
<div class="container-fluid bg-light py-5">
    <div class="container p-4 p-md-5 bg-white" style="box-shadow: 0 0 40px rgba(0, 0, 0, .08);">
        
    </div>
</div>
@endsection