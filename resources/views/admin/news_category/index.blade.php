@extends('admin.layout.app')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">News Category</h1>
                    <a href="{{ route('admin.news_category.create') }}" class="btn btn-success"><i
                            class="bi bi-plus"></i>Add</a>
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
                            <h4 class="card-title">News Category Datatable</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="example3" class="display" style="min-width: 845px">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th>???</th>
                                            <th>User name</th>
                                            <th>Parent ID</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($news_categories as $news_category)
                                        <tr>
                                            <td>{{ ($news_categories->currentpage() - 1) * $news_categories->perpage() + ($loop->index + 1) }}
                                            </td>
                                            <td>{{ $news_category->usersTable->first_name }}</td>
                                            <td>{{ $news_category->parent_id }}</td>
                                            <td>{{ $news_category->title_uz }}</td>
                                            <td>
                                                <form action="{{ asset('/admin/news_cat/isactive/' . $news_category->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="sweetalert">
                                                        <button type="button"
                                                            class="
                                                    @if ($news_category->is_active == 1) btn-success @endif
                                                    @if ($news_category->is_active == 0) btn-danger @endif
                                                    btn sweet-confirm">
                                                            @if ($news_category->is_active == 1)
                                                                Active
                                                            @endif
                                                            @if ($news_category->is_active == 0)
                                                                Not Active
                                                            @endif
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <a href="{{ route('admin.news_category.show', $news_category->id) }}"
                                                        type="button" class="btn btn-info"><i class="bi bi-eye"></i></a> --}}
                                                    <a href="{{ route('admin.news_category.edit', $news_category->id) }}"
                                                        type="button" class="btn btn-success"><i
                                                            class="bi bi-pencil"></i></a>
                                                    <form
                                                        action="{{ route('admin.news_category.destroy', $news_category->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="bi bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{ $news_categories->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
