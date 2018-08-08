@extends('Backend.master')

@section('title')
	Admin
@endsection

@section('content')

	<div class="right_col" role="main">

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Admins</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						@include('Backend.message.sucfail')


					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /page content -->

@endsection

