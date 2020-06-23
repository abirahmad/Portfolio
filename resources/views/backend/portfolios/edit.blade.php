@extends('backend.layouts.master')
@section('title')
Projects
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Projects</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Projects Edit</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- /.col -->
				<div class="col-md-12">
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Projects Add</h3>
						</div>
						@include('backend.layouts.partials.messages')
						<!-- /.card-header -->
						<!-- form start -->
						<form action="{{route('admin.portfolios.update',$portfolio->id)}}" method="POST" enctype="multipart/form-data" role="form" id="quickForm">
							@method('put')
							@csrf

							<div class="card-body row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="project_title">Project Title</label>
									<input type="text" name="project_title" value="{{$portfolio->project_title}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Project Title" required="">
								</div>

								<div class="form-group">
									<label for="theme">Menu</label>
									<select class="form-control select2" name="menu_id">
									@foreach($menus as $menu)	
										<option value="{{$menu->id}}"{{$menu->id == $portfolio->menu_id ? 'selected':''}}>{{$menu->name}}</option>
									@endforeach
									</select>
								</div>

								<div class="form-group">
									<label for="thumbnail">Thumbnail Display</label>
									<img class="display-img" src="{{url('public/backend/images/portfolio/'.$portfolio->thumbnail)}}">
								</div>
								<div class="form-group">
									<label for="thumbnail">Thumbnail</label>
									<input type="file" name="thumbnail" class="form-control" placeholder="Enter thumbnail">
								</div>
								<div class="form-group">
									<label for="site_link">Site Link</label>
									<input type="text" name="site_link" value="{{$portfolio->site_link}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Site Link" required="">
								</div>
							</div>

							<div class="col-md-6">

								<div class="form-group">
									<label for="image_1">Image 1 Display</label>
									<img class="display-img" src="{{url('public/backend/images/portfolio/'.$portfolio->image_1)}}">
								</div>
								<div class="form-group">
									<label for="image_1">Image 1</label>
									<input type="file" name="image_1" class="form-control">
								</div>

								<div class="form-group">
									<label for="image_2">Image 2 Display</label>
									<img class="display-img" src="{{url('public/backend/images/portfolio/'.$portfolio->image_2)}}">
								</div>
								<div class="form-group">
									<label for="image_2">Image 2</label>
									<input type="file" name="image_2" class="form-control">
								</div>

								<div class="form-group">
									<label for="image_3">Image 3 Display</label>
									<img class="display-img" src="{{url('public/backend/images/portfolio/'.$portfolio->image_3)}}">
								</div>
								<div class="form-group">
									<label for="image_3">Image 3</label>
									<input type="file" name="image_3" class="form-control" >
								</div>

								<div class="form-group">
									<label for="image_4">Image 4 Display</label>
									<img class="display-img" src="{{url('public/backend/images/portfolio/'.$portfolio->image_4)}}">
								</div>
								<div class="form-group">
									<label for="image_4">Image 4</label>
									<input type="file" name="image_4" class="form-control" placeholder="Enter Age">
								</div>
							</div>
							<div class="form-group">
									<label for="theme">Features</label>
									<textarea class="textarea" name="features" placeholder="Enter Features"
                          			>{{$portfolio->features}}</textarea>
							</div>

							<div class="form-group">
									<label for="theme">Overview</label>
									<textarea class="textarea" name="overview" placeholder="Enter Features"
                          			>{{$portfolio->overview}}</textarea>
							</div>

							<div class="form-group">
									<label for="theme">Technology Used</label>
									<textarea class="textarea" name="technology_used" placeholder="Enter Technology"
                          			>{{$portfolio->technology_used}}</textarea>
							</div>
						</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
@endsection