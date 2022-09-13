@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.archive.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.archive.update', $archive->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">Id</label> --}}
                        <input type="hidden" name="id"  id="id"  value="{{$archive->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="user_id">Username</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach($users as $user)
                             <option value="{{$user->id}}" @if($user->id==$archive->user_id) selected @endif>{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="year">Year</label>
                        <input type="text" name="year" class="form-control" id="year" placeholder="Year" value="{{$archive->year}}">
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description uz</label>
                        <textarea name="description_uz" id="mytextarea" class="form-control" cols="10" rows="5">{{$archive->description_uz}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description ru</label>
                        <textarea name="description_ru" id="mytextarea" class="form-control" cols="10" rows="5">{{$archive->description_ru}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description en</label>
                        <textarea name="description_en" id="mytextarea" class="form-control" cols="10" rows="5">{{$archive->description_en}}</textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_active" class="form-check-input" id="is_active" value="{{$archive->is_active}}">
                        <label class="form-check-label" for="is_active">Is_Active</label>
                    </div>

                        <button type="submit" class="btn btn-success ">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




