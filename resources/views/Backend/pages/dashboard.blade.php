@extends('Backend.master')

@section('title','Dashboard')

@section('content')
	<div class="right_col" role="main">
		@include('Backend.partials.dashboard-info')

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Dashboard</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="message_wrapper">
							<h4 class="heading">Albert Einstein</h4>
							<blockquote class="message">
								Energy can neither be created, nor be destroyed.
							</blockquote>
							<br>
							<p class="url">
								<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
								<a href="#"><i class="fa fa-paperclip"></i> Theory of everything </a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /page content -->

@endsection

