@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#ffffff;" class="container">
        <a style="color:#ffffff;" href="{{ url('/maqola') }}"><b>Maqola va tezislar</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">{{ $articles->name }}</b>
    </div>
</div>

<div class="container-fluid bg-light grid-margin stretch-card p-5">
    <div class="row">
        <div class="col-md-2">
            <div class="container p-4 px-5">
                <b style="color: #0051b4">Mualifkar:</b>
                <div class="pb-3 pt-2">
                    <img class="w-25" style="border-radius: 38px;" src="{{ asset('img/testimonial-1.jpg') }}" alt="">
                    <b style="color: #0051b4;font-size:83%"> Anton Kostyuchenko</b>
                </div>
                <div class="pb-2">
                    <img class="w-25" style="border-radius: 38px;" src="{{ asset('img/testimonial-2.jpg') }}" alt="">
                    <b style="color: #0051b4;font-size:83%"> Odiljon Nazarov</b>
                </div>
                <b style="color: #0051b4;font-size:83%">O`qish vaqti</b><br>
                <b style="color: #0051b4">100 soniya</b>
            </div>
        </div>
        <div class="col-md-8">
            <div style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);" class="container bg-white p-4 px-5">
                <div style="display: grid; justify-content: end;">
                    <div>
                      <i class="fa fa-share-alt mx-2"></i>
                      <i class="fa fa-print mx-2"></i>
                      <i class="fa fa-cloud mx-2"></i>
                    </div>
                  </div>
                {!!  $articles->description  !!}
                {{-- <p><strong><i class="fa fa-eye"></i></strong> {{ $news->views }}</p> --}}
            </div>
        </div>
    </div>
</div>
@endsection