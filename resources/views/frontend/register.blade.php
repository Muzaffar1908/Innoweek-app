@extends('layouts.main2')
@section('sticky')
sticky
@endsection
@section('content')

    <div class="regpanel" data-bg-image="{{asset('frontend/image/back.png')}}" style="background-image:{{'frontend/image/back.png'}};" >
        <div class="boxes m-0">
            <h3>{{__('Register to use the system')}}</h3>
            <ul class="header-action-items">
                <li class="header-action-item d-none d-xl-block wow fadeInUp animated"
                    data-wow-delay="1s">
                    <button type="button" style="margin-left:100px;"
                        class="item-btn btn-fill style-one offcanvas-menu-btn style-one menu-status-open" target="_blank" id="registeerr">
                        {{__('REGISTRATION')}}
                    </button>
                </li>
            </ul>
        </div>
    </div>

@endsection
@section('scripts')
<script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection