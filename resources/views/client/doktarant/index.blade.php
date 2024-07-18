@extends('layouts.app-layout')
@section('content')
  <div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#304147;" class="container">
        <a style="color:#ffffff;" href="{{ url('') }}"><b>Asosiy</b></a>
        <i style="font-size: 11px;margin-top: 4px; color:white;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('') ? 'active' : '' }}">Doktarantlar uchun</b>
    </div>
  </div>
  <!-- Service Start -->
<div class="container-fluid bg-light py-5">
    <div class="container">
        <div style="display:flex;align-items:center;box-shadow: 0 0 40px rgba(0, 0, 0, .08);" class="bg-white p-3">
            <h2>Doktarantlar uchun</h2>
        </div>
        @foreach ($doktarants as $doktarant)
        <div style="box-shadow: 0 0 40px rgba(0, 0, 0, .08);" class="bg-white p-4 mt-4">
            <div style="display: flex">
                <img class="m-2" style="width: 236px;height: 155px;" src="{{ $doktarant->image }}" width="20%">
                {{-- <p class="mt-3">
                    2023-yil noyabr oyi faoliyatning asosiy ko'rsatkichlari <br>
                    <p>Sa</p>

                </p> --}}
                <div class="mt-3">
                    <p style="color: black;font-size:24px"><a href="{{ url('doktarants',$doktarant->id) }}">{{ $doktarant->name }}</a></p>
                    <div style="display: flex">
                        <p><i class="fa fa-clock"></i> {{ $doktarant->created_at }}</p>
                        <p class="mx-5"><i class="fa fa-eye"></i> {{ $doktarant->views }}</p>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
        <div class="pt-5">
            {!! $doktarants->withQueryString()->links('vendor.pagination.bootstrap-5') !!}
        </div>
    </div>
  
</div>
<!-- Service End -->
@endsection
