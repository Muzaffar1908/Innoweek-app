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
        <form class="forms-sample" action="/admin/category/update/{{$ce->id}}" method="POST">
            @csrf
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kategoriya nomi uzbek tilida</label>
              <div class="col-sm-9">
                <input type="text" name="name_uz" value="{{$cu->name}}" class="form-control" id="exampleInputUsername2" placeholder="Kategoriya uzbekcha">
              </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kategoriya nomi ingliz tilida</label>
                <div class="col-sm-9">
                  <input type="text" value="{{$ce->name}}" name="name_en" class="form-control" id="exampleInputUsername2" placeholder="Kategoriya ingliz tilida">
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kategoriya nomi rus tilida</label>
                <div class="col-sm-9">
                  <input type="text" name="name_ru" value="{{$cr->name}}" class="form-control" id="exampleInputUsername2" placeholder="Kategoriya ruscha">
                </div>
              </div>
            <div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Icon</label>
              <div class="col-sm-9">
                <input type="text" name="icon" value="{{$cu->icon}}" class="form-control" id="exampleInputEmail2" placeholder="Font awesome 5.15 version. Faqat classni kiriting.">
              </div>
            </div>


            <div class="form-group row">
              <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Color</label>
              <div class="col-sm-9">
                <input type="color" name="color" value="{{$cu->color}}" class="border:3px;" id="exampleInputConfirmPassword2" placeholder="Password">
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
  </div>
  @endsection('content')
