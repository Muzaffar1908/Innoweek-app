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
						Mening profilm
					</a>
				</h2>
			</div>
		</div>
	</div>
	<!-- End Section-title Area -->
	
	<div class="bg-color-f5f8ff">
		<!-- Start Form Validation Page Area -->
		<div class="form-validation-area ptb-30">
			<div class="container">
				<div class="contact-form custom">
					<div class="profil d-flex align-items-center mb-3">
						<img width="80px" style="border-radius: 50%; margin-right: 1rem; object-fit: cover;" src="./assets/images/image/speak1.jpg" alt="">
						<h5>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <br> <span style="color: grey; font-size: 13px; font-weight: 400;">Mehmon</span></h5><br>
					</div>
					<form  action="/mobile-v/profile/update/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
						@csrf
                        
                        <div class="form-group">
							<!-- <label>Ismi</label> -->
							<input type="text" name="first_name" id="name" class="form-control" required data-error="Please enter your Ismi" placeholder="Ismi*" autocomplete="off" value="{{ Auth::user()->first_name }}">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<!-- <label>Familiyasi</label> -->
							<input type="text" name="email" id="email" class="form-control" required data-error="Please enter your Familiyasi" placeholder="Familiyasi*" autocomplete="off" value="{{ Auth::user()->last_name }}">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<!-- <label>Otasining ismi</label> -->
							<input type="text" name="email" id="email" class="form-control" required data-error="Please enter your Otasining ismi" placeholder="Otasining ismi" autocomplete="off" value="{{ Auth::user()->middle_name }}">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<!-- <label>Email</label> -->
							<input type="text" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*" autocomplete="off" value="{{ Auth::user()->email }}">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<!-- <label>Telefon raqam</label> -->
							<input type="number" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Telefon raqam*" autocomplete="off" value="{{ Auth::user()->phone }}">
							<div class="help-block with-errors"></div>
						</div>
						<h6 style="font-size: 14px;    font-weight: 500;">Jinsi: </h6>
						<div class="d-flex">
							<div class="form-check">
								<input class="form-check-input" type="radio" data-error="Please enter your radio" name="gender" id="erkak" value="{{ Auth::user()->gender }}">
								<label class="form-check-label" for="erkak">
									Erkak
								</label>
							</div>
							<div class="form-check mb-3 px-5">
								<input class="form-check-input" type="radio" data-error="Please enter your radio" name="gender" id="ayol" value="{{ Auth::user()->gender }}">
								<label class="form-check-label" for="ayol">
									Ayol
								</label>
							</div>
						</div>
						<div class="must-filt">
							<p>* to'ldirish kerak bo'lgan filtlar</p>
						</div>
						
						<div class="form-group">
							
							
							<div class="file-upload-wrap style-two">
								<label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label" style="display: flex;
								align-items: center;
								justify-content: center;">Change</label>
								<input type="file" name="user_image" id="et_pb_contact_brand_file_request_0" required data-error="Please enter your file" class="file-upload" value="{{ Auth::user()->user_image }}">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						
						<div>
							<button type="submit" class="default-btn">
								Submit
							</button>
						</div>
					</form>
				</div>

@endsection