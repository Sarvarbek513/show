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
            <div style="box-shadow: 0 0 45px rgba(0, 0, 0, .08);" class="container bg-white p-4 px-4">
                <div style="display: grid; justify-content: end;">
                    <div>
                        <a id="shareIcon" class="mx-2" style="cursor: pointer;"><i id="shareIcon" class="fa fa-share-alt share-icon"></i></a>
                        <a class="mx-2" style="cursor: pointer;"><i class="fa fa-print mx-2" onclick="window.print()" style="cursor: pointer;"></i></a>
                    </div>
                </div>
                {!! $articles->description !!}
                <div class="container">
                    <div class="social-icons" style="display: flex; justify-content: right; gap: 5px;">
                        <a href="https://vk.com/share.php?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="vk" title="VK"><i class="fab fa-vk"></i></a>
                        <a href="https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl={{ urlencode(request()->fullUrl()) }}" target="_blank" class="odnoklassniki" title="Odnoklassniki"><i class="fab fa-odnoklassniki"></i></a>
                        <a href="https://t.me/share/url?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="telegram" title="Telegram"><i class="fab fa-telegram"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text=Check out this awesome page!" target="_blank" class="x" title="X"><i class="fab fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Web Share API Script -->
<script>
    document.getElementById('shareIcon').addEventListener('click', async () => {
        if (navigator.share) {
            try {
                await navigator.share({
                    title: document.title,
                    text: 'Check out this awesome page!',
                    url: window.location.href
                });
                console.log('Successfully shared');
            } catch (error) {
                console.error('Error sharing:', error);
            }
        } else {
            alert('Web Share API is not supported in your browser.');
        }
    });
</script>
@endsection
