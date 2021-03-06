@extends('front.layouts.agencia')
@section('content')
<div class="page">
	<div class="page-main page-faq contact-form-profile">
		
		
		
		<!-- CONTAINER -->
		<div class="container content-area relative">
			
			<!-- PAGE-HEADER -->
			<div class="page-header">
				<h4 class="page-title">Contact us</h4>
				<?php /*<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact us</li>
					</ol>
				*/?>
			</div>
			<!-- PAGE-HEADER END -->
			@if(Session::has('message'))
			<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<!-- ROW-1 OPEN -->
			<form  method="post"   action="{{url('/members/contact-us')}}" enctype="multipart/form-data">
			 @csrf
			<div class="row from from-div">
				<div class="col-md-6 form-div-main">
					<div class="form-column">
						<div class="form-group">
							<label for="email">Name</label>	
							<input required type="text" class="form-control" placeholder="Enter name" name="name">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input required type="email" class="form-control" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
							<label for="pwd">Telephone</label>
							<input required type="text" class="form-control" placeholder="Enter telephone" name="telephone">
						</div>
						
						</div>
				</div>
				
				<div class="col-md-6 form-div-main">
					<div class="form-group">
						<label for="comment">Mensaje</label>
						<textarea required class="form-control" rows="5" name="comments"></textarea>
					</div>
					
					<div class="form-group">
						<img src="{{URL::asset('public/front/images/captcha-image.png')}}" class="img-fluid" alt="">	
					</div>
					
					<div class="custom-control custom-checkbox mb-3">
						<input required type="checkbox" class="custom-control-input" id="customCheck" name="example1">
						<label class="custom-control-label" for="customCheck">Acepto la <a href="privacy.html" class="from-links">Pol??tica de Privacidad.</a></label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>	
				</div>
				
				
				
			</div>
			</form>
			
			<!-- ROW-1 CLOSED -->
		</div>
		<!-- CONTAINER CLOSED -->
	</div>
	
	
</div>

@endsection