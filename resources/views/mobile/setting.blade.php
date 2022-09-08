@extends('layouts.mobile')
@section('styles')
@endsection

@section('content')

   <!-- Start Section-title Area -->
	<div class="section-title mb-0 bg-color ptb-30">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<h2 class="mb-0">
					<a href="{{route('m-home')}}">
						<i class="ri-arrow-left-s-line"></i>
						{{__('SETTINGS')}}
					</a>
				</h2>

			</div>
		</div>
	</div>
	<!-- End Section-title Area -->

	<div class="bg-color-ffff">
		<div class="px-4">
			<div class="section-title left-title pt-30">
				<h2>{{__('SelectTheLanguage')}}</h2>
			</div>


            <div class="single-content">

                <div class="side-button">
                    <a href="{{ URL::to('locale/en') }}" class="bizwheel-btn theme-2 effect btn-block"><img src="{{ asset('upload/lang/en.png') }}" alt=""> English</a>
                </div>
                <div class="side-button">
                    <a href="{{ URL::to('locale/uz') }}" class="bizwheel-btn theme-2 effect btn-block"><img src="{{ asset('upload/lang/uz.png') }}" alt=""> Uzbek</a>
                </div>
                <div class="side-button">
                    <a href="{{ URL::to('locale/ru') }}" class="bizwheel-btn theme-2 effect btn-block"><img src="{{ asset('upload/lang/ru.png') }}" alt=""> Russian</a>
                </div>
            </div>
			<div class="radio-wrap pb-30">
				<label class="single-radio">Uzbek tili
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				</label>
				<label class="single-radio">Rus tili
					<input type="radio" name="radio">
					<span class="checkmark"></span>
				</label>
				<label class="single-radio">Ingliz tili
					<input type="radio" name="radio">
					<span class="checkmark"></span>
				</label>

			</div>
		</div>
		<!-- Start Dark Mode Area -->
		<div class="dark-mode-area pb-30">
			<div class="container">
				<div class="bg-color-ffffff">
					<div class="row align-items-center">
						<div class="col">
							<div class="dark-btn d-flex align-items-center">
								<label class="switch">
									<input type="checkbox" id="darkSwitch">
									<span class="slider round"></span>
								</label>
								<div class="dark-content">
									<h3 style="font-size: 15px; margin: 0 0 0 10px ;">{{__('DarkMode')}}</h3>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>


		<div class="button-area ptb-30">
			<div class="container">
				<ul class="btn-list">
					<li>
						<button type="button" class="btn btn-primary rounded-0">{{__('SAVE')}}</button>
					</li>
				</ul>
			</div>
		</div>

	</div>

@endsection
