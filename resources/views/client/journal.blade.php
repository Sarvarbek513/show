@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#304147;" class="container">
        <a style="color:#ffffff;" href="{{ url('') }}"><b>Asosiy</b></a>
        <i style="font-size: 11px;margin-top: 4px; color:white;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">Jurnal</b>
    </div>
  </div>
  <div class="container-fluid bg-light py-5">
    <div class="container">
        <div class="bg-white p-3" style="box-shadow: 0 0 40px rgba(0, 0, 0, .08);">
            <h2>Jurnallar</h2>
        </div>
        <div class="bg-white p-4 mt-4" style="box-shadow: 0 0 40px rgba(0, 0, 0, .08);">
            <div class="d-flex flex-column flex-md-row align-items-start">
                <div class="container">
                    <div class="row">
                        @foreach ($journals as $journal)
                            <div class="col-md-3 custom-card-journal">
                              <div class="card">
                                <a href="{{ url('journals', $journal->id) }}"><img src="{{ asset($journal->image) }}" class="p-2" alt="Journal 1" ></a> 
                              </div>
                              <p>{{ $journal->name }}</p>   
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection