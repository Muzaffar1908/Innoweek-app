@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Partners</h4>
                <a href="{{route('admin.partner.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.partner.update', $partners->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{$partners->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label><br>
                        <img src="{{asset('upload/partners/' .$partners->image.'-d.png')}}" alt="img" with="100px" height="60px">
                        <input type="file" name="image"  class="form-control" id="image" placeholder="User image enter" value="{{$partners->image}}" />
                    </div>

                    <div class="mb-3">
                        <label for="image_url">Image Url</label>
                        <input type="url" name="image_url"  class="form-control" id="image_url" placeholder=" Image url enter" value="{{$partners->image_url}}" />
                    </div>


                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection




