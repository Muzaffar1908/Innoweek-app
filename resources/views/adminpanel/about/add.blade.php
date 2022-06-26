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
        <form  action="/admin/about/save" method="Post" enctype="multipart/form-data" class="forms-sample" style="margin:10px 0px;">
            @csrf
            <h6 >Havfsizlik qaydnomasiga yangi shartlar qo'shing.</h6>
            <div class="form-group mx-10">
              <label for="exampleInputName1">Privacy-Policy title</label>
              <input type="text" name="title_uz" class="form-control"  id="exampleInputName1" placeholder="Title Uzbek">
              <input type="text" name="title_en" class="form-control"  id="exampleInputName1" placeholder="Title English">
              <input type="text" name="title_ru" class="form-control"  id="exampleInputName1" placeholder="Title Rus">
           </div>
              <div class="form-group" style="margin:20px 0;">
                <label for="exampleTextarea1" >Privacy-Policy text</label>
                <textarea class="form-control" name="text_uz"  placeholder="Text Uzbek " id="exampleTextarea1" rows="4"></textarea>
                <textarea class="form-control" name="text_en"  placeholder="Text English " id="exampleTextarea1" rows="4"></textarea>
                <textarea class="form-control" name="text_ru"  placeholder="Text Rus" id="exampleTextarea1" rows="4"></textarea>
              </div>
            <hr>


            <button type="submit" class="btn btn-primary mr-2">Save</button>
            <a href="/admin/services" class="btn btn-dark">Cancel</button>
          </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  @endsection('content')
