@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.speakers.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <div class="basic-form">
                <form action="{{route('admin.speakers.update', $speaker->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">id</label> --}}
                        <input type="hidden" name="id"  id="id"  value="{{$speaker->id}}"/>
                    </div>

                    <div class="mb-3">
                        <label for="archive_id">Archvie title uz</label>
                        <select name="archive_id" class="form-control" id="archive_id">
                            @foreach ($archives as $archive)
                                <option value="{{$archive->id}} " @if($archive->id==$speaker->archive_id) selected @endif>{{$archive->year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="archive_id">User</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}" @if($user->id==$speaker->user_id) selected @endif>{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="full_name">Fullname</label>
                        <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Fullname enter" value="{{$speaker->full_name}}" />
                    </div>

                    <div class="mb-3">
                        <label for="job">Job</label>
                        <input type="text" name="job" class="form-control" id="job" placeholder="Job enter" value="{{$speaker->job}}" />
                    </div>

                    <div class="mb-3">
                        <img src="{{asset('uploads/speaker/' .$speaker->image.'-d.png')}}" alt="img" with="100px" height="60px ">
                        <label for="ticket_image">image</label>
                        <input type="file" name="image"  class="form-control" id="image" placeholder="image enter" value="{{$speaker->image}}" />
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description uz</label>
                        <textarea name="description_uz" id="mytextarea" class="form-control" cols="10" rows="5">{{$speaker->description_uz}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description ru</label>
                        <textarea name="description_ru" id="mytextarea" class="form-control" cols="10" rows="5">{{$speaker->description_ru}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description en</label>
                        <textarea name="description_en" id="mytextarea" class="form-control" cols="10" rows="5">{{$speaker->description_en}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="facebook_url">Facebook url</label>
                        <input type="text" name="facebook_url" class="form-control" id="facebook_url" placeholder="facebook_url enter" value="{{$speaker->facebook_ur}}" />
                    </div>

                    <div class="mb-3">
                        <label for="youtube_url">Youtube url</label>
                        <input type="text" name="youtube_url" class="form-control" id="youtube_url" placeholder="youtube_url enter" value="{{$speaker->youtube_url}}" />
                    </div>
{{--                    {{dd($speaker)}}--}}

                    <div class="mb-3">
                        <label for="twitter_url">Twitter url</label>
                        <input type="text" name="twitter_url" class="form-control" id="twitter_url" placeholder="twitter_url enter" value="{{$speaker->twitter_url}}" />
                    </div>

                    <div class="mb-3">
                        <label for="linkedin_url">LinkedIn url</label>
                        <input type="text" name="linkedin_url" class="form-control" id="linkedin_url" placeholder="linkedin_url enter" value="{{$speaker->linkedin_url}}" />
                    </div>

                        <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




