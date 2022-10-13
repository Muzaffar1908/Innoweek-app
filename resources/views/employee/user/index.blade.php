@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">User</h1>
                    <a href="{{ route('admin.user.create') }}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
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
                                <table class="table" id="example3" class="display" style="min-width: 845px">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th>№</th>
                                            <th>Familya Ism Sharifi</th>
                                            <th>E-Mail</th>
                                            <th>Telefon Raqami</th>
                                            <th>Davlat</th>
                                            <th>Kasbi & Mutaxasisligi</th>
                                            <th>Tashkiloti</th> 
                                            <th>Jinsi</th>
                                            <th>Ro'yxatdan O'tgan Sanasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ($users->currentpage() - 1) * $users->perpage() + ($loop->index + 1) }}
                                            </td>
                                            <td>{{ $user->full_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->country_name  }}</td>
                                            <td>{{ $user->profession_name }}</td>
                                            <td>{{ $user->organization }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <a href="{{ route('admin.user.show', $user->id) }}" type="button" class="btn btn-info"><i
                                                            class="bi bi-eye"></i></a> --}}
                                                    <a href="{{ route('emp.user.edit', $user->user_id) }}" type="button" class="btn btn-success"><i
                                                            class="bi bi-pencil"></i></a>
                                                    <form action="{{ route('emp.user.destroy', $user->user_id) }}" method="POST" enctype="multipart/form-data">
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
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
