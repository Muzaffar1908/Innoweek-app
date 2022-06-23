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
                                <h4 class="card-title">Eduhub</h4>
                                <p class="card-description">
                                    Eduhub saytining asosiy qismlari link email va shu kabi malumotlar shu yerda
                                    to'ldiriladi.
                                </p>
                            </div>
                            <div>
                                <a href="/admin/qadam/add" class="btn btn-success btn-fw">Add</a>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped col-12">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Qadam title </th>
                                        <th> Link you-tube </th>
                                        <th> 1-qadam title va text </th>
                                        <th> 2-qadam title va text </th>
                                        <th> 3-qadam title va text </th>
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
                                                    {{ substr($eduhub->title, 0, 26) }}...
                                                </p>

                                            </td>

                                            <td>
                                                <p>
                                                    <i class="mdi mdi-youtube"
                                                        style="color:aliceblue; padding-right:8px;"></i>
                                                    {{ substr($eduhub->link_youtube, 0, 26) }}...
                                                </p>
                                            </td>
                                            <td>

                                                <p>
                                                    {{ substr($eduhub->title1, 0, 50) }}...
                                                </p>


                                                <p>
                                                    {{ substr($eduhub->text1, 0, 50) }}...
                                                </p>

                                            </td>
                                            <td>
                                                <p>
                                                    {{ substr($eduhub->title2, 0, 50) }}...
                                                </p>
                                                <p>
                                                    {{ substr($eduhub->text2, 0, 50) }}...
                                                </p>
                                            </td>
                                            <td>

                                                <p>
                                                    {{ substr($eduhub->title3, 0, 50) }}...
                                                </p>
                                                <p>
                                                    {{ substr($eduhub->text3, 0, 50) }}...
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <img src="{{asset('storage/steps/'.$eduhub->img)}}" alt=""
                                                        style="width:120px; height:100px; border:2px solid #fff">
                                                </p>
                                            </td>
                                            <td>
                                                <p
                                                    style="display:flex; flex-direction:column; text-align:center; justify-content:space-around; align-items:center;">
                                                    <a href="/admin/qadam/edit/{{ $eduhub->id }}"
                                                        style="margin-bottom: 20px; " type="button"
                                                        class="btn btn-outline-secondary btn-icon-text"> Edit <i
                                                            class="mdi mdi-file-check btn-icon-append"></i>
                                                    </a>
                                                    <a href="/admin/eduhub/dell/{{ $eduhub->id }}"
                                                        class="btn btn-outline-danger btn-icon-text">
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
