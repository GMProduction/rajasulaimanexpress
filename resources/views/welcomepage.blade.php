@extends('base')

@section('content')
    <div class="content-image">
        <img src="{{ asset('images/local/background-landingpage.jpg') }}" class="image-as-bg">
    </div>

    <div class="hero">

        <div class="black-cover"></div>

        <p class="title" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="300">
            Radja Sulaiman </p>
        <p class="sub mb-2" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="200"
            data-aos-duration="600">International freight & Forwarding </p>
        <p class="isi" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="400"
            data-aos-duration="900">Solusi layanan lengkap pengiriman barang anda </p>
        <p class="sub mt-3" data-aos="fade-right" data-aos-anchor-placement="center-bottom " data-aos-delay="400"
            data-aos-duration="900">Website Undrer Progess</p>
    </div>


    <div class="contact ">
        <div class="container p-3">
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-12 mbs-5" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="0">
                    <div class="d-flex ">

                        <div class="d-flex w-100 flex-column justify-content-center align-items-center">
                            <img class="icon mb-3" src="{{ asset('images/local/time.png') }}" />
                            <p class="judul">Jam Operasional</p>
                            <p class="isi">Senin - Jumat 09.00 - 17.00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mbs-5" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="100">
                    <div class="d-flex ">

                        <div class="d-flex w-100 flex-column justify-content-center align-items-center">
                            <img class="icon mb-3" src="{{ asset('images/local/phone.png') }}" />
                            <p class="judul">Phone</p>
                            <p class="isi">+62 823-3233-5533</p>
                            <p class="isi">+62 813-9129-1127</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mbs-5" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="200">
                    <div class="d-flex ">

                        <div class="d-flex w-100 flex-column justify-content-center align-items-center">
                            <img class="icon mb-3" src="{{ asset('images/local/mail.png') }}" />
                            <p class="judul">Email</p>
                            <p class="isi">rsx.srg@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mbs-5" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="300">
                    <div class="d-flex ">

                        <div class="d-flex w-100 flex-column justify-content-center align-items-center">
                            <img class="icon mb-3" src="{{ asset('images/local/address.png') }}" />
                            <p class="judul">Alamat</p>
                            <p class="isi text-center">Jl. Gatot Subroto
                                Kawasan Industri Candi
                                Blok K No 7
                                Kavling 1
                                Purwoyoso
                                Semarang
                                50184</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="layanan-kami ">
            <p class="sub-judul-content" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="500">Layanan Kami</p>
            <p class="judul-content mb-5" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Radja Sulaiman Forwarding dan Logistik</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="0" data-aos-duration="1000">
                    <div class="item ">
                        <div class="cover-black">
                            <div class="d-flex flex-column justify-content-end align-items-center h-100 ">
                                <i class="material-icons menu-icon">flight</i>
                                <p>Pengiriman Udara</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/local/pengirimanudara.jpg') }}" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-duration="1000" data-aos-delay="50">
                    <div class="item">
                        <div class="cover-black">
                            <div class="d-flex flex-column justify-content-end align-items-center h-100 ">
                                <i class="material-icons menu-icon">directions_boat</i>
                                <p>Pengiriman Laut</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/local/pengirimanlaut.jpg') }}" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-duration="1000" data-aos-delay="100">
                    <div class="item">
                        <div class="cover-black">
                            <div class="d-flex flex-column justify-content-end align-items-center h-100 ">
                                <i class="material-icons menu-icon">local_shipping</i>
                                <p>Pengiriman Darat</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/local/pengirimandarat.jpg') }}" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-duration="1000" data-aos-delay="0">
                    <div class="item">
                        <div class="cover-black">
                            <div class="d-flex flex-column justify-content-end align-items-center h-100 ">
                                <i class="material-icons menu-icon">description</i>
                                <p>Bea Cukai</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/local/beacukai.jpg') }}" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-duration="1000" data-aos-delay="50">
                    <div class="item">
                        <div class="cover-black">
                            <div class="d-flex flex-column justify-content-end align-items-center h-100 ">
                                <i class="material-icons menu-icon">inventory</i>
                                <p>Jasa Pergudangan</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/local/jasapergudangan.jpg') }}" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-duration="1000" data-aos-delay="150">
                    <div class="item">
                        <div class="cover-black">
                            <div class="d-flex flex-column justify-content-end align-items-center h-100 ">
                                <i class="material-icons menu-icon">precision_manufacturing</i>
                                <p>Project Handling</p>
                            </div>
                        </div>
                        <img src="{{ asset('images/local/ph.jpg') }}" />
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="tentang-kami pb-5">
        <div class="container ">
            <p class="sub-judul-content pt-3 invert" data-aos="fade-down" data-aos-easing="ease-in-back"
                data-aos-delay="0" data-aos-duration="500">Tentang Kami</p>
            <p class="judul-content mb-5 invert" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Mengapa Banyak Memilih Jasa Forwarding Kami</p>
            <p class="invert mb-5" style="text-align: justify;
                text-justify: inter-word;"
                data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0" data-aos-duration="500">
                PT. Kejayaan Radja Sulaiman International Freights & Forwarding menawarkan layanan pengiriman barang baik
                impor maupun ekspor secara global. Dengan jaringan mitra dan agen yang luas di seluruh dunia, kami
                dapat memberikan harga terbaik dan pilihan rute harga paling efisien.

                Sebagai salah satu perusahaan International Freight Forwarder terkemuka di Indonesia yang telah
                berpengalaman melayani jasa perdagangan ekspor dan impor lebih dari 15 tahun. Kami senantiasa
                beradaptasi dengan kebutuhan pasar sehingga menjadi International Freight Forwarder terbaik saat ini
                yang selalu berkomitmen untuk melebihi harapan para customer kami.</p>

            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-12 mbs-5" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="0" data-aos-duration="1000">
                    <div class="d-flex ">

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img class="icon mb-3" src="{{ asset('images/local/time.png') }}" />
                            <p class="judul">Memiliki Ijin Resmi</p>
                            <p class="isi">Kami telah memiliki ijin usaha lengkap untuk melakukan kegiatan usaha
                                ekspor dan impor dari kementrian perdagangan pemerintah Indonesia.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mbs-5" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="0" data-aos-duration="1000">
                    <div class="d-flex ">

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img class="icon mb-3" src="{{ asset('images/local/phone.png') }}" />
                            <p class="judul">Dukungan Layanan Pelanggan</p>
                            <p class="isi">Berkomitmen terhadap biaya yang kompetitif serta jadwal pengiriman
                                yang tepat waktu.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mbs-5" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="0" data-aos-duration="1000">
                    <div class="d-flex ">

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img class="icon mb-3" src="{{ asset('images/local/mail.png') }}" />
                            <p class="judul">Layanan Konsultasi Gratis</p>
                            <p class="isi">Staff kami dengan senang hati untuk memberikan konsultasi gratis
                                kebutuhan kargo anda.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mbs-5" data-aos="fade-up" data-aos-easing="ease-in-back"
                    data-aos-delay="0" data-aos-duration="1000">
                    <div class="d-flex ">

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img class="icon mb-3" src="{{ asset('images/local/address.png') }}" />
                            <p class="judul">Harga Kompetitif dan Tepat Waktu</p>
                            <p class="isi">Berkomitmen terhadap biaya yang kompetitif serta jadwal pengiriman
                                yang tepat waktu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="artikel-terbaru ">
        <div class="container ">
            <p class="sub-judul-content" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="500">INFORMASI</p>
            <p class="judul-content mb-5" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Artikel Terbaru</p>

            <div id="article-panel"></div>
            {{-- <div class="row"> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12"> --}}
            {{-- <div class="item " data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0" --}}
            {{-- data-aos-duration="1000"> --}}

            {{-- <img src="{{ asset('images/local/pengirimanudara.jpg') }}"/> --}}
            {{-- <div class="content"> --}}
            {{-- <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia adalah --}}
            {{-- perusahaan untuk mengatur transportasi --}}
            {{-- komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan</p> --}}
            {{-- <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi --}}
            {{-- komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ...</p> --}}

            {{-- </div> --}}
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12"> --}}
            {{-- <div class="item" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0" --}}
            {{-- data-aos-duration="1000"> --}}

            {{-- <img src="{{ asset('images/local/pengirimanlaut.jpg') }}"/> --}}
            {{-- <div class="content"> --}}
            {{-- <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia</p> --}}
            {{-- <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi --}}
            {{-- komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ... --}}

            {{-- adalah perusahaan untuk mengatur transportasi --}}
            {{-- komoditas atas permintaan pelanggan ke lokasi yang telah ditentukanadalah perusahaan --}}
            {{-- untuk mengatur transportasi --}}
            {{-- komoditas atas permintaan pelanggan ke lokasi yang telah ditentukanadalah perusahaan --}}
            {{-- untuk mengatur transportasi --}}
            {{-- komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan --}}
            {{-- </p> --}}

            {{-- </div> --}}

            {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-lg-4 col-md-6 col-sm-12"> --}}
            {{-- <div class="item" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0" --}}
            {{-- data-aos-duration="1000"> --}}

            {{-- <img src="{{ asset('images/local/pengirimandarat.jpg') }}"/> --}}
            {{-- <div class="content"> --}}
            {{-- <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia</p> --}}
            {{-- <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi --}}
            {{-- komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ...</p> --}}

            {{-- </div> --}}

            {{-- </div> --}}
            {{-- </div> --}}


            {{-- </div> --}}
        </div>
    </div>

    <div class="karir">
        <div class="container ">

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 karir">
                    <p class="judul mb-5" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                        data-aos-duration="1000">Tertarik
                        berkarir bekerja bersama dengan menjadi bagian tim terbaik kami?</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 karir">
                    <p class="isi mb-5" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                        data-aos-duration="1000">
                        Bergabung dengan tim terbaik kami yang memiliki semangat dan antusias dalam bidang
                        forwarding dan logistik</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 karir"><a class="button" data-aos="fade-up"
                        data-aos-easing="ease-in-back" data-aos-delay="0" data-aos-duration="1000">
                        KARIR
                    </a></div>
            </div>
            {{-- <div class="col-lg-4"></div> --}}

        </div>


    </div>
@endsection()

@section('morejs')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script>
        function articleElement(data) {
            return '<div class="col-lg-4 col-md-6 col-sm-12">' +
                '<div class="item article-item" data-id=' + data['id'] + ' >\n' +
                '                        <img src="' + data['image'] + '" alt="thumbnail"/>\n' +
                '                        <div class="content">\n' +
                '                            <p class="judul">' + data['title'] + '</p>\n' +
                '                            <p class="isi">' + data['short_description'] + '</p>\n' +
                '                        </div>\n' +
                '                    </div>' +
                '</div>';
        }

        function createArticleElement(data) {
            let content = '';
            $.each(data, function(k, v) {
                content += articleElement(v);
            });

            return '<div class="row">' + content + '</div>'
        }

        async function getArticle() {
            try {
                let el = $('#article-panel');
                el.empty();
                el.append(createLoader('Sedang mengunduh data artikel...', 200));
                let response = await $.get('/article/list?limit=3');
                el.empty();
                let data = response['payload'];
                el.append(createArticleElement(data));
                $('.article-item').on('click', function() {
                    let id = this.dataset.id;
                    window.location.href = '/berita/' + id;
                })
            } catch (e) {
                console.log(e)
            }
        }

        $(document).ready(function() {
            getArticle();
        });
    </script>
@endsection
