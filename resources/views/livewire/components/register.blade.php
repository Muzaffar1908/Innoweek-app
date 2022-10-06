<div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="right">
  <div class="offcanvas-header">
    <span class="header-text">{{__('Close')}}</span>
    <button type="button" class="offcanvas-menu-btn menu-status-close offcanvas-close">
      <span class="menu-btn-icon">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </button>
  </div>
  <div class="offcanvas-content">

    <div class="tab-content">
      <h5 class="top-content">{{__('Fill in the fields below to register in the system')}}</h5>
      <span class="d-flex justify-content-center text-white">{{__('I am')}}</span>
      <div class="tab">
        <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'res')">{{ __('Resident')}}</button>
        <button class="tablinks" onclick="openCity(event, 'nores')">{{ __('No Resident')}}</button>
      </div>
      <span class="d-flex justify-content-center text-white">{{__('participant')}}</span>

      <div id="res" class="tabcontent">
        <form class="box " action="{{route('d-register')}}" method="POST">
          @csrf
          <div class="input-names">
            <input name="first_name" class="name" type="text" placeholder="{{__('Firstname')}} *" autocomplete="off"
              required>
            <input name="last_name" class="surname" type="text" placeholder="{{__('Lastname')}} *" autocomplete="off"
              required>
          </div>
          <input id="emailOrNumber" type="text" name="phone_or_email" placeholder="{{__('Phone')}} *"
            autocomplete="off" required>
          <input name="birth_date" class="form-control" type="datetime-local" autocomplete="off" required
            placeholder="{{__('Date of birth')}} *" />

            <select name="profession_id" id="profesion">
              <option selected>{{('Choose your profession')}} *</option>
              @foreach (\App\Models\Profession::scopeProfessionList() as $data)
              <option value="{{ $data->id }}">{{ $data->name }}</option>
              @endforeach
            </select>
            
          <div class="input-radio">
            <label for="gender">{{__('JINSI')}}:</label>
            <div class="d-flex-radio">
              <input type="radio" name="gender" value="1" id="gender" checked><label>{{__('ERKAK')}}</label>
              <input type="radio" name="gender" value="2" id="gender"><label>{{__('AYOL')}}</label>
            </div>
          </div>
          <button type="submit" class="btnB btn-input">{{__('Sign up')}}</button>
          <p class="text-center mt-3 text-white"> Are you registered?
            <a href="" class="mx-2">Please check your ticket </a>  
          </p>
        </form>
      </div>

      <div id="nores" class="tabcontent">
        <form class="box " action="{{route('d-register')}}" method="POST">
          @csrf
          <div class="input-names">
            <input name="first_name" class="name" type="text" placeholder="{{__('Firstname')}} *" autocomplete="on"
              required autofocus>
            <input name="last_name" class="surname" type="text" placeholder="{{__('Lastname')}} *" autocomplete="on"
              required>
          </div>
          <input id="emailOrNumber" type="email" name="phone_or_email" placeholder="{{__('Email')}} *" autocomplete="on"
            required>

          <select name="country_id" id="country" required>
            <option selected>{{ __('Choose your country')}} *</option>
            @foreach (\App\Models\Country::scopeCountryList() as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
          </select>

          <select name="profession_id" id="profesion">
            <option selected>{{__('Choose your profession')}} *</option>
            @foreach (\App\Models\Profession::scopeProfessionList() as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
          </select>

          <input id="organization" type="text" name="organization" placeholder="{{__('Organization')}}" autocomplete="off">
          <input class="form-control" type="datetime-local" name="birth_date" autocomplete="off" required
            placeholder="{{__('Date of birth')}} *" />
          <div class="input-radio">
            <label for="gender">{{__('JINSI')}}:</label>
            <div class="d-flex-radio">
              <input type="radio" name="gender" id="gender" value="1" checked><label>{{__('ERKAK')}}</label>
              <input type="radio" name="gender" id="gender" value="2"><label>{{__('AYOL')}}</label>
            </div>
          </div>
          <button type="submit" class="btnB btn-input">{{__('Sign up')}}</button>
        </form>
      </div>
    </div>

  </div>
</div>
<div id="template-search" class="template-search">
  <button type="button" class="close">×</button>
  <form class="search-form">
    <input type="search" value="" placeholder="Search" />
    <button type="submit" class="search-btn btn-ghost style-1">
      <i class="fas fa-search"></i>
    </button>
  </form>
</div>