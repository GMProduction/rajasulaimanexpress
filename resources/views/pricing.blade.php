@extends('base')

@section('content')
    <div class="sub-content-image">
        <img src="{{ asset('images/local/background-landingpage.jpg') }}" class="image-as-bg">
    </div>

    <div class="sub-hero">

        <div class="black-cover"></div>

        <p class="title" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="300">
            Harga Terbaik Dari Kami </p>
        <p class="sub" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="200"
            data-aos-duration="600">Radja Sulaiman Express</p>
        <p class="isi" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="400"
            data-aos-duration="900">Solusi layanan lengkap pengiriman barang anda </p>
    </div>




    <div class="container">
        <div class="artikel-terbaru mt-5">

            <p class="judul-content mb-5" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Cek Harga disini</p>

            <div>

                <div class="card-rsx">

                    <div class="row">
                        <div class="col-md-2 col-sm-12 mb-1">
                            <div class="mb-1">
                                <a >Berat (Kg)</a>
                                <input type="number" class="form-control" id="berat">
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-12 mb-1">
                            <a>Mode</a>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Transportasi</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>ll
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-1">
                            <a>Kota Awal</a>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Kota</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>ll
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-1">
                            <a>Kota Tujuan</a>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Kota</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <br>
                            <a class="btn btn-warning d-block">Cek Harga</a>
                        </div>
                    </div>

                    <p class="mt-5 fw-bold">Hasil Harga</p>
                    <p class="mb-0">Berat :</p>
                    <p class="mb-0">Mode transportasi :darat</p>
                    <p class="mb-0">Dari Kota : </p>
                    <p class="mb-0">Sampai Kota :</p>
                    <p class="mb-0">Harga : <span class=" badge bg-primary">Rp 200.000</span></p>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
