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
                                            <th>Familya Ism Shaxsi</th>
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
                                            <td>{{ $user->country_name }}</td>
                                       
                                            <td>{{ $user->email ?: 'Kiritilmagan' }}</td>
                                            <td>{{ $user->phone ?: 'Kiritilmagan' }}</td>
                                            <td>
                                                <form action="{{ asset('/employee/user/isactive/' . $user->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="sweetalert">
                                                        <button type="button"
                                                            class="
                                    @if ($user->is_active == 1) btn-success @endif
                                @if ($user->is_active == 0) btn-danger @endif
                                    btn sweet-confirm">
                                                            @if ($user->is_active == 1)
                                                                Active
                                                            @endif
                                                            @if ($user->is_active == 0)
                                                                Not Active
                                                            @endif
                                                        </button>
                                                    </div>
                                                </form>
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
