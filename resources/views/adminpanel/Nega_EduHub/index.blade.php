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
                                <h4 class="card-title">Nega Eduhub</h4>
                                <p class="card-description">
                                    Saytimizni nega aytimizdan foydalanishlari haqida shu yerda malumot kiritiladi.
                                </p>
                            </div>
                            <div>
                                <a href="/admin/nega/add" class="btn btn-success btn-fw">Add</a>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark col-12">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Title </th>
                                        <th> Text </th>
                                        <th>  Icon</th>
                                        <th>
                                            Settings
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nega as $cat)
                                        <tr>
                                            <th>{{ $loop->index + 1 }}</th>
                                            <td>
                                                <h4>{{ $cat->title}}
                                                </h4>
                                            </td>
                                            <td>
                                                <p class="">  {{ substr($cat->text,0, 30 )}}...</p>
                                            </td>
                                            <td rowspan="">
                                                        <p><i class="{{ $cat->icon }}   btn btn-icon btn-danger btn-rounded" style="font-size:20px; padding-top:8px"></i></p>
                                            </td>

                                            <td
                                                style="display:flex; flex-direction:row; text-align:center; justify-content:center; align-items:center;">
                                                <a href="/admin/nega/edit/{{ $cat->id }}" style="margin-right:10px"
                                                    type="button" class="btn btn-outline-secondary btn-icon-text"> Edit <i
                                                        class="mdi mdi-file-check btn-icon-append"></i>
                                                </a>
                                                <a href="/admin/nega/dell/{{ $cat->id }}"
                                                    class="btn btn-outline-danger btn-icon-text">
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
