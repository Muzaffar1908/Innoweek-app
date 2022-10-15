@extends('admin.layout.app')

@section('content')

  <div class="content-body">
     <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Yangi foydalanuvchi qo'shish</h4>
                <a href="{{route('emp.user.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Orqaga qaytish</a>
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
                <form action="{{route('emp.user.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        {{-- <label for="id"></label> --}}
                        <input type="hidden" name="id"  class="form-control" id="id" placeholder="Misol: Farhod" value="{{old('id')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="first_name">Ismi *</label>
                        <input type="text" name="first_name"  class="form-control" id="first_name" placeholder="Misol: Aziz" value="{{old('first_name')}}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="last_name">Familyasi *</label>
                        <input type="text" name="last_name"  class="form-control" id="last_name" placeholder="Misol: Azimov" value="{{old('last_name')}}" required />
                    </div>

                    <div class="mb-3">
                        <label for="middle_name">Otasining ismi</label>
                        <input type="text" name="middle_name"  class="form-control" id="middle_name" placeholder="Misol: Tohirovich" value="{{old('middle_name')}}" />
                    </div>

                    <div class="mb-3">
                        <label for="email">Email yoki telefon *</label>
                        <input type="text" name="phone_or_email"  class="form-control" id="email" placeholder="Misol: example@mail.com yoki 998901234567" value="{{old('email')}}" required/>
                    </div>

                    <select name="country_id" id="country" class="form-control" required>
                        <option selected value="">{{ __('Choose your country')}} *</option>
                        @foreach (\App\Models\Country::scopeCountryList() as $data)
                        <option value="251"  selected>{{ $data->name }}</option>
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select> <br>

                    <select name="profession_id" id="profesion" class="form-control" required>
                        <option selected value="">{{__('Choose your profession')}} *</option>
                        @foreach (\App\Models\Profession::scopeProfessionList() as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select> <br>

                    <div class="mb-3">
                        <label for="organization">{{__('Organization')}}</label>
                        <input id="organization" type="text" name="organization" class="form-control" placeholder="{{__('Organization')}}" autocomplete="off" value="{{old('organization')}}">
                    </div>

                    <div class="mb-3">
                        <label for="erkak">Erkak</label>
                        <input type="radio" name="gender"   id="erkak"  value="1" checked />

                        <label for="ayol">Ayol</label>
                        <input type="radio" name="gender"   id="ayol"  value="1" />
                    </div>
                    <button type="submit" class="btn btn-success">Ma'lumotlarni saqlash</button>
                </form>
                </div>
            </div>
        </div>
     </div>
  </div>

@endsection
