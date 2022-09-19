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
        <form class="box " action="{{route('code')}}">
            <h5 class="top-content">{{__('Fill in the fields below to register in the system')}}</h5>
            <div class="input-names">
                <input class="name" name="first_name" type="text" placeholder="{{__('Firstname')}}" autocomplete="off"
                    required>
                <input class="surname" name="last_name" type="text" placeholder="{{__('Lastname')}}" autocomplete="off"
                    required>
            </div>
            <input id="emailOrNumber" type="text" name="phone_or_email" placeholder="{{__('Email or Phone')}}"
                autocomplete="off" required>

            <input id="datepicker" type="text" name="birth_date" autocomplete="off" required
                placeholder="{{__('day/month/year')}}" />


            <div class="input-radio">
                <label for="gender">{{__('JINSI')}}:</label>
                <div class="d-flex-radio">
                    <input type="radio" name="gender" id="gender"><label>{{__('AYOL')}}</label>
                    <input type="radio" name="gender" id="gender"><label>{{__('ERKAK')}}</label>
                </div>
            </div>
            <button type="submit" class="btnB btn-input">{{__('Sign up')}}</button>
        </form>
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