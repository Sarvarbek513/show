@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#304147;" class="container">
        <a style="color:#ffffff;" href="{{ url('') }}"><b>Asosiy</b></a>
        <i style="font-size: 11px;margin-top: 4px; color:white;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('maqola') ? 'active' : '' }}">Maqola va tezislar</b>
    </div>
  </div>
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp"  style="max-width: 600px;">
                {{-- <h2 class="mb-4">{{ __('messages.Articles') }}</h2> --}}
            </div>
            <div class="row g-4 portfolio-container" >
                @foreach ($articles as $article)
                <div class="col-lg-4 col-md-6 portfolio-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="portfolio-img shadow-div rounded overflow-hidden">
                        <img class="img-fluid" src="{{ $article->image }}" alt="">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{ $article->type }}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base"><a class="maqola_a" href="{{ url('articles',$article->id) }}">{{ $article->name }}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pt-5">
            {!! $articles->withQueryString()->links('vendor.pagination.bootstrap-5') !!}
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
