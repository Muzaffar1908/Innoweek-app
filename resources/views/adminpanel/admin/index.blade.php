@extends('adminpanel.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Profile </h3>
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
                        <form action="/admin/admin/update/{{ $nu->id }}" method="Post" enctype="multipart/form-data"
                            class="forms-sample" style="margin:10px 0px;">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" value="{{ $nu->name }}" name="name" class="form-control"
                                    id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Sname</label>
                                <input type="text" name="sname" value="{{ $nu->sname }}" class="form-control"
                                    id="exampleInputEmail3" placeholder="Sname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Phone Number</label>
                                <input type="number" name="tell" value="{{ $nu->tell }}" class="form-control"
                                    id="exampleInputEmail3" placeholder="Tell">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email</label>
                                <input type="email" name="email" value="{{ $nu->email }}" class="form-control"
                                    id="exampleInputEmail3" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label>Images upload</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" style="display:none" id="img_file" name="img"
                                        class="file-upload">
                                    <label for="img_file">
                                        <div type="file" class="file-upload-browse btn btn-primary" type="button">Upload
                                            images</button>
                                            </span>
                                        </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Old Password</label>
                                <input type="password" name="oldpassword"  class="form-control" id="exampleInputEmail3" placeholder="password">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">New Password</label>
                                <input type="password" name="newpassword"  class="form-control" id="exampleInputEmail3" placeholder="password">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail3">Reset New password</label>
                                <input type="password" name="resetpassword" class="form-control" id="exampleInputEmail3" placeholder="Reset password">
                              </div>



                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection('content')
