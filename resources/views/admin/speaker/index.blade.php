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
                        <div class="card-header">
                          <h4 class="card-title">Speaker Datatable</h4>
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
                                  <th>Archive year</th>
                                  <th>User</th>
                                  <th>Fullname</th>
                                  <th>Job</th>
                                  <th>Description</th>
                                  <th>image</th>
                                  <th>Facebook url</th>
                                  <th>Youtube url</th>
                                  <th>Twitter url</th>
                                  <th>Linkedin url</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              @foreach ($speakers as $speaker)

                                  <tr>
                                    <td>{{($speakers->currentpage() - 1) * $speakers->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$speaker->archiveTable->year}}</td>
                                    <td>{{$speaker->usersTable->first_name}}</td>
                                    <td>{{$speaker->full_name}}</td>
                                    <td>{{$speaker->job}}</td>
                                    <td>{{Str::limit(strip_tags($speaker->description_uz), 20)}}</td>
                                      <td>
                                          <img src="{{asset('uploads/speaker/' .$speaker->image.'-d.png')}}" alt="img" with="100px" height="60px">
                                      </td>
                                    <td>{{$speaker->facebook_ur}}</td>
                                    <td>{{$speaker->youtube_url}}</td>
                                    <td>{{$speaker->twitter_url}}</td>
                                    <td>{{$speaker->linkedin_url}}</td>
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
