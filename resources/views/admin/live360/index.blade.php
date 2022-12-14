@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Live 360</h1>
                    {{-- <a href="{{route('admin.live360.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a> --}}
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
                          <h4 class="card-title">Live 360 Datatable</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table"
                              id="example3"
                              class="display"
                              style="min-width: 845px"
                            >
                              <thead class="thead-primary">
                                <tr>
                                  <th>???</th>
                                  <th>Youtobe ID 1</th>
                                  <th>Youtobe ID 2</th>
                                  <th>Youtobe ID 3</th>
                                  <th>Youtobe ID 4</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              @foreach ($live360s as $live360)
                                  <tr>
                                    <td>{{($live360s->currentpage() - 1) * $live360s->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$live360->youtobe_id_1}}</td>
                                    <td>{{$live360->youtobe_id_2}}</td>
                                    <td>{{$live360->youtobe_id_3}}</td>
                                    <td>{{$live360->youtobe_id_4}}</td>
                                    <td>
                                        <form action="{{ asset('/admin/live360/isactive/' . $live360->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="sweetalert">
                                                <button type="button"
                                                    class="
                                        @if ($live360->is_active == 1) btn-success @endif
                                        @if ($live360->is_active == 0) btn-danger @endif
                                        btn sweet-confirm">
                                                    @if ($live360->is_active == 1)
                                                        Active
                                                    @endif
                                                    @if ($live360->is_active == 0)
                                                        Not Active
                                                    @endif
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{route('admin.news.show', $new->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a> --}}
                                            <a href="{{route('admin.live360.edit', $live360->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <form action="{{route('admin.live360.destroy', $live360->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger sweet-confirm"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                  </tr>
                              @endforeach
                            </table>
                            {{$live360s->links()}}
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
