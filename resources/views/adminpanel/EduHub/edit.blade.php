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
            <form  action="/admin/eduhub/update/{{$eduhub->id}}" method="Get" class="form-sample">
              @csrf

              <p class="card-description">EduHub datas</p>
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tell</label>
                    <div class="col-sm-9">
                      <input type="tell" name="tell" value="{{$eduhub->tell}}" required class="form-control" placeholder="+998900191099" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >Email</label>
                    <div class="col-sm-9">
                      <input type="email"  required class="form-control" name="email"  value="{{$eduhub->email}}" placeholder="EduHub Email" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Adress</label>
                    <div class="col-sm-9">
                      <input type="text"  required class="form-control" name="adress"  value="{{$eduhub->adress}}" placeholder="EhuHub Adress" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Awards</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control"  value="{{$eduhub->awards_count}}" name="awards_count" placeholder="EduHub Awards" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Offices open</label>
                    <div class="col-sm-9">
                     <input type="text"  required class="form-control"  value="{{$eduhub->office_open}}" name="office_open" placeholder="dd/mm">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Offices close</label>
                        <div class="col-sm-9">
                         <input type="text"  required class="form-control" name="office_close"  value="{{$eduhub->office_close}}" placeholder="dd/mm">
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
                      <input type="Url"  required class="form-control"  value="{{$eduhub->telegram}}" name="telegram" placeholder="Telegram links" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Instagram</label>
                    <div class="col-sm-9">
                      <input type="url"  required class="form-control" name="instagram"  value="{{$eduhub->instagram}}" placeholder="Instagram links" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Facebook</label>
                    <div class="col-sm-9">
                      <input type="url"  required class="form-control"  value="{{$eduhub->facebook}}" placeholder="Facebook links" name="facebook" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">You-tube</label>
                    <div class="col-sm-9">
                      <input type="text"  required class="form-control"  value="{{$eduhub->you_tube}}" placeholder="You-tube links" name="you-tube"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">App-story</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control"  value="{{$eduhub->app_story}}" placeholder="App-story links" name="app_story" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label" >Google-play</label>
                    <div class="col-sm-9">
                      <input type="text"  required  required class="form-control"  value="{{$eduhub->google_play}}" placeholder="Google-play links" name="google_play" />
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
