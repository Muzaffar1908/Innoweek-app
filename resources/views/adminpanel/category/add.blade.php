@extends('adminpanel.layouts.app')
@section("content")
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Basic Tables </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Category</h4>
            <p class="card-description">Yangi categoriya qo'shing.</p>
            <form class="forms-sample" action="/admin/category/save" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kategoriya nomi uzbek tilida</label>
                  <div class="col-sm-9">
                    <input type="text" name="name_uz" class="form-control" id="exampleInputUsername2" placeholder="Kategoriya uzbekcha">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kategoriya nomi ingliz tilida</label>
                    <div class="col-sm-9">
                      <input type="text" name="name_en" class="form-control" id="exampleInputUsername2" placeholder="Kategoriya ingliz tilida">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kategoriya nomi rus tilida</label>
                    <div class="col-sm-9">
                      <input type="text" name="name_ru" class="form-control" id="exampleInputUsername2" placeholder="Kategoriya ruscha">
                    </div>
                  </div>
                <div class="form-group row">
                  <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Icon</label>
                  <div class="col-sm-9">
                    <input type="text" name="icon" class="form-control" id="exampleInputEmail2" placeholder="Font awesome 5.15 version. Faqat classni kiriting.">
                  </div>
                </div>


                <div class="form-group row">
                  <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Color</label>
                  <div class="col-sm-9">
                    <input type="color" name="color" class="border:3px;" id="exampleInputConfirmPassword2" placeholder="Password">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Saqlash</button>
                <a href="/admin/category" class="btn btn-dark">Ortga</a>
              </form>
            </div>
        </div>
      </div>

    </div>
  </div>
  @endsection('content')
