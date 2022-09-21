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
                <form action="{{route('admin.innoweek.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{old('id')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address enter" value="{{old('address')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Tel format +998991234567 yoki 991234567 kabi" value="{{old('phone')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email enter" value="{{old('email')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="telegram">Telegram</label>
                        <input type="url" name="telegram" class="form-control" id="telegram" placeholder="Telegram url enter" value="{{old('telegram')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="instagram">Instagram</label>
                        <input type="url" name="instagram" class="form-control" id="instagram" placeholder="Instagram url enter" value="{{old('instagram')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="facebook">Facebook</label>
                        <input type="url" name="facebook" class="form-control" id="facebook" placeholder="Facebook url enter" value="{{old('facebook')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="you_tube">YouTube</label>
                        <input type="url" name="you_tube" class="form-control" id="you_tube" placeholder="YouTube url enter" value="{{old('you_tube')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="desc_uz">Description uz</label>
                        <textarea name="description_uz" id="desc_uz" class="form-control" cols="10" rows="5">{{old('description_uz')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="desc_ru">Description ru</label>
                        <textarea name="description_ru" id="desc_ru" class="form-control" cols="10" rows="5">{{old('description_ru')}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="desc_en">Description en</label>
                        <textarea name="description_en" id="desc_en" class="form-control" cols="10" rows="5">{{old('description_en')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




