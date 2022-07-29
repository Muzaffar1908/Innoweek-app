@extends('adminpanel.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Header add </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/admin/header/save" method="Post" enctype="multipart/form-data" class="forms-sample"
                            style="margin:10px 0px;">
                            @csrf
                            <hr style="background-color: rgb(157, 152, 152); margin-bottom:50px;">
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" name="title_uz" class="form-control" id="exampleInputName1"
                                    placeholder="Title(uz)">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Title2(Small title)</label>
                                <input type="link" name="title2_uz" class="form-control" id="exampleInputEmail3"
                                    placeholder="Small title(uz)">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail4">Text</label>
                                <input type="text" name="text_uz" class="form-control" id="exampleInputEmail4"
                                    placeholder="text(uz)">

                            </div>
                            <div class="form-group">
                                <label>Images upload</label>

                                <div class="input-group col-xs-12">
                                    <input type="file" name="img" id="file-upload" class="file-upload">
                                    <label for="file-upload" class="input-group-append">
                                        <div class="file-upload-browse btn btn-primary" type="button">Upload</div>
                                    </label>
                                </div>
                            </div>
                            <hr style="background-color: rgb(157, 152, 152); margin:50px 0;">
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" name="title_en" class="form-control" id="exampleInputName1"
                                    placeholder="Title(en)">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Title2(Small title)</label>
                                <input type="link" name="title2_en" class="form-control" id="exampleInputEmail3"
                                    placeholder="Small title(en)">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail4">Text</label>
                                <input type="text" name="text_en" class="form-control" id="exampleInputEmail4"
                                    placeholder="Text(en)">

                            </div>
                            <hr style="background-color: rgb(157, 152, 152); margin:50px 0;">
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" name="title_ru" class="form-control" id="exampleInputName1"
                                    placeholder="Title(ru)">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Title2(Small title)</label>
                                <input type="link" name="title2_ru" class="form-control" id="exampleInputEmail3"
                                    placeholder="Small title(ru)">
                            </div>
                            <div class="form-group" style="margin-bottom: 50px">
                                <label for="exampleInputEmail4">Text</label>
                                <input type="text" name="text_ru" class="form-control" id="exampleInputEmail4"
                                    placeholder="Text(ru)">

                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <a href="/admin/jamoa" class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection('content')
