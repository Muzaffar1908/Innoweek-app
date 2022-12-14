@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.news.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.news.update', $news->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{$news->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="user_id">Username</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach($users as $user)
                             <option value="{{$user->id}}" @if($user->id==$news->user_id) selected @endif>{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cat_id">Categoryname</label>
                        <select name="cat_id" class="form-control" id="cat_id">
                            @foreach($news_categories as $news_cat)
                             <option value="{{$news_cat->id}}" @if($news_cat->id==$news->cat_id) selected @endif>{{$news_cat->title_uz}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="title_uz">Title uz</label>
                        <input type="text" name="title_uz" class="form-control" id="title_uz" placeholder="Title uz enter" value="{{$news->title_uz}}" />
                    </div>

                    <div class="mb-3">
                        <label for="title_ru">Title ru</label>
                        <input type="text" name="title_ru" class="form-control" id="title_ru" placeholder="Title ru enter" value="{{$news->title_ru}}" />
                    </div>

                    <div class="mb-3">
                        <label for="title_en">Title en</label>
                        <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Title en enter" value="{{$news->title_en}}" />
                    </div>

                    <div class="mb-3">
                        <label for="user_image">User image</label><br>
                        <img src="{{asset('/upload/news/' . $news->user_image.'_thumbnail_450.png')}}" alt="img" with="100px" height="60px">
                        <input type="file" name="user_image"  class="form-control" id="user_image" placeholder="User image enter" />
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description uz</label>
                        <textarea name="description_uz" id="mytextarea" cols="10" rows="5">{{$news->description_uz}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description ru</label>
                        <textarea name="description_ru" id="mytextarea" cols="10" rows="5">{{$news->description_ru}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description en</label>
                        <textarea name="description_en" id="mytextarea"  cols="10" rows="5">{{$news->description_en}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="is_active">Is Active</label>
                        <input type="checkbox" name="is_active"  id="is_active"  value="{{$news->is_active}}" />
                    </div>

                    <div class="mb-3">
                        <label for="tags">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags" placeholder="Tags enter" value="{{$news->tags}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




