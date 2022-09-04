@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.news_category.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                        <div class="alert alert-danger alert-has-icon">
                            <div class="alert-icon">
                                <i class="far fa-lightbulb"></i>
                            </div>
                            <div class="alert-body">
                                <div class="alert-title">Error</div>
                                {{ session('warning') }}
                            </div>
                        </div>
                    </div>
                @endif

            <div class="card-body">
                <div class="basic-form">
                <form action="{{route('admin.news_category.update', $news_categories->id)}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        {{-- <label for="id"></label> --}}
                        <input type="hidden" name="id"  class="form-control" id="id" placeholder="Firstname enter" value="{{$news_categories->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="user_id">Username</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach($users as $user)
                             <option value="{{$user->id}}">{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="parent_id">Parent ID</label>
                        <input type="number" name="parent_id"  class="form-control" id="parent_id" placeholder="Parent Id enter" value="{{$news_categories->parent_id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="title_uz">Title uz</label>
                        <input type="text" name="title_uz"  class="form-control" id="title_uz" placeholder="Title uz enter" value="{{$news_categories->title_uz}}" />
                    </div>

                    <div class="mb-3">
                        <label for="title_en">Title en</label>
                        <input type="text" name="title_en"  class="form-control" id="title_en" placeholder="Title uz enter" value="{{$news_categories->title_en}}" />
                    </div>

                    <div class="mb-3">
                        <label for="title_ru">Title uz</label>
                        <input type="text" name="title_ru"  class="form-control" id="title_ru" placeholder="Title uz enter" value="{{$news_categories->title_ru}}" />
                    </div>

                    <div class="mb-3">
                        <label for="is_active">Is Active</label>
                        <input type="checkbox" name="is_active"  class="form-control" id="is_active"  value="{{$news_categories->is_active}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>

        </div>
     </div>
  </div>

@endsection




