@extends('admin.layouts.app')

@section('content')
    <div class="wrapper">

        <x-admin-header/>

        <div class="content-wrapper" style="min-height: 828px;">
            <div class="container-full">
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">News Edit</h4>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <form action="{{ route('admin.news.update', $news) }}" method="post" class="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="box-body">
                                        <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> News Edit</h4>
                                        <hr class="my-15">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Title</label>
                                                    <input value="{{ $news->title }}" name="title" type="text" class="form-control" placeholder="Title" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Body</label>
                                            <textarea name="body" type="text" rows="5" class="form-control" placeholder="Body" required>{{ $news->body }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Select Photo</label>
                                            <label class="file">
                                                <input id="imageFile" name="image" type="file">
                                            </label>
                                        </div>
                                        <img id="prevImage" src="{{ $news->image }}" alt="preview" style="width:300px;border-radius:10px;">
                                    </div>
                                    <div class="box-footer">
                                        <a href="{{ route('admin.news') }}" class="btn btn-secondary me-1">
                                            <i class="ti-trash"></i> Cancel
                                        </a>
                                        <button type="submit" class="btn btn-primary text-white">
                                            <i class="ti-save-alt"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function imageFile(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onloadend = function (e) {
                    $('#prevImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageFile").change(function () {
            imageFile(this);
        });
    </script>
@endsection
