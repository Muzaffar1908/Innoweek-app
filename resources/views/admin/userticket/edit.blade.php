@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.userticket.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.userticket.update', $userticket->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="ticket_serial">Ticket serial</label> --}}
                        <input type="hidden" name="id"  class="form-control" id="id" placeholder="Ticket serial enter" value="{{$userticket->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="user_id">User name</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="ticket_serial">Ticket serial</label>
                        <input type="text" name="ticket_serial"  class="form-control" id="ticket_serial" placeholder="Ticket serial enter" value="{{$userticket->ticket_serial}}" />
                    </div>

                    <div class="mb-3">
                        <label for="ticket_url">Ticket url</label>
                        <input type="text" name="ticket_url"  class="form-control" id="ticket_url" placeholder="Ticket url enter" value="{{$userticket->ticket_url}}" />
                    </div>

                    <div class="mb-3">
                        <label for="ticket_image">Ticket image</label>
                        <img src="{{asset('uploads/ticket_image/' .$userticket->ticket_image)}}" alt="img" with="100px" height="60px ">
                        <input type="file" name="ticket_image"  class="form-control" id="ticket_image" placeholder="Ticket image enter" value="{{$userticket->ticket_image}}" />
                    </div>

                      <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>


        </div>
     </div>
  </div>

@endsection




