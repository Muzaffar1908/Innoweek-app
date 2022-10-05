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
                <form action="{{route('admin.live360.update', $live360s->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        {{-- <label for="id">Title uz</label> --}}
                        <input type="hidden" name="id" class="form-control"  value="{{$live360s->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="youtobe_id_1">Youtobe ID 1</label>
                        <input type="text" name="youtobe_id_1"  class="form-control" id="youtobe_id_1" placeholder="Youtobe ID 1 enter" value="{{$live360s->youtobe_id_1}}" />
                    </div>

                    <div class="mb-3">
                        <label for="youtobe_id_2">Youtobe ID 2</label>
                        <input type="text" name="youtobe_id_2"  class="form-control" id="youtobe_id_2" placeholder="Youtobe ID 2 enter" value="{{$live360s->youtobe_id_2}}" />
                    </div>

                    <div class="mb-3">
                        <label for="youtobe_id_3">Youtobe ID 3</label>
                        <input type="text" name="youtobe_id_3"  class="form-control" id="youtobe_id_3" placeholder="Youtobe ID 3 enter" value="{{$live360s->youtobe_id_3}}" />
                    </div>

                    <div class="mb-3">
                        <label for="youtobe_id_4">Youtobe ID 4</label>
                        <input type="text" name="youtobe_id_4"  class="form-control" id="youtobe_id_4" placeholder="Youtobe ID 4 enter" value="{{$live360s->youtobe_id_4}}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection




