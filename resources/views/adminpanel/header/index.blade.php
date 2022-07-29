@extends('adminpanel.layouts.app')
@section('content')
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
                                <h4 class="card-title">Eduhub jaoasi</h4>
                                <p class="card-description">
                                    Saytning index fayldagi header qismi bilan shu yerda ishlar olib boriladi.
                                </p>
                            </div>
                            <div>
                                <a href="/admin/header/add" class="btn btn-success btn-fw">Add</a>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped col-12">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>Title</th>
                                        <th> Title2(Small title) </th>
                                        <th>Text</th>
                                        <th>Images</th>
                                        <th>
                                            Settings
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nega as $eduhub)
                                        <tr>
                                            <td> {{ $loop->index + 1 }} </td>
                                            <td>
                                                <p>
                                                    {{ substr($eduhub->title, 0, 26) }}
                                                </p>

                                            </td>

                                            <td>
                                                <p>
                                                    {{ substr($eduhub->title2, 0, 26) }}
                                                </p>
                                            </td>
                                            <td>

                                                <p>{{$eduhub->text}}</p>

                                            </td>


                                            <td>
                                                <p>
                                                    <img src="{{asset('storage/header/'.$eduhub->img)}}" alt=""
                                                        style="width:120px; height:80px; border:2px solid #fff;">
                                                </p>
                                            </td>
                                            <td>
                                                <p
                                                    style="display:flex; flex-direction:column; text-align:center; justify-content:space-around; align-items:center;">
                                                    <a href="/admin/header/edit/{{ $eduhub->id }}"
                                                        style="margin-bottom: 20px; " type="button"
                                                        class="btn btn-outline-secondary btn-icon-text"> Edit <i
                                                            class="mdi mdi-file-check btn-icon-append"></i>
                                                    </a>
                                                    <a href="/admin/header/dell/{{ $eduhub->id }}"
                                                        class="btn btn-outline-danger btn-icon-text">
                                                        <i class="mdi mdi-delete"></i> Delete </a>
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
