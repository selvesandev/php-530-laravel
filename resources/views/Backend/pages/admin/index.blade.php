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
							@forelse($admins as $admin)
								<tr>
									<th scope="row">{{$loop->iteration}}</th>
									<td width="15%">{{$admin->name}}</td>
									<td>{{$admin->email}}</td>
									<td>
										<img src="{{URL::to('/img/admin/'.$admin->image)}}" height="40" alt="">
									</td>

									<td>
										<form method="post" action="{{route('update-status')}}">
											{{csrf_field()}}
											<input type="hidden" name="id" value="{{$admin->id}}">
											@if(!$admin->status)
												<button name="btnstatus" value="enable" type="submit"
														class="btn btn-success btn-sm"><i
															class="fa fa-check"></i>
												</button>
											@else
												<button name="btnstatus" value="disable" type="submit"
														class="btn btn-danger btn-sm"><i
															class="fa fa-check"></i>
												</button>
											@endif
										</form>
									</td>
									<td>
										@if($admin->privilege=='a')
											<i class="fa fa-user"></i>
										@else
											<i class="fa fa-user-secret"></i>
										@endif

									</td>
									<td>
										<a onclick="return confirm('Are you sure?')"
										   href="{{route('delete-admin',['id'=>$admin->id])}}"
										   class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							@empty
								<tr>
									<td colspan="7">
										<div class="alert alert-danger">
											No admins available.
										</div>
									</td>
								</tr>
							@endforelse

							</tbody>
						</table>

						{{$admins->links()}}

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /page content -->

@endsection

