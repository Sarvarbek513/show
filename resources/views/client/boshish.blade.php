@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#ffffff;" class="container">
        <a style="color:#ffffff;" href="{{ url('/') }}"><b>Asosiy</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link {{ Request::is('ish') ? 'active' : '' }}">Bo`sh ish o`rinlari</b>
    </div>
</div>

<div class="container-fluid bg-light py-5">
    <div class="container p-4 p-md-5 bg-white" style="box-shadow: 0 0 40px rgba(0, 0, 0, .08);">
        <h3 class="pb-3 pb-md-4">Bo`sh ish o`rinlari</h3>
        <p>4 mart, 2024</p> 
        <div class="p-4 p-md-5 pt-0">
            <b style="color: black">Vazifalar:</b>
            <p class="pb-3" style="color: black;width:100%;">Mamlakatda bozor mexanizmlarini keng qo'llash, tadbirkorlikni rivojlantirish, investitsiya faoliyatini va raqamli iqtisodiyotni faollashtirish, inflyatsion jarayonlarni tahlil qilish, Yer islohatlariga oid zamonaviy bozor mexanizmlarini joriy qilishga ko'maklashish, hududlarni kompleks rivojlantirish, kambag'allikni qisqartirish, aholi farovonligini oshirish va makroiqtisodiy muvozanatni taminlashga qaratilgan ilmiy-amaliy takliflar tayyorlash.</p>
            
            <b style="color: black">Nomzodlar:</b>
            <p class="pb-3" style="color: black;width:100%;">- Iqtisodiyot, moliya, matematika yo'nalishlari bo'yicha <b>PhD, magistratura</b> va yoki <b>bakalavriatura</b> diplomiga ega bo'lishi;<br>
            - Matematik modellashtirish (<b>STATA, R, EViews, Matlab, Python, SPSS</b> va boshqa) dasturlaridan birida ishlay olishi, iqtisodiy, moliyaviy va ijtimoiy modellashtirish metodlarini qo'llay olishi;<br>
            - Sohalardagi iqtisodiy jarayonlarni, tegishli hajm va sifat ko'rsatkichlarini chuqur tahlil qilish ko'nikmalarining mavjudligi;<br>
            - Institut asosiy faoliyati bilan bog'liq xalqaro reytingdagi respublika mavqeini yaxshilash sohasidagi umumiy bilimlarga ega bo'lishi;<br>
            - Xorijiy tillarni bilishi (ijobiy baholanadi);<br>
            - Daxldorlik hissi, toza niyat, shijoat va burchga sadoqat; tashabbuskorlik, yangilikka intiluvchanlik, jamoada sog'lom muhitni taminlash sifatlariga ega bo'lishi talab etiladi.<br><br>
            Tanlov 2 bosqichda (<b>test va suhbat sinovlari</b>) amalga oshiriladi. <br>
            <b>.....</b> Tanlovda ishtirok etish uchun Ma'lumotnomani (<b>Rezyume, CV</b>) hr@imrs.uz elektron manziliga yuborilishi so'raladi. <br>
            <b>.....</b> <b>CV</b> ni yuklab olish uchun havola. <br>
            <b>.....</b> Tanlov o'tkaziladigan manzil: Toshkent sh., Xadra massivi, 33A - uy.
            </p>
            
            <h3 class="text-center">Institutning shtatlar jadvalidagi vakant lavozimlar</h3>
            
            <div class="bg-light p-3 d-flex flex-column flex-md-row justify-content-between align-items-center mb-4" style="border-radius: 10px;">
                <div class="d-flexx justify-content-betweenn align-items-centerr">
                    <h5 class="left">Lavozimlar soni</h5>
                    <h5 class="middle">shtat soni</h5>
                    <h5 class="right">holati</h5>
                </div>
            </div>

            <h5 class="mt-4 p-2 text-center" style="background-color:#f6f7f8;border-radius:10px;">Sanoat tarmoqlarida tarkibiy o'zgarishlarni amalga oshirish loyihasi</h5>
            <div class="bg-light p-3 mb-4" style="border-radius:10px;">
                <div class="d-flexx justify-content-betweenn align-items-centerr">
                    <p class="left">Lavozimlar soni</p>
                    <p class="middle">1</p>
                    <p class="right">vakant</p>
                </div>
                <div class="pt-4 d-flexx justify-content-betweenn align-items-centerr">
                    <p class="left">Yangi ilmiy xodim</p>
                    <p class="middle">1</p>
                    <p class="right">vakant</p>
                </div>
            </div>

            <h5 class="mt-4 p-2 text-center" style="background-color:#f6f7f8;border-radius:10px;">Tog'konchilik va energetika sohasini rivojlantirish loyihasi</h5>
            <div class="bg-light p-3 mb-4" style="border-radius:10px;">
                <div class="d-flexx justify-content-betweenn align-items-centerr">
                    <p class="left">Lavozimlar soni</p>
                    <p class="middle">1</p>
                    <p class="right">vakant</p>
                </div>
                <div class="pt-4 d-flexx justify-content-betweenn align-items-centerr">
                    <p class="left">Yangi ilmiy xodim</p>
                    <p class="middle">1</p>
                    <p class="right">vakant</p>
                </div>
            </div>

            <h5 class="mt-4 p-2 text-center" style="background-color:#f6f7f8;border-radius:10px;">Investitsiya va siyosatni shakllantirish loyihasi</h5>
            <div class="bg-light p-3 mb-4" style="border-radius:10px;">
                <div class="d-flexx justify-content-betweenn align-items-centerr">
                    <p class="left">Lavozimlar soni</p>
                    <p class="middle">1</p>
                    <p class="right">vakant</p>
                </div>
                <div class="pt-4 d-flexx justify-content-betweenn align-items-centerr">
                    <p class="left">Yangi ilmiy xodim</p>
                    <p class="middle">1</p>
                    <p class="right">vakant</p>
                </div>
            </div>

            <h5 class="mt-4 p-2 text-center" style="background-color:#f6f7f8;border-radius:10px;">Biznes muhiti yaxshilash va tadbirkorlikni rivojlantirish loyihasi</h5>
            <div class="bg-light p-3 mb-4" style="border-radius:10px;">
                <div class="d-flexx justify-content-betweenn align-items-centerr">
                    <p class="left">Lavozimlar soni</p>
                    <p class="middle">1</p>
                    <p class="right">vakant</p>
                </div>
                <div class="pt-4 d-flexx justify-content-betweenn align-items-centerr">
                    <p class="left">Yangi ilmiy xodim</p>
                    <p class="middle">1</p>
                    <p class="right">vakant</p>
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection
