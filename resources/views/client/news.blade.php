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
  <div class="container-xxl py-5">
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
                            {{-- <a class="btn btn-dark" href="{{ route('news.show',$new->id) }}">Show</a> --}}
                            <a class="small fw-medium" href="{{ url('news',$new->id) }}">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $news->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
   
</div>
<!-- Service End -->
@endsection
