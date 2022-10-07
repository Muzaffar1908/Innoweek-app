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
                    <h1 class="card-title">Archives</h1>
                    <a href="{{route('admin.archive.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
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

                <div class="card-body">
                    <div class="card">
                        <form action="" method="GET">
                            <div class="row form-material m-2">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="Boshlanish vaqtini kiriting..." id="mdate" name="created_at" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Yilini kiriting kiriting..." name="year" />
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        Ma'lumotlarni izlash
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table"
                              id="example3"
                              class="display"
                              style="min-width: 845px"
                            >
                              <thead class="thead-primary">
                                <tr>
                                  <th>№</th>
                                  <th>Year</th>
                                  <th>Created At</th>
                                  <th>User name</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <?php
                                    use Carbon\Carbon;
                               ?>
                              @foreach ($archives as $archive)
                                  <tr>
                                    <td>{{($archives->currentpage() - 1) * $archives->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$archive->year}}</td>
                                    <td>{{Carbon::parse($archive->created_at)->format('d/m/Y')}}</td>
                                    <td>{{$archive->archiveTable->first_name}}</td>
                                    <td>
                                        <form action="{{ asset('/admin/archive/isactive/' . $archive->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="sweetalert">
                                                <button type="button"
                                                    class="
                                        @if ($archive->is_active == 1) btn-success @endif
                                    @if ($archive->is_active == 0) btn-danger @endif
                                        btn sweet-confirm">
                                                    @if ($archive->is_active == 1)
                                                        Active
                                                    @endif
                                                    @if ($archive->is_active == 0)
                                                        Not Active
                                                    @endif
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{route('admin.archive.show', $archive->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a> --}}
                                            <a href="{{route('admin.archive.edit', $archive->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <form action="{{route('admin.archive.destroy', $archive->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger sweet-confirm"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                  </tr>
                              @endforeach
                            </table>
                            {{$archives->links()}}
                          </div>
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


