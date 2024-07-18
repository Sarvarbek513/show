@extends('layouts.app-layout')
@section('content')
  <div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#304147;" class="container">
        <a style="color:#ffffff;" href="{{ url('') }}"><b>Asosiy</b></a>
        <i style="font-size: 11px;margin-top: 4px; color:white;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">Yangiliklar</b>
    </div>
  </div>
  <!-- Service Start -->
  {{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="mb-4">Yangiliklar</h2>
        </div>
        <div class="row g-4 pb-5">
            @foreach ($news as $new)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div style="height: 100%;" class="service-item rounded overflow-hidden">
                        <img style="width: 100%" class="img-fluid" src="{{ $new->image }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mt-5 mb-3">{{ $new->name }}</h4>
                            <p>{{ $new->description}}</p>
                            <a class="small fw-medium" href="{{ url('news',$new->id) }}">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $news->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
   
</div> --}}

<div class="container-fluid bg-light py-5">
    <div class="container">
        <div style="display:flex;align-items:center;box-shadow: 0 0 40px rgba(0, 0, 0, .08);" class="bg-white p-3">
            <h2>Yangiliklar</h2>
        </div>
        @foreach ($news as $new)
        <div style="box-shadow: 0 0 40px rgba(0, 0, 0, .08);" class="bg-white p-4 mt-4">
            <div style="display: flex">
                <img class="m-2" style="width: 236px;height: 140px;" src="{{ asset($new->image) }}" width="20%">
                {{-- <p class="mt-3">
                    2023-yil noyabr oyi faoliyatning asosiy ko'rsatkichlari <br>
                    <p>Sa</p>

                </p> --}}
                <div class="mt-3">
                    <p style="color: black;font-size:24px"><a href="{{ url('news',$new->id) }}">{{ $new->name }}</a></p>
                    <div style="display: flex">
                        <p><i class="fa fa-clock"></i> {{ $new->created_at }}</p>
                        <p class="mx-5"><i class="fa fa-eye"></i> {{ $new->views }}</p>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
        <div class="pt-4">
            {!! $news->withQueryString()->links('vendor.pagination.bootstrap-5') !!}
        </div>
    </div>
  
</div>
<!-- Service End -->
@endsection
