 @extends('backend.layouts.master')

 @section('title')
 Service
 @endsection
 @section('content')
 <div class="content-wrapper">
 	<section class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1>Service</h1>
 				</div>
 				<div class="col-sm-6">
 					<ol class="breadcrumb float-sm-right">
 						<li class="breadcrumb-item"><a href="#">Home</a></li>
 						<li class="breadcrumb-item active">Service List</li>
 					</ol>
 				</div>
 			</div>
 		</div><!-- /.container-fluid -->
 	</section>
 	<section class="content">

 		<div class="row">
 			<div class="card col-md-5 card-space">
 				<div class="card-header">
 					<h3 class="card-title">Service List</h3>
 				</div>

 				<!-- /.card-header -->
 				<div class="card-body">
 					<table id="portfolio_table" class="table table-bordered table-striped">
 						<thead>
 							<tr>
 								<th>Service Title</th>
 								<th>Action</th>
 							</tr>
 						</thead>
 						<tbody>
 							@foreach($services as $service)
 							<tr>
 								<td>{{$service->title}}</td>
 								<td><form id="delete-form" action="{{ route('admin.services.delete',$service->id) }}" method="POST">
 									<button type="submit" class="btn btn-danger btn-xs"> <i class="fa fa-trash"> delete</i></button>
 									@csrf
 								</form></td>

 							</tr>
 							@endforeach
 						</tbody>
 					</table>
 				</div>
 				<!-- /.card-body -->
 			</div>
 			<!-- /.card -->

 			<!-- /.col -->
 			<div class="col-md-6">
 				<div class="card card-info">
 					<div class="card-header">
 						<h3 class="card-title">Service Add</h3>
 					</div>

 					<!-- /.card-header -->
 					<!-- form start -->
 					<form action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data" role="form" id="submit-form">
 						@csrf
 						@include('backend.layouts.partials.messages')
 						<div class="card-body row">
 							<div class="col-md-12">
 								<div class="form-group">
 									<label for="title">Service Title</label>
 									<input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Service Title" required="">
 								</div>

 								<div class="form-group">
 									<label for="theme">Short Description</label>
 									<textarea class="textarea" name="short_description" value="{{old('short_description')}}" placeholder="Enter Description"
 									></textarea>
 								</div>
 							</div>
 						</div>
 						<!-- /.card-body -->

 						<div class="card-footer">
 							<a class="btn btn-primary" href="{{ route('admin.services.store') }}"
 							onclick="event.preventDefault();
 							document.getElementById('submit-form').submit();">Submit</a>
 						</div>
 					</form>
 				</div>
 				<!-- /.card -->
 				<!-- /.nav-tabs-custom -->
 			</div>
 			<!-- /.col -->
 			<!-- /.card -->
 		</div>
 	</div>
 </section>
 @endsection

