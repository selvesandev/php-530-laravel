@extends('Backend.master')

@section('title')
	Add admin
@endsection

@section('content')

	<div class="right_col" role="main">

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Add Admin</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">

						@include('Backend.message.sucfail')

						<form method="post" enctype="multipart/form-data"
							  class="form-horizontal form-label-left input_mask">
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-12">Name</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="name" class="form-control has-feedback-left"
										   id="inputSuccess2" placeholder="Name" value="{{old('name')}}">
									<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
									@if($errors->has('name'))
										<p class="error">{{$errors->first('name')}}</p>
									@endif
								</div>
							</div>

							{{csrf_field()}}

							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="email" class="form-control has-feedback-left"
										   id="inputSuccess2" placeholder="Email">
									<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
									@if($errors->has('email'))
										<p class="error">{{$errors->first('email')}}</p>
									@endif
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="password" name="password" class="form-control has-feedback-left"
										   id="inputSuccess2" placeholder="Password">
									<span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
									@if($errors->has('password'))
										<p class="error">{{$errors->first('password')}}</p>
									@endif
								</div>

							</div>


							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="password" name="password_confirmation"
										   class="form-control has-feedback-left" id="inputSuccess2"
										   placeholder="Confirm password">
									<span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Picture</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" name="profile" class="form-control has-feedback-left"
										   id="inputSuccess2" placeholder="First Name">
									<span class="fa fa-image form-control-feedback left" aria-hidden="true"></span>
									@if($errors->has('profile'))
										<p class="error">{{$errors->first('profile')}}</p>
									@endif
								</div>
							</div>

							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button class="btn btn-primary" type="reset">Reset</button>
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /page content -->

@endsection

