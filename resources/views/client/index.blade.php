@extends('layouts.app-layout')
@section('content')
<!-- Carousel Start -->
<div id="hero-header" class="container-fluid pt-5 hero-header mb-5">
    <div class="container">
        <div class="salom p-3">
            <h6>Yangiliklarga obuna boling</h6>
            <p style="margin-top: -2%;font-size: 14px;">Barcha so`ngi yangiliklardan xabardor bo`ling</p>
            <input type="text" placeholder="E-mailngizni kiriting" class="input_email form-control">
        </div>
        <div class="row justify-content-start">
            <div id="col-margin" class="col-10 col-lg-8">
                <h2 class="text-white animated slideInDown">2024 yil mart oyi faoliyatning asosiy ko'rsatkichlari</h2>
                <p class="fs-5 fw-medium text-white mb-4 pb-3">Sanoat zonalarida tadbirkorlik subyektlariga yer uchastkalarini <br> realizatsiya qilish tahlili</p>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
    <!-- Feature Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <img src="img/investment.png" style="width: 70%;" alt="">
                        </div>
                        <h4 style="color: #5d5e5f;" class="mb-0">15,6 %</h4>
                    </div>
                    <span>To'g'ridan-to'g'ri xorijiy investitsiyalar
                        va kreditlarning YalMdagi ulushi</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <img src="img/enterprise.png" style="width: 70%;" alt="">
                        </div>
                        <h4 style="color: #5d5e5f;" class="mb-0">14,1 mingta</h4>
                    </div>
                    <span>Xorijiy kapital ishtirokidagi
                        korxonalar son</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <img src="img/plastic.png" style="width: 70%;" alt="">
                        </div>
                        <h4 style="color: #5d5e5f;" class="mb-0">36,2 foizga oshdi</h4>
                    </div>
                    <span>Plastmassa buyumlarni
                        ishlab chiqarish</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <img src="img/concept.png" style="width: 70%;" alt="">
                        </div>
                        <h4 style="color: #5d5e5f;" class="mb-0">48,7 mingta</h4>
                    </div>
                    <span>2024 yil may oyi faoliyatning asosiy ko'rsatkichlari</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="mb-4">Maqola va tezislar</h2>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Hammasi</li>
                        <li class="mx-2" data-filter=".first">Ommabop maqolalar</li>
                        <li class="mx-2" data-filter=".second">Yangi maqolalar</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/1.png" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Ommabop maqolalar</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Gidrogel va uning qishloq xo'jaligidagi ahamiyati</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Yangi maqolalar</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Farzand tarbiyasi va kasb tanlashida ota-onalarning ishtiroki</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Ommabop maqolalar</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Aholi tomorqa yerlariga autsorsing xizmatini ko'rsatish</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Ommabop maqolalar</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Umumta'lim maktablaridagi davomat</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Yangi maqolalar</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Oilaviy tadbirkorlikni rivojlantirishning xorij tajribasi (Xitoy misolida)</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/1.png" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <!-- <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a> -->
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Yangi maqolalar</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Yer islohotlari: jahon mamlakatlari tajribasi (3-qism)</h5>
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
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/laptop.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h1 class="mb-4">Makroiqtisodiy va hududiy tadqiqotlar instituti ilmiy-tadqiqotchilarni ishga taklif qiladi</h1>
                        <p>Quyidagi talablar nomzodlar imkoniyatini oshiradi:
                            Iqtisodiyot moliya va matematika yo`nalishlarida
                            magistratura yoki PhD darajasiga ega bo'lish...</p>
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 mt-3">Batafsil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="mb-4">Yangiliklar</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item div-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/new1.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mt-5 mb-3">2024-yil Mart oyi faoliyatining asosiy ko'rsatkichlari</h4>
                            <p>MART oyida olib borilgan
                                tadqiqotlarning natijalari bilan
                                tanishishingiz mumkin</p>
                            <a class="small fw-medium" href="">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item div-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/new_may.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mt-5 mb-3">2024-yil May oyi faoliyatining asosiy ko'rsatkichlari</h4>
                            <p>MAY oyida olib borilgan
                                tadqiqotlarning natijalari bilan
                                tanishishingiz mumkin</p>
                            <a class="small fw-medium" href="">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item div-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/new_fev.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mt-5 mb-3">2024-yil Fevral oyi faoliyatining asosiy ko'rsatkichlari</h4>
                            <p>FEVRAL oyida olib borilgan
                                tadqiqotlarning natijalari bilan
                                tanishishingiz mumkin</p>
                            <a class="small fw-medium" href="">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item div-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/new_ap.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mt-5 mb-3">2024-yil Aprel oyi faoliyatining asosiy ko'rsatkichlari</h4>
                            <p>APREL oyida olib borilgan
                                tadqiqotlarning natijalari bilan
                                tanishishingiz mumkin</p>
                            <a class="small fw-medium" href="">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item div-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/new_noy.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mt-5 mb-3">2024-yil Noyabr oyi faoliyatining asosiy ko'rsatkichlari</h4>
                            <p>NOYABR oyida olib borilgan
                                tadqiqotlarning natijalari bilan
                                tanishishingiz mumkin</p>
                            <a class="small fw-medium" href="">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item div-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/new_ok.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mt-5 mb-3">2024-yil Oktabr oyi faoliyatining asosiy ko'rsatkichlari</h4>
                            <p>OKTABR oyida olib borilgan
                                tadqiqotlarning natijalari bilan
                                tanishishingiz mumkin</p>
                            <a class="small fw-medium" href="">Batafsil<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <hr class="custom-hr">

    <!-- Newsletter Start -->
    <div class="container mt-5">
        <div class="subscription-banner">
            <div class="subscription-form">
                <div class="text">
                    Yangiliklardan xabardor bo'lish uchun bizga obuna bo'ling.
                </div>
                <input type="email" placeholder="Pochta manzilingiz">
                <button type="submit">Obuna bo'lish</button>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
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
    <!-- Feature End -->
@endsection
