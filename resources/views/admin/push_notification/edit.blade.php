@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.push_notification.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.push_notification.update', $push_notifications->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{$push_notifications->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label>
                        <img src="{{asset('upload/push_notification/' .$push_notifications->image.'_thumbnail_130.png')}}" alt="img" with="100px" height="60px">
                        <input type="file" name="image"  class="form-control" id="image" placeholder="Image enter" />
                    </div>

                    <div class="mb-3">
                        <label for="text_uz">Text uz</label>
                        <input type="text" name="text_uz"  class="form-control" id="text_uz" placeholder="Text uz enter" value="{{$push_notifications->text_uz}}"  />
                    </div>

                    <div class="mb-3">
                        <label for="text_ru">Text ru</label>
                        <input type="text" name="text_ru"  class="form-control" id="text_ru" placeholder="Text ru enter" value="{{$push_notifications->text_ru}}" />
                    </div>

                    <div class="mb-3">
                        <label for="text_en">Text en</label>
                        <input type="text" name="text_en"  class="form-control" id="text_en" placeholder="Text en enter" value="{{$push_notifications->text_en}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




