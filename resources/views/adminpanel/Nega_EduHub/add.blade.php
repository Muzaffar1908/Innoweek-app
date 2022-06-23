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
            <h4 class="card-title">Nega EduHub</h4>
            <p class="card-description">EduHub haqida malumotlarni kiriting.</p>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form class="forms-sample" action="/admin/nega/save" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Icon</label>
                    <div class="col-sm-9">
                      <input type="text" name="icon" class="form-control" id="exampleInputEmail2" placeholder="Font awesome 5.15 version. Faqat classni kiriting.">
                    </div>
                  </div>
                  <h6 class="card-title">Uzbekcha</h6>
                <div class="form-group row">
                  <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" name="title_uz" class="form-control" id="exampleInputUsername2" placeholder="title uzbekcha">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Text</label>
                    <div class="col-sm-9">
                      <input type="text" name="text_uz" class="form-control" id="exampleInputUsername2" placeholder="Text nega EhuHubni tanlash keraklkigi haqida qisqacha...">
                    </div>
                  </div>


                  <h6 class="card-title">Inglizcha</h6>
                  <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" name="title_en" class="form-control" id="exampleInputUsername2" placeholder="title uzbekcha">
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Text</label>
                      <div class="col-sm-9">
                        <input type="text" name="text_en" class="form-control" id="exampleInputUsername2" placeholder="Text nega EhuHubni tanlash keraklkigi haqida qisqacha...">
                      </div>
                    </div>

                    <h6 class="card-title">Ruscha</h6>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="text_ru" class="form-control" id="exampleInputUsername2" placeholder="title uzbekcha">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Text</label>
                        <div class="col-sm-9">
                          <input type="text" name="title_ru" class="form-control" id="exampleInputUsername2" placeholder="Text nega EhuHubni tanlash keraklkigi haqida qisqacha...">
                        </div>
                      </div>





                <button type="submit" class="btn btn-primary mr-2">Saqlash</button>
                <a href="/admin/nega_EduHub" class="btn btn-dark">Ortga</a>
              </form>
            </div>
        </div>
      </div>

    </div>
  </div>
  @endsection('content')
