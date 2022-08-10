@extends('admin.base')

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
                <li class="breadcrumb-item"><a href="/platform">Mode Transport</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="mt-2">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-11">
                <div class="card">
                    <div class="card-header d-flex align-items-center"
                         style="background-color: #04a3df; padding-top: 15px; padding-bottom: 15px;">
                        <i class="material-icons menu-icon me-1" style="color: whitesmoke; font-size: 18px">flight</i>
                        <p class="font-weight-bold mb-0" style="color: whitesmoke; font-size: 18px">Form Mode Transport</p>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Pengiriman" value="{{ $data->name }}">
                                <label for="name" class="form-label">Nama Pengiriman</label>
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
        });
    </script>
@endsection
