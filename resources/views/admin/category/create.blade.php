@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.category.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
            </div>

            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('admin.category.store')}}" method="POST" >
                        @csrf

                        <div class="mb-3">
                            {{-- <label for="id">Name uz</label> --}}
                            <input type="hidden" name="id" class="form-control" id="id"  value="{{old('id')}}" />
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

                        <button type="submit" class="btn btn-success">Save</button>
                   </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




