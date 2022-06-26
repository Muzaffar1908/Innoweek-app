@extends('adminpanel.layouts.app')
@section("content")
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Form elements </h3>
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
        <form  action="/admin/jamoa/update/{{$nu->id}}" method="Post" enctype="multipart/form-data" class="forms-sample" style="margin:10px 0px;">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Fish</label>
                <input type="text" value="{{$nu->name}}" name="name" class="form-control" id="exampleInputName1"
                    placeholder="Fish">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Unvon</label>
                <input type="link" value="{{$nu->uroven}}" name="unvon" class="form-control" id="exampleInputEmail3"
                    placeholder="Unvon">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail4">Links</label>
                <input type="link" name="telegram" value="{{$nu->telegram}}" class="form-control" id="exampleInputEmail4"
                    placeholder="Telegram">
                <input type="link" name="instagram" value="{{$nu->instagram}}" class="form-control" id="exampleInputEmail4"
                    placeholder="Instagram">
                <input type="link" name="facebook" value="{{$nu->facebook}}" class="form-control" id="exampleInputEmail4"
                    placeholder="Facebook">
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







            <button type="submit" class="btn btn-primary mr-2">Save</button>
            <a href="/admin/jamoa" class="btn btn-dark">Cancel</button>



        </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  @endsection('content')
