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
        <div class="bg-white p-3 shadow-sm d-flex align-items-center">
            <h2>Doktarantlar uchun</h2>
        </div>

        @foreach ($doktarants as $doktarant)
        <div class="bg-white p-4 mt-4 shadow-sm">
            <div class="d-flex flex-column flex-md-row">
                <img class="m-2 img_dokt" src="{{ $doktarant->image }}" alt="{{ $doktarant->name }}">
                
                <div class="align-items-center mt-3 mt-md-0 ml-md-3">
                    <p class="text-dark pt-3" style="font-size: 24px;">
                        <a href="{{ url('doktarants', $doktarant->id) }}">{{ $doktarant->name }}</a>
                    </p>
                    
                    <!-- Moved the div below the name -->
                    <div class="d-flex flex-column flex-md-row">
                        <p class="mb-2 mb-md-0"><i class="fa fa-clock"></i> {{ $doktarant->created_at }}</p>
                        <p class="mx-md-5"><i class="fa fa-eye"></i> {{ $doktarant->views }}</p>
                    </div>
                </div>
                
            </div>
        </div>
        @endforeach

        {{-- <div class="pt-5">
            {!! $doktarants->withQueryString()->links('vendor.pagination.bootstrap-5') !!}
        </div> --}}
    </div>
</div>

<!-- Service End -->
@endsection
