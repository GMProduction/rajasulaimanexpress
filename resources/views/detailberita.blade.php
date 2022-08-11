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

            <p class="sub-judul-content mb-0" style="color: #04a3df" data-aos="fade-down" data-aos-easing="ease-in-back"
               data-aos-delay="0"
               data-aos-duration="300">{{ ucwords($data->title) }}</p>
            <p class="subr-judul-content mt-0 mb-3" data-aos="fade-down" data-aos-easing="ease-in-back"
               data-aos-delay="0"
               data-aos-duration="300">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</p>

            <div class="mb-5">
                {!! $data->content !!}
            </div>
        </div>
    </div>




@endsection('content')
