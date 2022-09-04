@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Menus</h1>
                    <a href="{{route('admin.menu.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('warning'))
                    <div class="col-md-12">
                        <div class="alert alert-success alert-has-icon">
                            <div class="alert-icon">
                                <i class="far fa-lightbulb"></i>
                            </div>
                            <div class="alert-body">
                                <div class="alert-title">Added</div>
                                {{ session('warning') }}
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Menu Datatable</h4>
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
                                  <th>Name</th>
                                  <th>Parnet ID</th>
                                  <th>Is Live</th>
                                  <th>Live url</th>
                                  <th>Is active</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              @foreach ($menus as $menu)
                                  <tr>
                                    <td>{{($menus->currentpage() - 1) * $menus->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$menu->name_uz}}</td>
                                    <td>{{$menu->parent_id}}</td>
                                    <td>{{$menu->is_live}}</td>
                                    <td>{{$menu->live_url}}</td>
                                    <td>{{$menu->is_active}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.menu.show', $menu->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                            <a href="{{route('admin.menu.edit', $menu->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <form action="{{route('admin.menu.destroy', $menu->id)}}" method="POST">
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
                            {{$menus->links()}}
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
