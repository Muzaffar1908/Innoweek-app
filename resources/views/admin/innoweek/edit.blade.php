@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.innoweek.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.innoweek.update', $innoweek->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{$innoweek->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address enter" value="{{$innoweek->address}}" />
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone enter" value="{{$innoweek->phone}}" />
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email enter" value="{{$innoweek->email}}" />
                    </div>

                    <div class="mb-3">
                        <label for="telegram">Telegram</label>
                        <input type="url" name="telegram" class="form-control" id="telegram" placeholder="Telegram url enter" value="{{$innoweek->telegram}}" />
                    </div>

                    <div class="mb-3">
                        <label for="instagram">Instagram</label>
                        <input type="url" name="instagram" class="form-control" id="instagram" placeholder="Instagram url enter" value="{{$innoweek->instagram}}" />
                    </div>

                    <div class="mb-3">
                        <label for="facebook">Facebook</label>
                        <input type="url" name="facebook" class="form-control" id="facebook" placeholder="Facebook url enter" value="{{$innoweek->facebook}}" />
                    </div>

                    <div class="mb-3">
                        <label for="you_tube">YouTube</label>
                        <input type="url" name="you_tube" class="form-control" id="you_tube" placeholder="YouTube url enter" value="{{$innoweek->you_tube}}" />
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description uz</label>
                        <textarea name="description_uz" id="mytextarea" cols="10" rows="5">{{$innoweek->description_uz}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description ru</label>
                        <textarea name="description_ru" id="mytextarea"  cols="10" rows="5">{{$innoweek->description_ru}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="mytextarea">Description en</label>
                        <textarea name="description_en" id="mytextarea" class="summernote" cols="10" rows="5">{{$innoweek->description_en}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection




