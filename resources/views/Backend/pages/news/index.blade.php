@extends('Backend.master')

@section('title')
	News
@endsection

@section('content')

	<div class="right_col" role="main">

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>News</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						@include('Backend.message.sucfail')

						<table class="table table-striped">
							<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Image</th>
								<th>Status</th>
								<th width="4%">Privilege</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td colspan="7">
									<div class="alert alert-danger">
										No news available.
									</div>
								</td>
							</tr>

							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /page content -->

@endsection

