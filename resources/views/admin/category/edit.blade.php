@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.category.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.category.update', $category->id)}}" method="POST" >
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">Name uz</label> --}}
                        <input type="hidden" name="id" class="form-control" id="id"  value="{{$category->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="name_uz">Name uz</label>
                        <input type="text" name="name_uz" class="form-control" id="name_uz" placeholder="name_uz" value="{{$category->name_uz}}" />
                    </div>

                    <div class="mb-3">
                        <label for="name_ru">Name ru</label>
                        <input type="text" name="name_ru" class="form-control" id="name_ru" placeholder="name_ru" value="{{$category->name_ru}}" />
                    </div>

                    <div class="mb-3">
                        <label for="name_en">Name en</label>
                        <input type="text" name="name_en" class="form-control" id="name_en" placeholder="name_en" value="{{$category->name_en}}" />
                    </div>



                    <div class="mb-3 form-check">
                        <input type="checkbox"   @if($category->is_active==1) checked @endif name="is_active"  class="form-check-input" id="is_active">
                        <label class="form-check-label" for="is_active">Is_Active</label>
                    </div>

                        <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




