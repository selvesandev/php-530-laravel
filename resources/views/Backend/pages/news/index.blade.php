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
								<th>Title</th>
								<th>Image</th>
								<th>Categories</th>
								<th>Summary</th>
								<th>Priority</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>


							@forelse($news as $value)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$value->title}} <br>
										<small>{{$value->slug}}</small>
										|
										<small>{{!empty($value->created_at) ? $value->created_at->diffForHumans() : '-'}}</small>
										<br>
										<small>{{$value->admin->name}}</small>
									</td>
									<td><img src="{{URL::to('img/news/'.$value->image)}}" height="50" alt=""></td>
									<td>
										@foreach($value->categories as $category)
											<span class="label label-default">{{$category->name}}</span> &nbsp;
										@endforeach

									</td>
									<td>
										{{str_limit($value->summary,15)}}
									</td>
									<td>
										<form method="post" action="{{route('update-priority')}}">
											<input type="hidden" name="id" value="{{$value->id}}">
											@csrf
											@if($value->priority==1)
												<button type="button" class="btn btn-success"><i
															class="fa fa-check"></i>

												</button>
											@else
												<button class="btn btn-default"><i class="fa fa-times"></i></button>
											@endif
										</form>
									</td>
									<td></td>
								</tr>
							@empty
								<tr>
									<td colspan="6">
										<div class="alert alert-danger">
											No news available.
										</div>
									</td>
								</tr>
							@endforelse

							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /page content -->

@endsection

