@extends('admin.base')

@section('css')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
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
                <li class="breadcrumb-item"><a href="/article">Artikel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="mt-2">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center"
                         style="background-color: #04a3df; padding-top: 15px; padding-bottom: 15px;">
                        <i class="material-icons menu-icon me-1"
                           style="color: whitesmoke; font-size: 18px">newspaper</i>
                        <p class="font-weight-bold mb-0" style="color: whitesmoke; font-size: 18px">Form Artikel</p>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                                <label for="title" class="form-label">Judul Artikel</label>
                            </div>
                            <div class="mb-3">
                                <label for="short_description" class="form-label">Deskripsi Singkat</label>
                                <textarea class="form-control" id="short_description" rows="3" name="short_description">{{ $data->short_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Gambar Thumbnail</label>
                                <input class="form-control" type="file" id="thumbnail" name="thumbnail">
                            </div>
                            <textarea id="editor" name="editor" class="form-control">
                                {{ $data->content }}
                            </textarea>
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
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    alignment: {
                        options: [ 'left', 'right' ]
                    },
                    toolbar: {
                        items: [
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'link',
                            '|',
                            'bulletedList',
                            'numberedList',
                            '|',
                            '|',
                            'insertTable',
                            '|',
                            'undo',
                            'redo'
                        ]
                    },
                    language: 'id'
                })
                .then(newEditor => {
                    editor = newEditor;
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
