@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">UserTicket</h1>
                    <a href="{{ route('admin.userticket.create') }}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
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
                            <h4 class="card-title">UserTicket Datatable</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>User name</th>
                                            <th>Archive year</th>
                                            <th>Ticket image</th>
                                            <th>Is Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($usertickets as $userticket)
                                        <tr>
                                            <td>{{ ($usertickets->currentpage() - 1) * $usertickets->perpage() + ($loop->index + 1) }}
                                            </td>
                                            <td>{{ $userticket->usersTable->first_name }}</td>
                                            <td>{{ $userticket->archiveTable->year }}</td>

                                            <td>
                                                <img src="{{ asset($userticket->user_image) }}" alt="img"
                                                    with="100px" height="60px">
                                            </td>
                                            <td>
                                                <form action="{{ asset('/admin/userticket/isactive/' . $userticket->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="sweetalert">
                                                        <button type="button"
                                                            class="
                                                @if ($userticket->is_active == 1) btn-success @endif
                                            @if ($userticket->is_active == 0) btn-danger @endif
                                                btn sweet-confirm">
                                                            @if ($userticket->is_active == 1)
                                                                Active
                                                            @endif
                                                            @if ($userticket->is_active == 0)
                                                                Not Active
                                                            @endif
                                                        </button>
                                                    </div>
                                                </form>

                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.userticket.show', $userticket->id) }}"
                                                        type="button" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                                    <a href="{{ route('admin.userticket.edit', $userticket->id) }}"
                                                        type="button" class="btn btn-success"><i
                                                            class="bi bi-pencil"></i></a>
                                                    <form action="{{ route('admin.userticket.destroy', $userticket->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="sweetalert">
                                                            <button type="button" class="btn btn-danger sweet-confirm"><i
                                                                    class="bi bi-trash"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{ $usertickets->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
