@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Push Notification</h1>
                    <a href="{{route('admin.push_notification.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
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
                            <h4 class="card-title">Push Notification</h4>
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
                                        <th>Image</th>
                                        <th>Text</th>
                                        <th>Is Active</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach ($push_notifications as $push)
                                        <tr>
                                            <td>{{($push_notifications->currentpage() - 1) * $push_notifications->perpage() + ($loop->index+1)}}</td>
                                            <td>
                                                <img src="{{asset('upload/push_notification/' .$push->image.'_thumbnail_130.png')}}" alt="img" with="100px" height="60px">
                                            </td>
                                            <td>{{$push->text_uz}}</td>
                                            <td>
                                                <form action="{{ asset('/admin/push_notification/is_active/' . $push->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="sweetalert">
                                                        <button type="button"
                                                            class="
                                                        @if ($push->is_active == 1) btn-success @endif
                                                        @if ($push->is_active == 0) btn-danger @endif
                                                          btn sweet-confirm">
                                                            @if ($push->is_active == 1)
                                                                Active
                                                            @endif
                                                            @if ($push->is_active == 0)
                                                                Not Active
                                                            @endif
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin.push_notification.edit', $push->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                                    <form action="{{route('admin.push_notification.destroy', $push->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger sweet-confirm"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{$push_notifications->links()}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
