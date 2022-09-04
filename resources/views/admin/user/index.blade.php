@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">User</h1>
                    <a href="{{route('admin.user.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
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
                          <h4 class="card-title">User Datatable</h4>
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
                                  <th>Firstname</th>
                                  <th>Lastname</th>
                                  <th>Middlename</th>
                                  <th>Gender</th>
                                  <th>Birth Date</th>
                                  <th>User image</th>
                                  <th>Address</th>
                                  <th>Balance</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Password</th>
                                  <th>Provider name</th>
                                  <th>Provider id</th>
                                  <th>Is Active</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              @foreach ($users as $user)
                                  <tr>
                                    <td>{{($users->currentpage() - 1) * $users->perpage() + ($loop->index+1)}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->middle_name}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->birth_date}}</td>
                                    <td>
                                        <img src="{{asset('upload/config/defaul_user.png' .$user->image)}}" alt="img" with="100px" height="60px">
                                    </td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->balance}}</td>
                                    <td>{{$user->email?:'Kiritilmagan'}}</td>
                                    <td>{{$user->phone?:'Kiritilmagan'}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>{{$user->provider_name}}</td>
                                    <td>{{$user->provider_id}}</td>
                                    <td>{{$user->is_active}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin.user.show', $user->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                            <a href="{{route('admin.user.edit', $user->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                            <form action="{{route('admin.user.destroy', $user->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <div class="sweetalert">
                                                    <button type="button" class="btn btn-danger sweet-confirm"><i class="bi bi-trash"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                  </tr>
                              @endforeach
                            </table>
                            {{$users->links()}}
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
