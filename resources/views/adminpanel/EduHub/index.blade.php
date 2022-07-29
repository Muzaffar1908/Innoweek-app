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
             <div style="display:flex;flex-direction:row; justify-content:space-between; align-items:center;">
                 <div>
                  <h4 class="card-title">Eduhub</h4>
                  <p class="card-description">
                      Eduhub saytining asosiy qismlari link email  va shu kabi malumotlar shu yerda to'ldiriladi.
                  </p>
                 </div>
                 <div>
                  <a href="/admin/eduhub/add" class="btn btn-success btn-fw">Add</a>

                 </div>
             </div>
              <div class="table-responsive">
                <table class="table table-dark col-12" >
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Manzil </th>
                      <th> ochiladi $ yopiladi </th>
                      <th> Mukofotlar </th>
                      <th>Tell && Email</th>
                      <th>Download</th>
                      <th>Links</th>

                      <th>
                        Settings
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($eduhub as $eduhub)
                    <tr>
                      <td> {{$loop->index+1 }} </td>
                      <td>
                        <p>
                            {{substr($eduhub->adress,0,26)}}...
                        </p>

                        </td>
                      <td> <p>{{$eduhub->office_open}} && {{$eduhub->office_close}}</p> </td>
                      <td><p> {{$eduhub->awards_count}}  ta</p> </td>
                      <td>
                        <p><span class="mdi mdi-cellphone-iphone" style="color:aliceblue; padding-right:8px;"></span>httfn/sjkdcd/ddjklfn/dsnjldns</p>
                        <p><span class="mdi mdi-email-outline" style="color:aliceblue; padding-right:8px;"></span>httfn/sjkdcd/ddjklfn/dsnjldns</p>
                    </td>
                      <td>
                          <p class="menu-icon" >
                              <span  style="color:aliceblue; padding-right:8px;"><i class="mdi mdi-google-play"></i></span>
                              {{substr($eduhub->google_play,7,16)}}...
                            </span>
                            <p class="menu-icon" >
                                <span  style="color:aliceblue; padding-right:8px;"> <i class="mdi mdi-apple"></i></span>
                              {{substr($eduhub->app_story,7,16)}}...
                            </span>
                      </td>
                      <td>
                          <p><span class="menu-icon" style="color:aliceblue; padding-right:8px;"><i class="mdi mdi-telegram "></i></span>{{substr($eduhub->telegram,7,16)}}...</p>
                          <p><span class="menu-icon" style="color:aliceblue; padding-right:8px;"><i class="mdi mdi-instagram "></i></span>{{substr($eduhub->instagram,7,16)}}...</p>
                          <p><span class="menu-icon" style="color:aliceblue; padding-right:8px;"><i class="mdi mdi-facebook "></i></span>{{substr($eduhub->facebook,7,16)}}...</p>
                          <p><span class="menu-icon" style="color:aliceblue; padding-right:8px;"><i class="mdi mdi-youtube "></i></span>{{substr($eduhub->you_tube,7,16)}}...</p>

                      </td>



                        <td >


                        <p style="display:flex; flex-direction:column; text-align:center; justify-content:space-around; align-items:center;">
                            <a href="/admin/eduhub/edit/{{$eduhub->id}}" style="margin-bottom: 20px; " type="button" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                            </a>
                            <a href="/admin/eduhub/dell/{{$eduhub->id}}"  class="btn btn-outline-danger btn-icon-text">
                                <i class="mdi mdi-delete"></i> delete </a>
                        </p>

                      </td>
                    </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>

    </div>
  </div>
  @endsection('content')
