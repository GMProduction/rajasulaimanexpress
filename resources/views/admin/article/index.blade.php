@extends('admin.base')

@section('css')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Harga</li>
            </ol>
        </nav>
        <a href="/article/store" class="btn-utama-soft sml rnd">
            <i class="material-icons menu-icon ms-2">add_circle</i>
            Tambah
        </a>
    </div>

    <div class="mt-2">
        <table id="table-data" class="table table-striped enselect" style="width:100%">
            <thead>
            <tr>
                <th width="10%">#</th>
                <th>Judul</th>
                <th>Thumbnail</th>
                <th width="12%">Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@section('morejs')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script>
        var table;

        function reload() {
            table.ajax.reload();
        }

        var editor;

        function destroy(id) {
            AjaxPost('/article/delete', {id}, function () {
                window.location.reload();
            });
        }

        function setDeleteHandler() {
            $('.btn-delete').on('click', function (e) {
                e.preventDefault();
                let id = this.dataset.id;
                AlertConfirm('Yakin Ingin Menghapus?', 'Data yang sudah dihapus tidak dapat dikembalikan', function () {
                    destroy(id);
                })
            });
        }
        $(document).ready(function () {
            table = DataTableGenerator('#table-data', '/article/data', [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false},
                {data: 'title'},
                {
                    data: null, render: function (data) {
                        let url = data['image'];
                        return '<a href="' + url + '" target="_blank"><img src="' + url + '" alt="thumbnail" height="200"></a>';
                    }
                },
                {
                    data: null, render: function (data) {
                        return '<div class="d-flex">' +
                            '<a href="/article/' + data['id'] + '/patch" class="btn-success btn-edit sml rnd me-1" data-id="' + data['id'] + '" data-name="' + data['name'] + '">Edit<i class="material-icons menu-icon ms-2">edit</i></a>' +
                            '<a href="#" class="btn-danger sml rnd btn-delete" data-id="' + data['id'] + '">Hapus <i class="material-icons menu-icon ms-2">delete</i></a></div>';
                    }
                },
            ], [
                {"width": "5%", "targets": 0, "className": "dt-center"},
            ], function (d) {

            }, {
                "fnDrawCallback": function (oSettings) {
                    setDeleteHandler();
                }
            });
        });
    </script>
@endsection
