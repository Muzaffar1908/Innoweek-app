@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.menu.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.menu.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        {{-- <label for="id">Name uz</label> --}}
                        <input type="hidden" name="id" value="{{ isset($menu->id) ? $menu->id : null }}">
                    </div>

                    <div class="mb-3">
                        <label for="name_uz">Name uz</label>
                        <input type="text" name="name_uz" class="form-control" id="name_uz" placeholder="name_uz" value="{{old('name_uz')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="name_ru">Name ru</label>
                        <input type="text" name="name_ru" class="form-control" id="name_ru" placeholder="name_ru" value="{{old('name_ru')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="name_en">Name en</label>
                        <input type="text" name="name_en" class="form-control" id="name_en" placeholder="name_en" value="{{old('name_en')}}" />
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
                        <label for="parent_id">Parent ID</label>
                        <input type="number" name="parent_id" class="form-control" id="parent_id" placeholder="Parent ID" value="{{old('parent_id')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="live_url">Live url</label>
                        <input type="text" name="live_url" class="form-control" id="live_url" placeholder="live_url" value="{{old('live_url')}}"/>
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




