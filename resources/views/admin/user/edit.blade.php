@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('admin.user.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('admin.user.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id"></label> --}}
                        <input type="hidden" name="id"  class="form-control" id="id" placeholder="Firstname enter" value="{{$user->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="first_name">Firstname</label>
                        <input type="text" name="first_name"  class="form-control" id="first_name" placeholder="Firstname enter" value="{{$user->first_name}}" />
                    </div>

                    <div class="mb-3">
                        <label for="last_name">Lastname</label>
                        <input type="text" name="last_name"  class="form-control" id="last_name" placeholder="Lastname enter" value="{{$user->last_name}}" />
                    </div>

                    <div class="mb-3">
                        <label for="middle_name">Middlename</label>
                        <input type="text" name="middle_name"  class="form-control" id="middle_name" placeholder="Middlename enter" value="{{$user->middle_name}}" />
                    </div>

                    <div class="mb-3">
                        <label for="erkak">Erkak</label>
                        <input type="radio" name="gender"   id="erkak"  value="1" />

                        <label for="ayol">Ayol</label>
                        <input type="radio" name="gender"   id="ayol"  value="0" />
                    </div>

                    <div class="mb-3">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" name="birth_date"  class="form-control" id="birth_date" placeholder="Birth Date enter" value="{{$user->birth_date}}" />
                    </div>

                    <div class="mb-3">
                        <label for="user_image">User image</label>
                        <input type="file" name="user_image"  class="form-control" id="user_image" placeholder="User image enter" value="{{$user->user_image}}" />
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address"  class="form-control" id="address" placeholder="Address enter" value="{{$user->address}}" />
                    </div>

                    <div class="mb-3">
                        <label for="balance">Balance</label>
                        <input type="number" name="balance"  class="form-control" id="balance" placeholder="Balance enter" value="{{$user->balance}}" />
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email"  class="form-control" id="email" placeholder="Email enter" value="{{$user->email}}" />
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone"  class="form-control" id="phone"  placeholder="Phone enter" value="{{$user->phone}}" />
                    </div>

                    <div class="mb-3">
                        <label for="provider_name">Provider name</label>
                        <input type="text" name="provider_name"  class="form-control" id="provider_name"  placeholder="Provider name enter" value="{{$user->proiver_name}}" />
                    </div>

                    <div class="mb-3">
                        <label for="provider_id">Provider ID</label>
                        <input type="number" name="provider_id"  class="form-control" id="provider_id"  placeholder="Provider ID enter" value="{{$user->provider_id }}" />
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
            
                </form>
                </div>
            </div>

        </div>
     </div>
  </div>

@endsection




