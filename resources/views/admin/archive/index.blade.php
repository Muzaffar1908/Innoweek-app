@extends('admin.layout.app')

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
                        <div class="card-header">
                          <h4 class="card-title">Archive Datatable</h4>
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
                                  <th>Year</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Is active</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              @foreach ($archives as $archive)
                                  <tr>
                                    <td>{{($archives->currentpage() - 1) * $archives->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$archive->year}}</td>
                                    <td>{{$archive->title_uz}}</td>
                                    <td>{{Str::limit(strip_tags($archive->description_uz),20)}}</td>
                                    <td>
                                        {{$archive->is_active}}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.archive.show', $archive->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                            <a href="{{route('admin.archive.edit', $archive->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <form action="{{route('admin.archive.destroy', $archive->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="sweetalert">
                                                    <button type="submit" class="btn btn-danger sweet-confirm"><i class="bi bi-trash"></i></button>
                                                </div>
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


