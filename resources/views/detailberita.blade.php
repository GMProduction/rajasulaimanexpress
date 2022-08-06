@extends('base')

@section('content')
    <div class="sub-content-image">
        <img src="{{ asset('images/local/background-landingpage.jpg') }}" class="image-as-bg">
    </div>

    <div class="sub-hero">

        <div class="black-cover"></div>

        <p class="title" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="300">
             </p>
        <p class="sub" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="200"
            data-aos-duration="600">Radja Sulaiman Express</p>
        <p class="isi" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="400"
            data-aos-duration="900">Solusi layanan lengkap pengiriman barang anda </p>
    </div>




    <div class="container">
        <div class="artikel-terbaru mt-5">

            <p class="sub-judul-content mb-0" style="color: #04a3df" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Judul Berita</p>
                <p class="subr-judul-content mt-0 mb-3" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Tanggal</p>

                <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


        </div>
    </div>




@endsection('content')
