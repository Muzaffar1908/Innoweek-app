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
                      Yangi categoriyalarni shu yerdan qo'shildi, o'zgartiriladi yoki o'chiriladi.
                  </p>
                 </div>
                 <div>
                  <a href="/admin/category/add" class="btn btn-success btn-fw">Add</a>

                 </div>
             </div>
              <div class="table-responsive">
                <table class="table table-dark col-12" >
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Name </th>
                      <th> Icon </th>
                      <th> Color </th>
                      <th>
                        Settings
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cat as $cat)
                   <tr >
                       <th>{{$loop->index+1}}</th>
                    <td style="color: {{$cat->color}}""><h4>{{$cat->name}}</h4></td>
                       <td>
                           <p class="btn-icon-" style="color: {{$cat->color}}; font-size:20px;"><i class="{{$cat->icon}}" ></i></p>
                       </td>
                       <td>

                               <span class="btn btn-info" style="background-color:  {{$cat->color}};color:  {{$cat->color}};">
                                {{$cat->color}}
                               </span>

                       </td>

                        <td style="display:flex; flex-direction:row; text-align:center; justify-content:center; align-items:center;">
                            <a href="/admin/category/edit/{{$cat->id}}" style="margin-right:10px"  type="button" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                            </a>
                            <a href="/admin/category/dell/{{$cat->id}}"  class="btn btn-outline-danger btn-icon-text">
                                <i class="mdi mdi-delete"></i> delete </a>

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
