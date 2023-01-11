@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.promo.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.promo.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{old('id')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="user_id">Username</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="archive_id">Archvie year</label>
                        <select name="archive_id" class="form-control" id="archive_id">
                            @foreach ($archives as $archive)
                                <option value="{{$archive->id}}">{{$archive->year}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="url_uz">YouTube ID uz</label>
                        <input type="text" name="url_uz"  class="form-control" id="url_uz" placeholder="Youtobe ID uz enter" value="{{old('url_uz')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="url_ru">YouTube ID ru</label>
                        <input type="text" name="url_ru"  class="form-control" id="url_ru" placeholder="Youtobe ID ru enter" value="{{old('url_ru')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="url_en">YouTube ID en</label>
                        <input type="text" name="url_en"  class="form-control" id="url_en" placeholder="Youtobe ID en enter" value="{{old('url_en')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="promo_date_uz">Promo Date uz</label>
                        <input type="text" name="promo_date_uz"  class="form-control" id="promo_date_uz" placeholder="Promo Date uz" value="{{old('promo_date_uz')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="promo_date_ru">Promo Date ru</label>
                        <input type="text" name="promo_date_ru"  class="form-control" id="promo_date_ru" placeholder="Promo Date ru" value="{{old('promo_date_ru')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="promo_date_en">Promo Date en</label>
                        <input type="text" name="promo_date_en"  class="form-control" id="promo_date_en" placeholder="Promo Date en" value="{{old('promo_date_en')}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




