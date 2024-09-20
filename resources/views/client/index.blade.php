@extends('layouts.app-layout')
@section('content')
<!-- Carousel Start -->
<div id="hero-header" class="container-fluid pt-5 hero-header">
    <div class="container">
        <div class="salom p-3">
            <h6>{{ __('messages.subscribe') }}</h6>
            <p style="margin-top: -2%;font-size: 14px;">{{ __('messages.latest') }}</p>
            <input type="text" placeholder="{{ __('messages.enter_mail') }}" class="input_email form-control" style="border-radius: 8px">
        </div>
        <div class="row justify-content-start">
            <div id="col-margin" class="col-10 col-lg-8">
                <form action="{{ url('news/18') }}">
                    <h2 class="text-dark animated slideInDown">{{ __('messages.indicators') }}</h2>
                    <p class="fs-5 fw-medium text-dark mb-4 pb-3">{{ __('messages.plots') }}</p>
                    <button class="btn btn-primary p-4 pb-2 pt-2">{{ __('messages.detailed') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
    <!-- Feature Start -->
    <div class="container-fluid bg-light py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <img src="img/investment.png" style="width: 70%;" alt="">
                        </div>
                        <h5 style="color: #5d5e5f;" class="mb-0">15,6 %</h5>
                    </div>
                    <span>{{ __('messages.loans') }}</span>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <img src="img/enterprise.png" style="width: 70%;" alt="">
                        </div>
                        <h4 style="color: #5d5e5f;" class="mb-0">14,1 {{ __('messages.thousand') }}</h4>
                    </div>
                    <span>{{ __('messages.enterprises') }}</span>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <img src="img/plastic.png" style="width: 70%;" alt="">
                        </div>
                        <h4 style="color: #5d5e5f;" class="mb-0">36,2 {{ __('messages.percent') }}</h4>
                    </div>
                    <span>{{ __('messages.products') }}</span>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <img src="img/concept.png" style="width: 70%;" alt="">
                        </div>
                        <h4 style="color: #5d5e5f;" class="mb-0">48,7 {{ __('messages.thousand') }}</h4>
                    </div>
                    <span>{{ __('messages.performance') }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="mb-5">
                <h2>{{ __('messages.Articles') }}</h2>
            </div>
            {{-- <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 600px;">
                <h2 class="mb-4">{{ __('messages.Articles') }}</h2>
            </div> --}}
            <div class="row mt-n2">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">{{ __('messages.all') }}</li>
                        <li class="mx-2" data-filter=".first">{{ __('messages.popular') }} </li>
                        <li class="mx-2" data-filter=".second">{{ __('messages.news_articles') }} </li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeIn" data-wow-delay="0.1s">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/GIDROGEL.png" alt="">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{ __('messages.popular') }}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base"><a class="maqola_a" href="{{ url('/articles/4') }}">Gidrogel va uning qishloq xo'jaligidagi ahamiyati</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeIn" data-wow-delay="0.1s">
                    <div class="portfolio-img shadow-div rounded overflow-hidden">
                        <img class="img-fluid" src="img/farzand.png" alt="">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{ __('messages.news_articles') }}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base"><a class="maqola_a" href="{{ url('/articles/3') }}">Farzand tarbiyasi va kasb tanlashida ota-onalarning ishtiroki</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeIn" data-wow-delay="0.1s">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/aholi.png" alt="">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{ __('messages.popular') }}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base"><a class="maqola_a" href="{{ url('/articles/8') }}">Aholi tomorqa yerlariga autsorsing xizmatini ko'rsatish</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeIn" data-wow-delay="0.1s">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/Umumta'lim.png" alt="">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{ __('messages.popular') }}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base"><a class="maqola_a" href="{{ url('/articles/4') }}">Umumta'lim maktablaridagi davomat</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeIn" data-wow-delay="0.1s">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/oila.png" alt="">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{ __('messages.news_articles') }}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base"><a class="maqola_a" href="{{ url('/articles/3') }}">Oilaviy tadbirkorlikni rivojlantirishning xorij tajribasi (Xitoy misolida)</a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeIn" data-wow-delay="0.1s">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/Yer.png" alt="">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{ __('messages.news_articles') }}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base"><a class="maqola_a" href="{{ url('/articles/8') }}">Yer islohotlari: jahon mamlakatlari tajribasi (3-qism)</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/laptop.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5" >
                    <div class="p-lg-5 pe-lg-0">
                        <h1 class="mb-4">{{ __('messages.researchers') }}</h1>
                        <p>{{ __('messages.candidates') }}</p>
                        <a href="{{ url('ish') }}" class="btn btn-primary rounded-pill py-2 px-4 mt-3">{{ __('messages.detailed') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="mb-5">
                <h2>{{ __('messages.NEWS') }}</h2>
            </div>
            <div class="row g-4">
                @foreach($latestNews as $latestNew)
                <div class="col-md-6 col-lg-4">
                    <div class="service-item div-item rounded overflow-hidden">
                        <img style="width:100%" class="img-fluid" src="{{ $latestNew->image}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mt-5 mb-3">{{ $latestNew->name}}</h4>
                            <p>{{ $latestNew->description }}</p>
                            <a class="small fw-medium" href="{{ url('news',$latestNew->id) }}">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    <hr class="custom-hr">

    <!-- Newsletter Start -->
    <div class="container-fluid" style="background-color: #0051b4">
        <div style="display: flex;align-items: center;flex-wrap: wrap;height:12em" class="container px-3 subscribe-formm">
            <h5 style="color: white">
                {{ __('messages.news_detailed') }}
            </h5>
            <input class="form-control inputt" style="border-radius: 8px" type="email" placeholder="{{ __('messages.email') }}">
            <button class="btn bg-white buttonn" type="submit">{{ __('messages.subscribe') }}</button>
        </div>
    </div>
     <!-- Testimonial Start -->
     <div class="container-xxl pt-5">
        <div class="container">
            <div class="mb-5">
                <h2>{{ __('messages.directions') }}</h2>
            </div>
            {{-- <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h2 class="mb-4">Tadqiqot yo`nalishlari</h2>
            </div> --}}
            <div class="owl-carousel testimonial-carousel ">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/macroeconomics.png">
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <h3>Makroiqtisodiyot</h3>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/cashless.png">
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                       <h3>Kambag`allik</h3>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/green-economy.png">
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <h3>Yashil iqtisodiyot</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Newsletter End -->

    {{-- <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container mb-5 mt-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="mb-4">Maqola va tezislar</h2>
            </div>
            <div class="grid">
                <div class="grid-item"><i id="icon" class="bi bi-graph-up mx-3"></i> Makroiqtisodiyot</div>
                <div class="grid-item"><i id="icon" class="bi bi-cash-stack mx-3"></i> Kambag'allik</div>
                <div class="grid-item"><i id="icon" class="bi bi-credit-card mx-3"></i> Yashil iqtisodiyot</div>
                <div class="grid-item"> <i id="icon" class="bi bi-globe2 mx-3"></i> Hududlar</div>
                <div class="grid-item"> <i id="icon" class="bi bi-credit-card mx-3"></i> Xalqaro hamkorlik</div>
                <div class="grid-item"> <i id="icon" class="bi bi-columns mx-3"></i> Raqamli iqtisodiyot</div>
                <div class="grid-item"> <i id="icon" class="bi bi-credit-card mx-3"></i> Sanoat</div>
                <div class="grid-item"> <i id="icon" class="bi bi-person-lines-fill mx-3"></i> Vebinarlar</div>
                <div class="grid-item"> <i id="icon" class="bi  bi-lightbulb mx-3"></i> Innovatsiyalar</div>
                <div class="grid-item"> <i id="icon" class="bi bi-map mx-3"></i> Qishloq xo'jaligi</div>
                <div class="grid-item"> <i id="icon" class="bi bi-credit-card mx-3"></i> Doktarantura</div>
                <div class="grid-item"> <i id="icon" class="bi bi-journal mx-3"></i> Jurnal</div>
            </div>
        </div>
    </div>
    <!-- Feature End --> --}}
@endsection
