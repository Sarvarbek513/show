@extends('layouts.app-layout')
@section('content')
<div class="container-fluid p-3 new-back">
    <div style="display:flex;align-items: center;color:#ffffff;" class="container">
        <a style="color:#ffffff;" href="{{ url('/') }}"><b>Asosiy</b></a>
        <i style="font-size: 11px;margin-top: 4px;" class="fa fa-chevron-right mx-2" aria-hidden="true"></i>
        <b style="margin-left: -16px;color:white;" class="nav-item nav-link">Bo`sh ish o`rinlari</b>
    </div>
</div>
<div class="container-fluid bg-white grid-margin stretch-card p-5">
    {{-- <div class="container bg-white p-4 px-5">
       
    </div> --}}
    <div class="container">
        <h3 class="pb-5">Bo`sh ish o`rinlari</h3>
        <p>4 mart, 2024</p> 
        <div class="p-5">
            <b style="color: black">Vazifalar:</b>
            <p class="pb-3" style="color: black;width:85%;">Mamlakatda bozor mexanizmlarini keng qo'llash, tadbirkorlikni rivojlantirish, investitsiya faoliyatini va raqamli
                iqtisodiyotni faollashtirish, inflyatsion jarayonlarni tahlil qilish, Yer islohatlariga oid zamonaviy bozor mexanizmlarini
                joriy qilishga ko'maklashish, hududlarni kompleks rivojlantirish, kambag'allikni qisqartirish, aholi farovonligini
                oshirish va makroiqtisodiy muvozanatni taminlashga qaratilgan ilmiy-amaliy takliflar tayyorlash.</p>
                <b style="color: black">Nomzodlar:</b>
            <p class="pb-3" style="color: black;width:85%;">-Iqtisodiyot, moliya, matematika yo'nalishlari bo'yicha <b>PhD, magistratura</b> va yoki <b>bakalavriatura</b> diplomiga ega bo'lishi;<br>
                -Matematik modellashtirish (<b>STATA, R, EViews, Matlab, Python, SPSS</b> va boshqa) dasturlaridan birida ishlay Olishi,
                iqtisodiy, moliyaviy va ijtimoiy modellashtirish metodlarini qo'llay Olishi;<br>
                -Sohalardagi iqtisodiy jarayonlarni, tegishli hajm va Sifat ko'rsatkichlarini chuqur tahlil qilish ko'nikmalarining mavjudligi;<br>
                -Institut asosiy faoliyati bilan bog'liq xalqaro reytingdagi respublika mavqeini yaxshilash sohasidagi umumiy
                bilimlarga ega bo'lishi;<br>
                -Nomzodlarni Xorijiy tillarni bilishi (ijobiy baholanadi);<br>
                -Daxldorlik hissi, toza niyat, shijoat va burchga sadoqat; tashabbuskorlik, yangilikka intiluvchanlik, jamoada sog'lom
                muhitni taminlash sifatlariga ega bo'lishi talab etiladi.<br><br>
                Tanlov 2 bosqichda (<b>test va suhbat sinovlari</b>) amalga oshiriladi. <br>
                    <b style="color: white">.....</b>Tanlovda ishtirok etish uchun Ma'lumotnomani (<b>Rezyume, CV</b>) hr@imrs.uz elektron manziliga yuborilishi so'raladi. <br>
                    <b style="color: white">.....</b><b>CV</b> ni yuklab Olish uchun havola. <br>
                    <b style="color: white">.....</b> Tanlov o'tkaziladigan manzil: Toshkent sh., Xadra massivi, 33A - uy.
            </p>
                <h4 style="text-align: center">Institutning shtatlar jadvalidagi vakant lavozimlar</h4>
                <div style="display: flex;border-radius:10px" class="bg-light p-3">
                    <h5>Lavozimlar soni</h5>
                    <h5 style="margin-left: 35%">shtat soni</h5>
                    <h5 style="margin-left: 41%">holati</h5>
                </div>
                <h5 class="mt-5 p-2" style="text-align: center;background-color:#f6f7f8;border-radius:10px">Sanoat tarmoqlarida tarkibiy o'zgarishlarni amalga oshirish loyihasi</h5>
                <div style="display: flex;border-radius:10px" class="bg-light p-3">
                    <p style="color: black">Lavozimlar soni</p>
                    <p style="margin-left: 42%;color: black">1</p>
                    <p style="margin-left: 43%;color: black">vakant</p>
                </div>
                <h5 class="mt-5 p-2" style="text-align: center;background-color:#f6f7f8;border-radius:10px">Sanoat tarmoqlarida tarkibiy o'zgarishlarni amalga oshirish loyihasi</h5>
                <div style="display: flex;border-radius:10px" class="bg-light p-3">
                    <p style="color: black">Lavozimlar soni</p>
                    <p style="margin-left: 42%;color: black">1</p>
                    <p style="margin-left: 43%;color: black">vakant</p>
                </div>
                <h5 class="mt-5 p-2" style="text-align: center;background-color:#f6f7f8;border-radius:10px">Sanoat tarmoqlarida tarkibiy o'zgarishlarni amalga oshirish loyihasi</h5>
                <div style="display: flex;border-radius:10px" class="bg-light p-3">
                    <p style="color: black">Lavozimlar soni</p>
                    <p style="margin-left: 42%;color: black">1</p>
                    <p style="margin-left: 43%;color: black">vakant</p>
                </div>
                <h5 class="mt-5 p-2" style="text-align: center;background-color:#f6f7f8;border-radius:10px">Sanoat tarmoqlarida tarkibiy o'zgarishlarni amalga oshirish loyihasi</h5>
                <div style="display: flex;border-radius:10px" class="bg-light p-3">
                    <p style="color: black">Lavozimlar soni</p>
                    <p style="margin-left: 42%;color: black">1</p>
                    <p style="margin-left: 43%;color: black">vakant</p>
                </div>
                <h5 class="mt-5 p-2" style="text-align: center;background-color:#f6f7f8;border-radius:10px">Sanoat tarmoqlarida tarkibiy o'zgarishlarni amalga oshirish loyihasi</h5>
                <div style="display: flex;border-radius:10px" class="bg-light p-3">
                    <p style="color: black">Lavozimlar soni</p>
                    <p style="margin-left: 42%;color: black">1</p>
                    <p style="margin-left: 43%;color: black">vakant</p>
                </div>
        
        </div>   
    </div>
  </div>
@endsection
