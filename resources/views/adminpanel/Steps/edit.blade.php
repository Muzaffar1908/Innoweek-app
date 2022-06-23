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
        <form  action="/admin/qadam/save" method="Post" enctype="multipart/form-data" class="forms-sample" style="margin:10px 0px;">
            @csrf
            <hr style="background-color: rgb(157, 152, 152); margin:0px 0px 50px 0px; ">
            <div class="form-group">
              <label for="exampleInputName1">Qadamlar title</label>
              <input type="text" value="{{$nu->title}}" name="title_uz" class="form-control"  id="exampleInputName1" placeholder="Title uzbek">
              <input type="text" name="title_en" value="{{$ne->title}}" class="form-control" id="exampleInputName1" placeholder="Title english">
              <input type="text" name="title_ru" value="{{$nr->title}}" class="form-control" id="exampleInputName1" placeholder="Title rus">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">You-tube link</label>
              <input type="link" name="link_youtube" value="{{$nu->link_youtube}}" class="form-control" id="exampleInputEmail3" placeholder="you-tube link">
            </div>
            <div class="form-group">
              <label>Images upload</label>

              <div class="input-group col-xs-12">
                <input type="file" style="display:none" id="img_file" name="img" class="file-upload">
                <label for="img_file" >
                  <div  type="file" class="file-upload-browse btn btn-primary" type="button">Upload images</button>
                </span>
              </div>
            </div>
            <hr style="background-color: rgb(157, 152, 152); margin:50px 0px;">
            <h6 >Birinchi qadam</h4>
            <div class="form-group" style="margin:20px 0;">
              <label for="exampleInputCity1">Title uz </label>
              <input type="text" value="{{$nu->title1}}" name="title1_uz" class="form-control" id="exampleInputCity1" placeholder="Title">
            </div>
            <div class="form-group" style="margin:20px 0;">
              <label for="exampleTextarea1" >Text uz</label>
              <textarea class="form-control" value="{{$nu->text1}}" name="text1_uz"  id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group" style="margin:20px 0;">
                <label for="exampleInputCity1">Title en </label>
                <input type="text" name="title1_en" class="form-control" id="exampleInputCity1" placeholder="Title">
              </div>
              <div class="form-group" style="margin:20px 0;">
                <label for="exampleTextarea1" >Text en</label>
                <textarea class="form-control" name="text1_en"  id="exampleTextarea1" rows="4"></textarea>
              </div>
              <div class="form-group" style="margin:20px 0;">
                <label for="exampleInputCity1">Title ru </label>
                <input type="text" name="title1_ru" class="form-control" id="exampleInputCity1" placeholder="Title">
              </div>
              <div class="form-group" style="margin:20px 0;">
                <label for="exampleTextarea1" >Text ru</label>
                <textarea class="form-control" name="text1_ru"  id="exampleTextarea1" rows="4"></textarea>
              </div>
              <hr style="background-color: rgb(157, 152, 152); margin:50px 0px;">

              <h6 style="margin:30px 0;">Ikkinchi  qadam</h4>
                <div class="form-group">
                  <label for="exampleInputCity1">Title uz </label>
                  <input type="text" name="title2_uz" class="form-control" id="exampleInputCity1" placeholder="Title">
                </div>
                <div class="form-group" style="margin:20px 0;">
                  <label for="exampleTextarea1" >Text uz</label>
                  <textarea class="form-control" name="text2_uz"  id="exampleTextarea1" rows="4"></textarea>
                </div>
                <div class="form-group" style="margin:20px 0;">
                    <label for="exampleInputCity1">Title en </label>
                    <input type="text" name="title2_en" class="form-control" id="exampleInputCity1" placeholder="Title">
                  </div>
                  <div class="form-group" style="margin:20px 0;">
                    <label for="exampleTextarea1" >Text en</label>
                    <textarea class="form-control" name="text2_en"  id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <div class="form-group" style="margin:20px 0;">
                    <label for="exampleInputCity1">Title ru </label>
                    <input type="text" name="title2_ru" class="form-control" id="exampleInputCity1" placeholder="Title">
                  </div>
                  <div class="form-group" style="margin:20px 0;">
                    <label for="exampleTextarea1" >Text ru</label>
                    <textarea class="form-control" name="text2_ru"  id="exampleTextarea1" rows="4"></textarea>
                  </div>

                  <hr style="background-color: rgb(157, 152, 152); margin:50px 0px;">
                  <h6 style="margin:30px 0;">Uchunchi  qadam</h4>
                    <div class="form-group">
                      <label for="exampleInputCity1">Title uz </label>
                      <input type="text" name="title3_uz" class="form-control" id="exampleInputCity1" placeholder="Title">
                    </div>
                    <div class="form-group" style="margin:20px 0;">
                      <label for="exampleTextarea1" >Text uz</label>
                      <textarea class="form-control" name="text3_uz"  id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group" style="margin:20px 0;">
                        <label for="exampleInputCity1">Title en </label>
                        <input type="text" name="title3_en" class="form-control" id="exampleInputCity1" placeholder="Title">
                      </div>
                      <div class="form-group" style="margin:20px 0;">
                        <label for="exampleTextarea1" >Text en</label>
                        <textarea class="form-control" name="text3_en"  id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group" style="margin:20px 0;">
                        <label for="exampleInputCity1">Title ru </label>
                        <input type="text" name="title3_ru" class="form-control" id="exampleInputCity1" placeholder="Title">
                      </div>
                      <div class="form-group" style="margin:20px 0;">
                        <label for="exampleTextarea1" >Text ru</label>
                        <textarea class="form-control" name="text3_ru"  id="exampleTextarea1" rows="4"></textarea>
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
