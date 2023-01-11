@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Promo</h1>
                    <a href="{{route('admin.promo.create')}}" class="btn btn-success"><i class="bi bi-plus"></i>Add</a>
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
                            <h4 class="card-title">Promo</h4>
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
                                        <th>№</th>
                                        <th>YouTube ID</th>
                                        <th>Archive Year</th>
                                        <th>Promo Date</th>
                                        <th>User name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach ($promo as $pro)
                                        <tr>
                                            <td>{{($promo->currentpage() - 1) * $promo->perpage() + ($loop->index+1)}}</td>
                                            <td>{{$pro->url_uz}}</td>
                                            <td>{{$pro->archiveTable->year}}</td>
                                            <td>{{$pro->promo_date_uz}}</td>
                                            <td>{{$pro->UserTable->first_name}}</td>
                                            <td>
                                                <form action="{{ asset('/admin/promo/is_active/' . $pro->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="sweetalert">
                                                        <button type="button"
                                                            class="
                                                        @if ($pro->is_active == 1) btn-success @endif
                                                        @if ($pro->is_active == 0) btn-danger @endif
                                                          btn sweet-confirm">
                                                            @if ($pro->is_active == 1)
                                                                Active
                                                            @endif
                                                            @if ($pro->is_active == 0)
                                                                Not Active
                                                            @endif
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>

                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('admin.promo.edit', $pro->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                                    <form action="{{route('admin.promo.destroy', $pro->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger sweet-confirm"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{$promo->links()}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
