@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.conference.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                        <div class="alert alert-danger">
                            <div class="alert-body">
                                <div class="alert-title">Error</div>
                                {{ session('warning') }}
                            </div>
                        </div>
                    </div>
                @endif


            <div class="card-body">
                <div class="basic-form">
                <form action="{{route('admin.conference.update', $conference->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{$conference->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="user_id">Username</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach($users as $user)
                             <option value="{{$user->id}}" @if($user->id==$conference->user_id) selected @endif>{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="archive_id">Archive Year</label>
                        <select name="archive_id" class="form-control" id="archive_id">
                            @foreach($archives as $archive)
                             <option value="{{$archive->id}}" @if($conference->archive_id==$archive->id) selected @endif>{{$archive->year}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="started_at">Started At</label>
                        <input type="datetime-local" name="started_at" class="form-control" id="started_at" placeholder="Started At enter" value="{{$conference->started_at}}" />
                    </div>

                    <div class="mb-3">
                        <label for="stoped_at">Stoped At</label>
                        <input type="datetime-local" name="stoped_at" class="form-control" id="stoped_at" placeholder="Stoped At enter" value="{{$conference->stoped_at}}" />
                    </div>

                    <div class="mb-3">
                        <label for="title_uz">Title uz</label>
                        <input type="text" name="title_uz" class="form-control" id="title_uz" placeholder="Title uz enter" value="{{$conference->title_uz}}" />
                    </div>

                    <div class="mb-3">
                        <label for="title_ru">Title ru</label>
                        <input type="text" name="title_ru" class="form-control" id="title_ru" placeholder="Title ru enter" value="{{$conference->title_ru}}" />
                    </div>

                    <div class="mb-3">
                        <label for="title_en">Title en</label>
                        <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Title en enter" value="{{$conference->title_en}}" />
                    </div>

                    <div class="mb-3">
                        <label for="live_url">Live url</label>
                        <input type="text" name="live_url" class="form-control" id="live_url" placeholder="Live url enter" value="{{$conference->live_url}}" />
                    </div>

                    {{-- <div class="mb-3">
                        <label for="innoweek_video">Innoweek video</label>
                        <input type="url" name="innoweek_video" class="form-control" id="innoweek_video" placeholder="Live url enter" value="{{$conference->innoweek_video}}" />
                    </div> --}}

                    <div class="mb-3">
                        <label for="user_image">User image</label><br>
                        <img src="{{asset('upload/conference/' .$conference->user_image.'_thumbnail_267.png')}}" alt="img" with="100px" height="60px">
                        <input type="file" name="user_image"  class="form-control" id="user_image" placeholder="User image enter"/>
                    </div>

                     <div class="mb-3">
                        <label for="address_uz">Address Uz</label>
                        <input type="text" name="address_uz"  class="form-control" id="address_uz" placeholder="Address uz enter" value="{{$conference->address_uz}}" />
                    </div>

                    <div class="mb-3">
                        <label for="address_ru">Address Ru</label>
                        <input type="text" name="address_ru"  class="form-control" id="address_ru" placeholder="Address ru enter" value="{{$conference->address_ru}}" />
                    </div>

                    <div class="mb-3">
                        <label for="address_en">Address En</label>
                        <input type="text" name="address_en"  class="form-control" id="address_en" placeholder="Address en enter" value="{{$conference->address_en}}" />
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description uz</label>
                        <textarea name="description_uz" id="mytextarea" cols="10" rows="5">{{$conference->description_uz}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description ru</label>
                        <textarea name="description_ru" id="mytextarea"  cols="10" rows="5">{{$conference->description_ru}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description en</label>
                        <textarea name="description_en" id="mytextarea" class="summernote" cols="10" rows="5">{{$conference->description_en}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection




