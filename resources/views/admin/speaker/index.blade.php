@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Speakers</h1>
                    <a href="{{route('admin.speakers.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
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
                                    <input type="text" class="form-control" placeholder="Sarlavhani kiriting..." name="job" />
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
                                  <th>Job</th>
                                  <th>Fullname</th>
                                  <th>Created At</th>
                                  <th>Archive Year</th>
                                  <th>Image</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              @foreach ($speakers as $speaker)

                                  <tr>
                                    <td>{{($speakers->currentpage() - 1) * $speakers->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$speaker->job_uz}}</td>
                                    <td>{{$speaker->full_name_uz}}</td>
                                    <td>{{$speaker->created_at}}</td>
                                    <td>{{$speaker->archiveTable->year}}</td>
                                      <td>
                                          <img src="{{asset('upload/speaker/' .$speaker->image.'_thumbnail_267.png')}}" alt="img" with="100px" height="60px">
                                      </td>
                                    <td>
                                        <form action="{{ asset('/admin/speaker/isactive/' . $speaker->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="sweetalert">
                                                <button type="button"
                                                    class="
                                            @if ($speaker->is_active == 1) btn-success @endif
                                            @if ($speaker->is_active == 0) btn-danger @endif
                                            btn sweet-confirm">
                                                    @if ($speaker->is_active == 1)
                                                        Active
                                                    @endif
                                                    @if ($speaker->is_active == 0)
                                                        Not Active
                                                    @endif
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{route('admin.speakers.show', $speaker->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a> --}}
                                            <a href="{{route('admin.speakers.edit', $speaker->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <form action="{{route('admin.speakers.destroy', $speaker->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                  </tr>
                              @endforeach
                            </table>
                            {{$speakers->links()}}
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
