@extends('base')

@section('content')
    <div class="content-image">
        <img src="{{ asset('images/local/background-landingpage.jpg') }}" class="image-as-bg">
    </div>

    <div class="hero">

        <div class="black-cover"></div>


        <p class="sub mb-2" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="200"
            data-aos-duration="600">Cek Resi </p>

        <div class="mb-3 ">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-0"></div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <a class="btn btn-warning mt-2 w-100" data-bs-toggle="modal" data-bs-target="#modalresi">Submit</a>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-0"></div>

            </div>
        </div>
    </div>




    <div class="container">
        <div class="artikel-terbaru mt-5">

            <p class="judul-content mb-5" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Berita Terbaru</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item " data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                        data-aos-duration="1000">

                        <img src="{{ asset('images/local/pengirimanudara.jpg') }}" />
                        <div class="content">
                            <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia adalah
                                perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan</p>
                            <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ...</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                        data-aos-duration="1000">

                        <img src="{{ asset('images/local/pengirimanlaut.jpg') }}" />
                        <div class="content">
                            <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia</p>
                            <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ...

                                adalah perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukanadalah perusahaan
                                untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukanadalah perusahaan
                                untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan
                            </p>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                        data-aos-duration="1000">

                        <img src="{{ asset('images/local/pengirimandarat.jpg') }}" />
                        <div class="content">
                            <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia</p>
                            <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ...</p>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="modal fade" id="modalresi" tabindex="-1" aria-labelledby="modalresi" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titlemodalresi">Status Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- completed -->
                    <div class="step completed">
                        <div class="v-stepper">
                            <div class="circle"></div>
                            <div class="line"></div>
                        </div>

                        <div class="content">
                            <p class="fw-bold f08 mb-0">Seller - Minggu, 31 Jul 2022 17:00</p>
                            <p class="f08">Pesanan sedang di proses oleh penjual</p>
                        </div>
                    </div>

                    <!-- active -->
                    <div class="step active">
                        <div class="v-stepper">
                            <div class="circle"></div>
                            <div class="line"></div>
                        </div>

                        <div class="content">
                            <p class="fw-bold f08 mb-0">System otomatis - Minggu, 31 Jul 2022 19:00</p>
                            <p class="f08">Pesanan sudah sampai</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    @endsection('content')
