@extends('admin.base')

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
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire("Berhasil!", '{{\Illuminate\Support\Facades\Session::get('success')}}', "success")
        </script>
    @endif

    @if (\Illuminate\Support\Facades\Session::has('failed'))
        <script>
            Swal.fire("Gagal", '{{\Illuminate\Support\Facades\Session::get('failed')}}', "error")
        </script>
    @endif
    <div class="d-flex justify-content-between align-items-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/pricing">Harga</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
        </nav>
    </div>

    <div class="mt-2">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-11">
                <div class="card">
                    <div class="card-header d-flex align-items-center"
                         style="background-color: #04a3df; padding-top: 15px; padding-bottom: 15px;">
                        <i class="material-icons menu-icon me-1" style="color: whitesmoke; font-size: 18px">attach_money</i>
                        <p class="font-weight-bold mb-0" style="color: whitesmoke; font-size: 18px">Form Harga
                            Pengiriman</p>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="form-floating w-100 mb-3">
                                <label for="platform">Jenis Pengiriman</label>
                                <select class="select2" name="platform" id="platform" style="width: 100%;">
                                    @foreach($platform as $v)
                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-floating w-100 mb-3">
                                <label for="origin">Kota Asal</label>
                                <select class="select2" name="origin" id="origin" style="width: 100%;">
                                    <option value="">Pilih Kota Asal</option>
                                    @foreach($cities as $v)
                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-floating w-100 mb-3">
                                <label for="destination">Kota Tujuan</label>
                                <select class="select2" name="destination" id="destination" style="width: 100%;">
                                    <option value="">Pilih Kota Tujuan</option>
                                    @foreach($cities as $v)
                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="min_weight" name="min_weight" value="1">
                                <label for="min_weight" class="form-label">Berat Minimal (kg)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="price" name="price" value="0">
                                <label for="price" class="form-label">Harga (Rp.)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="estimate" name="estimate" value="1">
                                <label for="estimate" class="form-label">Estimasi (hari)</label>
                            </div>
                            <hr>
                            <div class="w-100 mt-2 d-flex justify-content-end">
                                <button type="submit" class="btn-utama d-flex align-items-center" id="btn-add">
                                    <i class="material-icons menu-icon me-1">check</i>
                                    <span>Simpan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endsection
