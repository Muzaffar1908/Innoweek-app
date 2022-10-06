@extends('admin.layout.app')
@section('style')

    <!-- Material color picker -->
    <link href="{{ asset('/admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Conference</h1>
                    <a href="{{route('admin.conference.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('warning'))
                    <div class="col-md-12">
                        <div class="alert alert-info alert-has-icon">
                            <div class="alert-icon">
                                <i class="far fa-lightbulb"></i>
                            </div>
                            <div class="alert-body">
                                <div class="alert-title">Info</div>
                                {{ session('warning') }}
                            </div>
                        </div>
                    </div>
                @endif

                    <div class="card">
                        <div class="card-body">
                            <form action="" method="GET">
                            <div class="row form-material pb-3">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="Boshlanish vaqtini kiriting..." id="mdate" name="started_at" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Sarlavhani kiriting..." name="title" />
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        Ma'lumotlarni izlash
                                    </button>
                                </div>
                            </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table" id="example3" class="display" style="min-width: 845px">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th>№</th>
                                            <th>Title</th>
                                            <th>Started At</th>
                                            <th>Year</th>
                                            <th>Author</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    use Carbon\Carbon;
                                                       ?>
                                    @foreach ($conferences as $conference)
                                    <tr>
                                        <td>{{($conferences->currentpage() - 1) * $conferences->perpage() + ($loop->index+1)}}</td>
                                        <td>{{$conference->title_uz}}</td>
                                        <td>
                                            {{Carbon::parse($conference->started_at)->format('d/m/Y H:m')}}
                                            <br>
                                            {{Carbon::parse($conference->stoped_at)->format('d/m/Y H:m')}}
                                        </td>
                                        <td>{{$conference->archiveTable->year}}</td>
                                        <td>{{$conference->conferenceTable->first_name}}</td>
                                        <td>
                                            <img src="{{asset('/upload/conference/' . $conference->user_image.'_thumbnail_267.png')}}" alt="img"
                                                with="100px" height="60px">
                                        </td>
                                        <td>
                                            <form action="{{ asset('/admin/conference/isactive/' . $conference->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="sweetalert">
                                                    <button type="button" class="
                                                                @if ($conference->is_active == 1) btn-success @endif
                                                            @if ($conference->is_active == 0) btn-danger @endif
                                                                btn sweet-confirm">
                                                        @if ($conference->is_active == 1)
                                                        Active
                                                        @endif
                                                        @if ($conference->is_active == 0)
                                                        NotActive
                                                        @endif
                                                    </button>
                                                </div>
                                            </form>
                        
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                {{-- <a href="{{route('admin.conference.show', $conference->id)}}" type="button"
                                                    class="btn btn-info"><i class="bi bi-eye"></i></a> --}}
                                                <a href="{{route('admin.conference.edit', $conference->id)}}" type="button"
                                                    class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                                <form action="{{route('admin.conference.destroy', $conference->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger sweet-confirm"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                {{$conferences->links()}}
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('script')
<!-- momment js is must -->
<script src="{{ asset('/admin/vendor/moment/moment.min.js') }}"></script>
    <!-- Material color picker -->
    <script src="{{ asset('/admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('/admin/js/plugins-init/material-date-picker-init.js') }}"></script>
@endsection
