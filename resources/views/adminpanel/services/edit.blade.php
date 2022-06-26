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
        <form  action="/admin/services/update/{{$nu->id}}" method="Post" enctype="multipart/form-data" class="forms-sample" style="margin:10px 0px;">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Privacy-Policy title</label>
              <input type="text" value="{{$nu->title}}" name="title_uz" class="form-control"  id="exampleInputName1" placeholder="Title uzbek">
              <input type="text" name="title_en" value="{{$ne->title}}" class="form-control" id="exampleInputName1" placeholder="Title english">
              <input type="text" name="title_ru" value="{{$nr->title}}" class="form-control" id="exampleInputName1" placeholder="Title rus">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Privacy-Policy text</label>
                <textarea name="text_uz" class="form-control" id="" cols="30" rows="5">{{$nu->title}}</textarea>
                <textarea name="text_en" class="form-control" id="" cols="30" rows="5">{{$ne->title}}</textarea>
                <textarea name="text_ru" class="form-control" id="" cols="30" rows="5">{{$nr->title}}</textarea>
              </div>

            <button type="submit" class="btn btn-primary mr-2">Save</button>
            <a href="/admin/services" class="btn btn-dark">Cancel</a>
          </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  @endsection('content')
