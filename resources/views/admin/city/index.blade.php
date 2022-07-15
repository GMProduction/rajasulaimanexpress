@extends('admin.base')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kota</li>
            </ol>
        </nav>
        <a href="#" class="btn-utama-soft sml rnd" data-bs-toggle="modal" data-bs-target="#modal-add-city">
            <i class="material-icons menu-icon ms-2">add_circle</i>
            Tambah
        </a>
    </div>

    <div class="mt-2">
        <table id="table-data" class="table table-striped enselect" style="width:100%">
            <thead>
            <tr>
                <th width="10%">#</th>
                <th>Nama Kota</th>
                <th width="12%">Action</th>
            </tr>
            </thead>
            <tbody>
            {{--            @foreach($data as $v)--}}
            {{--                <tr>--}}
            {{--                    <td>{{ $loop->index + 1 }}</td>--}}
            {{--                    <td>{{ $v->name}}</td>--}}
            {{--                    <td class="d-flex">--}}
            {{--                        <a href="#" class="btn-success sml rnd me-1">Edit <i--}}
            {{--                                class="material-icons menu-icon ms-2">edit</i></a>--}}
            {{--                        <a href="#" class="btn-danger sml rnd ">Hapus <i--}}
            {{--                                class="material-icons menu-icon ms-2">delete</i></a>--}}
            {{--                    </td>--}}
            {{--                </tr>--}}
            {{--            @endforeach--}}
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="modal-add-city" tabindex="-1" aria-labelledby="modal-add-city"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title-modal-add-city">Tambah Kota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kota">
                        <label for="name" class="form-label">Nama Kota</label>
                    </div>
                    <div class="text-center">
                        <a class="btn-utama" href="#" id="btn-add">Simpan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('morejs')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script>
        var table;

        function reload() {
            table.ajax.reload();
        }

        function clear() {
            $('#name').val('');
        }
        async function create() {
            try {
                await $.post('/city/create', {
                    name: $('#name').val(),
                });
                reload();
                clear();
            } catch (e) {
                ErrorAlert('Error', 'internal server error');
            }
        }

        $(document).ready(function () {
            table = DataTableGenerator('#table-data', '/city/data', [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false},
                {data: 'name'},
                {
                    data: null, render: function (data) {
                        return '<div class="d-flex">' +
                            '<a href="#" class="btn-success sml rnd me-1">Edit<i class="material-icons menu-icon ms-2">edit</i></a>' +
                            '<a href="#" class="btn-danger sml rnd ">Hapus <i class="material-icons menu-icon ms-2">delete</i></a></div>';
                    }
                },
            ], []);

            $('#btn-add').on('click', function (e) {
                e.preventDefault();
                create();
            });
        });
    </script>
@endsection
