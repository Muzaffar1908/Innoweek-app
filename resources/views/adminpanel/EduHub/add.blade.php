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
            <form  action="/admin/eduhub/addsave" method="Get" class="form-sample">
              @csrf

              <p class="card-description">EduHub datas</p>
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tell</label>
                    <div class="col-sm-9">
                      <input type="tell" name="tell" required class="form-control" placeholder="+998900191099" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Email</label>
                    <div class="col-sm-9">
                      <input type="email"  required class="form-control" name="email" placeholder="EduHub Email" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Adress</label>
                    <div class="col-sm-9">
                      <input type="text"  required class="form-control" name="adress" placeholder="EhuHub Adress" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Awards</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="awards_count" placeholder="EduHub Awards" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Offices open</label>
                    <div class="col-sm-9">
                     <input type="text"  required class="form-control" name="office_open" placeholder="dd/mm">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Offices close</label>
                        <div class="col-sm-9">
                         <input type="text"  required class="form-control" name="office_close" placeholder="dd/mm">
                        </div>
                      </div>

                </div>
              </div>
              <p class="card-description"> EduHub links </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Telegram</label>
                    <div class="col-sm-9">
                      <input type="text"  required class="form-control" name="telegram" placeholder="Telegram links" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Instagram</label>
                    <div class="col-sm-9">
                      <input type="url"  required class="form-control" name="instagram" placeholder="Instagram links" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Facebook</label>
                    <div class="col-sm-9">
                      <input type="url"  required class="form-control" placeholder="Facebook links" name="facebook" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">You-tube</label>
                    <div class="col-sm-9">
                      <input type="text"  required class="form-control" placeholder="You-tube links" name="you-tube"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">App-story</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="App-story links" name="app_story" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Google-play</label>
                    <div class="col-sm-9">
                      <input type="text"  required  required class="form-control" placeholder="Google-play links" name="google_play" />
                    </div>
                  </div>
                </div>



              </div>
             <div class="" style="widht:100%; display:flex; flex-direction:row; justify-content: flex-end">
                 <input type="submit"  class="btn-primary btn" style="padding:10px 20px; font-size:16px" value="save">
              </div>
            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  @endsection('content')
