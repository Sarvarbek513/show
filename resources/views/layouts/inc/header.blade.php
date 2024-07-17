<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small></small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-2">
                <i style="color: #3b3b3b;" class="bi bi-eye-fill"></i>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-3">
                <i style="color: #3b3b3b;" class="bi bi-search"></i>
            </div>
           
            <div class="h-100 d-inline-flex align-items-center me-1 mb-2">
                <div class="dropdown">
                    <button style="color: #3b3b3b"  class="btn dropdown-toggle bg-white" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        @if(session()->get('locale', 'uz') == 'uz')
                            <img src="{{ asset('img/uz.svg') }}" alt="" style="width: 20px; height: 20px;"> O`z
                        @elseif(session()->get('locale') == 'en')
                            <img src="{{ asset('img/en.svg') }}" alt="" style="width: 20px; height: 20px;"> Eng
                        @else
                            <img src="{{ asset('img/ru.svg') }}" alt="" style="width: 20px; height: 20px;"> Ру
                        @endif
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li>
                            <form method="POST" action="{{ route('change.language') }}">
                                @csrf
                                <input type="hidden" name="locale" value="uz">
                                <button type="submit" class="dropdown-item">
                                    <img src="{{ asset('img/uz.svg') }}" alt="" style="width: 20px; height: 20px;"> O`zbekcha
                                </button>
                            </form>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('change.language') }}">
                                @csrf
                                <input type="hidden" name="locale" value="en">
                                <button type="submit" class="dropdown-item">
                                    <img src="{{ asset('img/en.svg') }}" alt="" style="width: 20px; height: 20px;"> English
                                </button>
                            </form>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('change.language') }}">
                                @csrf
                                <input type="hidden" name="locale" value="ru">
                                <button type="submit" class="dropdown-item">
                                    <img src="{{ asset('img/ru.svg') }}" alt="" style="width: 20px; height: 20px;"> Русский
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<hr style="color: #353535;" class="mt-0 mb-0">
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="{{ url('') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h3 class="m-0 text-white IMRS"><b>IMRS</b></h3>
        <p style="font-size: 15px;" class="m-2"><b>Institute for Macroeconomic<br>and Regional Studies</b></p>
    </a>
    <!-- <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><img style="width: 52%;" src="img/result_logo.png" alt=""></h2>

    </a> -->
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('news') }}" class="nav-item nav-link {{ Request::is('news') ? 'active' : '' }}">{{ __('messages.NEWS') }}</a>
            <a href="{{ url('maqola') }}" class="nav-item nav-link {{ Request::is('maqola') ? 'active' : '' }}">{{ __('messages.ARTICLES') }}</a>
            <a href="{{ url('service.html') }}" class="nav-item nav-link {{ Request::is('service.html') ? 'active' : '' }}">{{ __('messages.DOCTORAL') }}</a>
            <a href="{{ url('ish') }}" class="nav-item nav-link {{ Request::is('project.html') ? 'active' : '' }}">{{ __('messages.VACANCIES') }}</a>
            
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="feature.html" class="dropdown-item">Feature</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a> -->
        </div>
    </div>
</nav>
<!-- Navbar End -->
