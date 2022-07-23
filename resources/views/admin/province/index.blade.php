@extends('admin.base')

@section('content')
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire("Berhasil!", '{{\Illuminate\Support\Facades\Session::get('success')}}', "success")
        </script>
    @endif
    <div class="d-flex justify-content-between align-items-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Provinsi</li>
            </ol>
        </nav>
        <a href="/province/store" class="btn-utama-soft sml rnd">
            <i class="material-icons menu-icon ms-2">add_circle</i>
            Tambah
        </a>
    </div>

    <div class="mt-2">
        <table id="table-data" class="table table-striped enselect" style="width:100%">
            <thead>
            <tr>
                <th width="10%">#</th>
                <th>Nama Provinsi</th>
                <th width="12%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $v)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $v->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="/province/{{ $v->id }}/patch" class="btn-success btn-edit sml rnd me-1" data-id="{{ $v->id }}" data-name="{{ $v->name }}">Edit<i class="material-icons menu-icon ms-2">edit</i></a>
                            <a href="#" class="btn-danger sml rnd" data-id="{{ $v->id }}">Hapus <i class="material-icons menu-icon ms-2">delete</i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('morejs')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#table-data').DataTable({});
        });
    </script>
@endsection
