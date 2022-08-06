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
                                    Teams of Services bo'limi malumotlar shu yerda  to'ldiriladi. Bu Malumotlarni hamasidan foydalaniladi yani ekranga chiqarilasi iloji boricha ortiqcha maulumotlarni o'chiring. Malummotlar ketma ketligiga etibor bering,  Update funksiyasidan kengroq foydalaning.
                                </p>
                            </div>
                            <div>
                                <a href="/admin/services/add" class="btn btn-success btn-fw">Add</a>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped col-12">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>Title </th>
                                        <th>Text </th>
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
                                                    {{ substr($eduhub->text, 0, 50) }}...
                                                </p>

                                            </td>


                                            <td>
                                                <p
                                                    style="display:flex; flex-direction:column; text-align:center; justify-content:space-around; align-items:center;">
                                                    <a href="/admin/services/edit/{{ $eduhub->id }}"
                                                        style="margin-bottom: 20px; " type="button"
                                                        class="btn btn-outline-secondary btn-icon-text"> Edit <i
                                                            class="mdi mdi-file-check btn-icon-append"></i>
                                                    </a>
                                                    <a href="/admin/services/dell/{{ $eduhub->id }}"
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
