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
                    <textarea class="form-control" id="no_track" rows="3"></textarea>
                    <a class="btn btn-warning mt-2 w-100" href="#" id="btn-track">Submit</a>
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

                        <img src="{{ asset('images/local/pengirimanudara.jpg') }}"/>
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

                        <img src="{{ asset('images/local/pengirimanlaut.jpg') }}"/>
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

                        <img src="{{ asset('images/local/pengirimandarat.jpg') }}"/>
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
                    <h5 class="modal-title" id="titlemodalresi">Nomor Resi : <span id="track_id"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="result-panel">
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('morejs')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script>

        function createElement(data) {
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            let el = '';
            let logs = data['logs'];
            let code = data['code'];
            $.each(logs, function (k, v) {
                let status = k === 0 ? 'completed' : 'active';
                let recorded_at = new Date(v['recorded_at']);
                let time = recorded_at.getDate() + ' ' + months[recorded_at.getMonth()] + ' ' + recorded_at.getFullYear() + ', ' + recorded_at.getHours() + ':' + recorded_at.getMinutes().toString().padStart(2, '0');
                console.log(time);
                el += '<div class="step ' + status + '">' +
                    '<div class="v-stepper">\n' +
                    '<div class="circle"></div>\n' +
                    '<div class="line"></div>\n' +
                    '</div>\n' +
                    '<div class="content">\n' +
                    '<p class="fw-bold f08 mb-0">' + time + '</p>\n' +
                    '<p class="f08">' + v['message'] + '</p>\n' +
                    '</div>\n' +
                    '</div>';
            });
            return el;
        }

        function createEmpty() {
            return '<div class="d-flex flex-column align-items-center justify-content-center" style="height: 200px">' +

                '<div>Nomor resi salah...</div>' +
                '</div>'
        }
        async function track() {
            try {
                let id = $('#no_track').val();
                let el = $('#result-panel');
                $('#track_id').html(id);
                el.empty();
                el.append(createLoader('Sedang mengunduh data pengiriman...', 200));
                let response = await $.post('/cekresi/data', {
                    id
                });
                el.empty();
                let data = response['payload']['data'];
                if (data !== undefined) {
                    el.append(createElement(data));
                }else {
                    el.append(createEmpty())
                }
                console.log(response);
            } catch (e) {
                ErrorAlert('Ooops', 'Sepertinya sedang terjadi masalah di server kami...');
            }
        }

        $(document).ready(function () {
            $('#btn-track').on('click', function (e) {
                e.preventDefault();
                $('#modalresi').modal('show');
            });

            $('#modalresi').on('show.bs.modal', function () {
                track();
            })
        })
    </script>
@endsection
