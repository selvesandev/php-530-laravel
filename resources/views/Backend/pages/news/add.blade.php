@extends('Backend.master')

@section('title')
	Add news
@endsection

@section('content')

	<div class="right_col" role="main">

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Add News</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">

						@include('Backend.message.sucfail')

						<form enctype="multipart/form-data" action="{{route('news-add')}}" method="post">
							{{csrf_field()}}

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" id="news-title" placeholder="News title" name="title"
											   class="form-control">
										@include('Backend.message.error',['field'=>'title'])
									</div>
								</div>
								<div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="">Select Category</label>
											<select multiple id="categorySelector" name="category[]"
													class="form-control">
												@foreach($categories as $category)
													<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>

											@include('Backend.message.error',['field'=>'category'])
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<label for="">Upload Image</label>
											<input type="file" name="cover_image" class="form-control">
										</div>

										@include('Backend.message.error',['field'=>'cover_image'])
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="">News Date</label>
										<input type="text" name="news_date" class="form-control">
									</div>

									@include('Backend.message.error',['field'=>'news_date'])
								</div>
								<div class="clearfix"></div>
								<hr>

								<div class="col-md-12">
									<div class="form-group">
										<label for="">Keywords</label>
										<input type="text" name="keywords" id="news_keywords" class="tags form-control">

										@include('Backend.message.error',['field'=>'keywords'])
									</div>
								</div>

								<div class="clearfix"></div>
								<br>
								<br>
								<br>

								<div class="col-md-12">
									<textarea name="summary" class="form-control" rows="4"></textarea>

									@include('Backend.message.error',['field'=>'summary'])
								</div>


								<div class="clearfix"></div>
								<br>

								<br>
								<br>


								<div class="form-group">

									<div class="col-md-12">
										<textarea name="details" id="details" rows="20"></textarea>

										@include('Backend.message.error',['field'=>'details'])
									</div>
								</div>

								<div class="clearfix">

								</div>
								<br>

								<div class="form-group">

									<div class="col-md-12">
										<button type="submit" class="btn btn-success btn-lg btn-block">Create News
										</button>
									</div>
								</div>
								<br>
								<br>

							</div>
						</form>

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /page content -->

@endsection


@section('headjs')

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>tinymce.init({selector: '#details'});</script>
@endsection