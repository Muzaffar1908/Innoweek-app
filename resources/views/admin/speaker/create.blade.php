@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.speaker.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.speaker.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <div class="mb-3">
                        {{-- <label for="id">id</label> --}}
                        <input type="hidden" name="id"  id="id"  value="{{old('id')}}" />
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
                        <label for="fullname">Fullname</label>
                        <input type="text" name="fullname"  class="form-control" id="fullname" placeholder="Fullname enter" value="{{old('fullname')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="job">Job</label>
                        <input name="job" id="job" class="form-control" cols="10" rows="5">{{old('job')}}</input>
                    </div>

                    <div class="mb-3">
                        <label for="ticket_image">image</label>
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
                        <label for="instagram_url">Instagram url</label>
                        <input type="text" name="instagram_url"  class="form-control" id="instagram_url" placeholder="Instagram url enter" value="{{old('instagram_url')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="twitter_url">Twitter url</label>
                        <input type="text" name="twitter_url"  class="form-control" id="twitter_url" placeholder="Twitter url enter" value="{{old('twitter_url')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="linkedin_url">LinkedIn url</label>
                        <input type="text" name="linkedin_url"  class="form-control" id="linkedin_url" placeholder="Linkedin url enter" value="{{old('linkedin_url')}}" />
                    </div>

                        <button type="submit" class="btn btn-success sweet-confirm">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection







