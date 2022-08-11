@extends('base')

@section('content')
    <div class="sub-content-image">
        <img src="{{ asset('images/local/background-landingpage.jpg') }}" class="image-as-bg">
    </div>

    <div class="sub-hero">

        <div class="black-cover"></div>

        <p class="title" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="300">
            Berita </p>
        <p class="sub" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="200"
           data-aos-duration="600">Radja Sulaiman Express</p>
        <p class="isi" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="400"
           data-aos-duration="900">Solusi layanan lengkap pengiriman barang anda </p>
    </div>




    <div class="container">
        <div class="artikel-terbaru mt-5">

            <p class="judul-content mb-5" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
               data-aos-duration="300">Berita Terbaru</p>

            <div class="row">
                @foreach($data as $v)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="item article-item" data-id="{{ $v->id }}" data-aos="fade-up"
                             data-aos-easing="ease-in-back" data-aos-delay="0"
                             data-aos-duration="1000">

                            <img src="{{$v->image}}" alt="thumbnail"/>
                            <div class="content">
                                <p class="judul">{{ ucwords($v->title) }}</p>
                                <p class="isi">{{ $v->short_description }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.article-item').on('click', function () {
                let id = this.dataset.id;
                window.location.href = '/berita/' + id;
            })
        });
    </script>
@endsection
