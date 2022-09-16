@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.galeries.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.galeries.update',['galery'=>$galeries->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{$galeries->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="archive_id">User</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}" @if($user->id==$galeries->user_id) selected @endif>{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="archive_id">Archvie year</label>
                        <select name="archive_id" class="form-control" id="archive_id">
                            @foreach ($archives as $archive)
                                <option value="{{$archive->id}} " @if($archive->id==$galeries->archive_id) selected @endif>{{$archive->year}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label><br>
                        <img src="{{asset('upload/galeries/' .$galeries->image.'-d.png')}}" alt="img" with="100px" height="60px">
                        <input type="file" name="image"  class="form-control" id="image" placeholder="User image enter" value="{{$galeries->image}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection




