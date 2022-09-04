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
                        <div class="alert alert-danger alert-has-icon">
                            <div class="alert-icon">
                                <i class="far fa-lightbulb"></i>
                            </div>
                            <div class="alert-body">
                                <div class="alert-title">Error</div>
                                {{ session('warning') }}
                            </div>
                        </div>
                    </div>
                @endif

            <div class="card-body">
                <div class="basic-form">
                <form action="{{route('admin.menu.update', $menu->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id">Name uz</label> --}}
                        <input type="hidden" name="id" value="{{ isset($menu->id) ? $menu->id : null }}">
                    </div>

                    <div class="mb-3">
                        <label for="name_uz">Name uz</label>
                        <input type="text" name="name_uz" class="form-control" id="name_uz" placeholder="Name uz" value="{{$menu->name_uz}}">
                    </div>

                    <div class="mb-3">
                        <label for="name_ru">Name ru</label>
                        <input type="text" name="name_ru" class="form-control" id="name_ru" placeholder="Name ru" value="{{$menu->name_ru}}">
                    </div>

                    <div class="mb-3">
                        <label for="name_en">Name en</label>
                        <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Name en" value="{{$menu->name_en}}">
                    </div>

                    <div class="mb-3">
                        <label for="parent_id">Parent ID</label>
                        <input type="number" name="parent_id" class="form-control" id="parent_id" placeholder="Parent ID" value="{{$menu->parent_id}}">
                    </div>

                    <div class="mb-3">
                        <label for="live_url">Live url</label>
                        <input type="text" name="live_url" class="form-control" id="live_url" placeholder="Live url" value="{{$menu->live_url}}">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_live" class="form-check-input" id="is_live" value="{{$menu->is_live}}">
                        <label class="form-check-label" for="is_live">Is Live</label>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_active" class="form-check-input" id="is_active" value="{{$menu->is_active}}">
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




