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
					<h1>Project</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Projects Add</li>
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
						<form action="{{route('admin.portfolios.store')}}" method="POST" enctype="multipart/form-data" role="form" id="quickForm">
							@csrf

							<div class="card-body row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="project_title">Project Title</label>
									<input type="text" name="project_title" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter Project Title" required="">
								</div>

								<div class="form-group">
									<label for="theme">Menu</label>
									<select class="form-control select2" name="menu_id">
										<option>Please select</option>
									@foreach($menus as $menu)	
										<option value="{{$menu->id}}">{{$menu->name}}</option>
									@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="thumbnail">Thumbnail</label>
									<input type="file" name="thumbnail" class="form-control" placeholder="Enter thumbnail" required="">
								</div>
								<div class="form-group">
									<label for="site_link">Site Link</label>
									<input type="text" name="site_link" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter Site Link" required="">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="image_1">Image 1</label>
									<input type="file" name="image_1" class="form-control">
								</div>
								<div class="form-group">
									<label for="image_2">Image 2</label>
									<input type="file" name="image_2" class="form-control">
								</div>
								<div class="form-group">
									<label for="image_3">Image 3</label>
									<input type="file" name="image_3" class="form-control" >
								</div>
								<div class="form-group">
									<label for="image_4">Image 4</label>
									<input type="file" name="image_4" class="form-control" placeholder="Enter Age">
								</div>
							</div>
							
						</div>
						<div class="form-group col-md-12">
									<label for="theme">Features</label>
									<textarea class="textarea" name="features" placeholder="Enter Features"
                          			></textarea>
							</div>

							<div class="form-group col-md-12">
									<label for="theme">Overview</label>
									<textarea class="textarea" name="overview" placeholder="Enter Features"
                          			></textarea>
							</div>

							<div class="form-group col-md-12">
									<label for="theme">Technology Used</label>
									<textarea class="textarea" name="technology_used" placeholder="Enter Technology"
                          			></textarea>
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