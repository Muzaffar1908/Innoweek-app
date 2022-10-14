@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form grid</h4>
                <a href="{{route('emp.user.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a>
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
                <form action="{{route('emp.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        {{-- <label for="id"></label> --}}
                        <input type="hidden" name="id"  class="form-control" id="id" placeholder="Firstname enter" value="{{$user->id}}" />
                    </div>

                    <div class="mb-3">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name"  class="form-control" id="first_name" placeholder="Firstname enter" value="{{$user->first_name}}" />
                    </div>

                    <div class="mb-3">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name"  class="form-control" id="last_name" placeholder="Lastname enter" value="{{$user->last_name}}" />
                    </div>

                    <div class="mb-3">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" name="middle_name"  class="form-control" id="middle_name" placeholder="Middlename enter" value="{{$user->middle_name}}" />
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email"  class="form-control" id="email" placeholder="Email enter" value="{{$user->email}}" />
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone"  class="form-control" id="phone"  placeholder="Phone enter" value="{{$user->phone}}" />
                    </div>

                    <select name="country_id" id="country" class="form-control" required>
                        <option selected>{{ __('Choose your country')}} *</option>
                        @foreach (\App\Models\Country::scopeCountryList() as $data)
                        <option value="{{ $data->id }}" @if($data->id == $user->country_id) selected @endif >{{ $data->name }}</option>
                        @endforeach
                    </select> <br><br>

                    <select name="profession_id" id="profesion" class="form-control">
                        <option selected>{{__('Choose your profession')}} *</option>
                        @foreach (\App\Models\Profession::scopeProfessionList() as $data)
                        <option  value="{{ $data->id }}" @if($data->id == $user->profession_id) selected @endif >{{ $data->name }}</option>
                        @endforeach
                    </select> <br>

                    <div class="mb-3">
                        <label for="organization">{{__('Organization')}}</label>
                        <input id="organization" type="text" name="organization" class="form-control" placeholder="{{__('Organization')}}" autocomplete="off" value="{{$user->organization}}">
                    </div>

                    <div class="mb-3">
                        <label for="erkak">Erkak</label>
                        <input type="radio" name="gender"   id="erkak"  @if ($user->gander == 1) checked @endif  value="1" />


                        <label for="ayol">Ayol</label>
                        <input type="radio" name="gender"   id="ayol"  @if($user->gander == 0) checked @endif  value="0" />
                    </div>

                    <div class="mb-3">
                        <label for="created_at">Created At</label>
                        <input type="text" name="created_at"  class="form-control" id="created_at"  placeholder="Created at enter" value="{{$user->created_at}}" />
                    </div>
        
                    <button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>

        </div>
     </div>
  </div>

@endsection




