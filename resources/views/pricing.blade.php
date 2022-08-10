@extends('base')

@section('css')
    <style>
        .select2-selection {
            height: 40px !important;
            line-height: 40px !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: black;
            font-size: 12px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #e4e4e4;
            border: 1px solid #aaa;
            border-radius: 4px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 4px;
            padding: 0 5px;
            height: 30px;
            text-align: center;
            display: flex;
            align-items: center;
        }
    </style>
@endsection

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
                        <div class="col-md-3 col-sm-12 mb-1">
                            <div class="mb-1">
                                <a>Berat (Kg)</a>
                                <input type="number" class="form-control" id="weight" value="1">
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 mb-1">
                            <a>Mode Transportasi</a>
                            <select class="form-select" aria-label="Default select example" id="platform">
                                @foreach($platform as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-1">
                            <a>Kota Asal</a>
                            <div class="form-floating mb-3">
                                <label for="origin">Kota Asal</label>
                                <select class="select2" name="origin" id="origin" style="width: 100%">
                                    <option value="">Pilih Kota Asal</option>
                                    @foreach($cities as $v)
                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mb-1">
                            <a>Kota Tujuan</a>
                            <div class="form-floating mb-3">
                                <label for="destination">Kota Tujuan</label>
                                <select class="select2" name="destination" id="destination" style="width: 100%">
                                    <option value="">Pilih Kota Tujuan</option>
                                    @foreach($cities as $v)
                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <a class="btn btn-warning d-block" id="btn-check" href="#">Cek Harga</a>
                        </div>
                    </div>

                    <div class="mt-2" id="pricing-result">
                        {{--                        <div class="spinner-border text-primary" role="status">--}}
                        {{--                            <span class="visually-hidden">Loading...</span>--}}
                        {{--                        </div>--}}

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection('content')

@section('morejs')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script>

        function elementMinWeight(weight) {
            return '<div style="min-height: 200px; display: flex; align-items: center; justify-content: center">' +
                '<p class="fw-bold" style="color: #b11f1f">Berat Minimal Pengiriman ' + weight + ' kg</p>' +
                '</div>';
        }

        function elementNotFound() {
            return '<div style="min-height: 200px; display: flex; align-items: center; justify-content: center">' +
                '<p class="fw-bold" style="color: #b11f1f">Mohon maaf, untuk sementara kami belum melayani pengiriman di daerah tujuan anda...</p>' +
                '</div>';
        }

        function elementPricing(data) {
            let total = formatUang(data['total']);
            let detail = data['data'];
            let weight = data['weight'];
            return '<div class="mt-3">' +
                '<p class="mb-0 fw-bold">Berat : <span style="font-weight: normal">' + weight + ' kg</span></p>\n' +
                '<p class="mb-0 fw-bold">Mode transportasi : <span style="font-weight: normal">' + detail['platform']['name'] + '</span></p>\n' +
                '<p class="mb-0 fw-bold">Kota Asal : <span style="font-weight: normal">' + detail['origin']['name'] + '</span></p>\n' +
                '<p class="mb-0 fw-bold">Sampai Tujuan : <span style="font-weight: normal">' + detail['destination']['name'] + '<span></p>\n' +
                '<p class="mb-0 fw-bold">Estimasi : <span style="font-weight: normal">' + detail['estimate'] + ' hari</span></p>\n' +
                '<p class="mb-0 fw-bold">Harga : <span class=" badge bg-primary">Rp ' + total + '</span></p>' +
                '</div>';
        }

        async function check_pricing() {
            let element = $('#pricing-result');
            try {
                element.empty();
                element.append(createLoader('Sedang cek harga...', 300))
                let response = await $.post('/harga/data', {
                    origin: $('#origin').val(),
                    destination: $('#destination').val(),
                    platform: $('#platform').val(),
                    weight: $('#weight').val()
                });
                if (response['status'] === 202) {
                    let type = response['payload']['type'];
                    if (type === 'weight') {
                        let min_weight = response['payload']['data'];
                        element.empty();
                        element.append(elementMinWeight(min_weight));
                    } else {
                        element.empty();
                        element.append(elementNotFound());
                    }
                } else {
                    let payload = response['payload'];
                    element.empty();
                    element.append(elementPricing(payload));
                }
                console.log(response);
            } catch (e) {
                console.log(e);
            }
        }

        $(document).ready(function () {
            $('.select2').select2();
            $('#btn-check').on('click', function (e) {
                e.preventDefault();
                check_pricing();
            })
        });
    </script>
@endsection
