@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Live Statistic</h1>
                    <a href="{{route('admin.live_statistic.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
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
                          <h4 class="card-title">Live Statistic Datatable</h4>
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
                                  <th>Title number 1</th>
                                  <th>Country name 1</th>
                                  <th>Country Son 1</th>
                                  <th>Forum 1</th>
                                  <th>Yarmarka 1</th>
                                  <th>Is Active</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              @foreach ($live_statistics as $live_static)
                                  <tr>
                                    <td>{{($live_statistics->currentpage() - 1) * $live_statistics->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$live_static->titlenumber_1}}</td>
                                    <td>{{$live_static->countryname_1}}</td>
                                    <td>{{$live_static->countryson_1}}</td>
                                    <td>{{$live_static->forum_1}}</td>
                                    <td>{{$live_static->yarmarka_1}}</td>
                                    <td>
                                        <form action="{{ asset('/admin/live_statistic/isactive/' . $live_static->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="sweetalert">
                                                <button type="button"
                                                    class="
                                        @if ($live_static->is_active == 1) btn-success @endif
                                    @if ($live_static->is_active == 0) btn-danger @endif
                                        btn sweet-confirm">
                                                    @if ($live_static->is_active == 1)
                                                        Active
                                                    @endif
                                                    @if ($live_static->is_active == 0)
                                                        Not Active
                                                    @endif
                                                </button>
                                            </div>
                                        </form>

                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{route('admin.news.show', $new->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a> --}}
                                            <a href="{{route('admin.live_statistic.edit', $live_static->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <form action="{{route('admin.live_statistic.destroy', $live_static->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger sweet-confirm"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                  </tr>
                              @endforeach
                            </table>
                            {{$live_statistics->links()}}
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
