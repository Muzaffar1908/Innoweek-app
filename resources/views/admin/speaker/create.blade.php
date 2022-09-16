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
                <form action="{{route('admin.speakers.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <div class="mb-3">
                        {{-- <label for="id">id</label> --}}
                        <input type="hidden" name="id"  id="id"  value="{{old('id')}}" />
                    </div>
                    <div class="mb-3">
                        <label for="archive_id">UserName</label>
                        <select name="user_id" class="form-control" id="archive_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="archive_id">Archvie title uz</label>
                        <select name="archive_id" class="form-control" id="archive_id">
                            @foreach ($archives as $archive)
                                <option value="{{$archive->id}}">{{$archive->year}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="full_name_uz">Fullname Uz</label>
                        <input type="text" name="full_name_uz"  class="form-control" id="full_name_uz" placeholder="Fullname Uz enter" value="{{old('full_name_uz')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="full_name_ru">Fullname Ru</label>
                        <input type="text" name="full_name_ru"  class="form-control" id="full_name_ru" placeholder="Fullname Ru enter" value="{{old('full_name_ru')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="full_name_en">Fullname En</label>
                        <input type="text" name="full_name_en"  class="form-control" id="full_name_en" placeholder="Fullname En enter" value="{{old('full_name_en')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="job_uz">Job Uz</label>
                        <input type="text" name="job_uz" class="form-control" id="job_uz" placeholder="Job Uz enter" value="{{old('job_uz')}}">
                    </div>

                    <div class="mb-3">
                        <label for="job_ru">Job Ru</label>
                        <input type="text" name="job_ru" class="form-control" id="job_ru" placeholder="Job Ru enter" value="{{old('job_ru')}}">
                    </div>

                    <div class="mb-3">
                        <label for="job_en">Job En</label>
                        <input type="text" name="job_en" class="form-control" id="job_en" placeholder="Job En enter" value="{{old('job_en')}}">
                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image"  class="form-control" id="image" placeholder="image enter" value="{{old('image')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description uz</label>
                        <textarea name="description_uz" class="mytextarea" class="form-control" cols="10" rows="5">{{old('description_uz')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description ru</label>
                        <textarea name="description_ru" class="mytextarea" class="form-control" cols="10" rows="5">{{old('description_ru')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description en</label>
                        <textarea name="description_en" class="mytextarea" class="form-control" cols="10" rows="5">{{old('description_en')}}</textarea>
                    </div>


                    <div class="mb-3">
                        <label for="facebook_url">Facebook url</label>
                        <input type="text" name="facebook_url"  class="form-control" id="facebook_url" placeholder="Facebook url enter" value="{{old('facebook_url')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="youtube_url">Youtube url</label>
                        <input type="text" name="youtube_url"  class="form-control" id="youtube_url" placeholder="Instagram url enter" value="{{old('instagram_url')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="twitter_url">Twitter url</label>
                        <input type="text" name="twitter_url"  class="form-control" id="twitter_url" placeholder="Twitter url enter" value="{{old('twitter_url')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="linkedin_url">LinkedIn url</label>
                        <input type="text" name="linkedin_url"  class="form-control" id="linkedin_url" placeholder="Linkedin url enter" value="{{old('linkedin_url')}}" />
                    </div>

                        <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection







