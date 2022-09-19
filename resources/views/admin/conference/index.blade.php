@extends('admin.layout.app')

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

                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Conference Datatable</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table"
                              id="example3"
                              class="display"
                              style="min-width: 845px"
                            >
                              <thead>
                                <tr>
                                  <th>№</th>
                                  <th>Username</th>
                                  <th>Archive year</th>
                                  <th>Started At</th>
                                  <th>Stoped At</th>
                                  <th>Title</th>
                                  <th>Live url</th>
                                  <th>Innoweek Video</th>
                                  <th>User Image</th>
                                  <th>Address</th>
                                  <th>Description</th>
                                  <th>Is Active</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              @foreach ($conferences as $conference)
                                  <tr>
                                    <td>{{($conferences->currentpage() - 1) * $conferences->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$conference->conferenceTable->first_name}}</td>
                                    <td>{{$conference->archiveTable->year}}</td>
                                    <td>{{$conference->started_at}}</td>
                                    <td>{{$conference->stoped_at}}</td>
                                    <td>{{$conference->title_uz}}</td>
                                    <td>{{$conference->live_url}}</td>
                                    <td>{{$conference->innoweek_video}}</td>
                                      <td>
                                          <img src="{{asset('upload/conference/' .$conference->user_image.'-d.png')}}" alt="img" with="100px" height="60px">
                                      </td>
                                    <td>{{$conference->address_uz}}</td>
                                    <td>{!!Str::limit(strip_tags($conference->description_uz),20)!!}</td>
                                    <td>
                                        <form action="{{ asset('/admin/conference/isactive/' . $conference->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="sweetalert">
                                                <button type="button"
                                                    class="
                                        @if ($conference->is_active == 1) btn-success @endif
                                    @if ($conference->is_active == 0) btn-danger @endif
                                        btn sweet-confirm">
                                                    @if ($conference->is_active == 1)
                                                        Active
                                                    @endif
                                                    @if ($conference->is_active == 0)
                                                        Not Active
                                                    @endif
                                                </button>
                                            </div>
                                        </form>

                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{route('admin.conference.show', $conference->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a> --}}
                                            <a href="{{route('admin.conference.edit', $conference->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <form action="{{route('admin.conference.destroy', $conference->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger sweet-confirm"><i class="bi bi-trash"></i></button>
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
    </div>

@endsection
