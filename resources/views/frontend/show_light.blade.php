@extends('frontend.layouts_light.master')

@section('title')
Portfolio
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper content-style">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6 header-style">
					<h1>Project Details</h1>
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
					<div class="row">
						<div class="col-md-6">
							<img class="details-image" src="{{url('public/backend/images/portfolio/'.$portfolio_details->image_1)}}">
							<img class="details-image" src="{{url('public/backend/images/portfolio/'.$portfolio_details->image_2)}}">
							<img class="details-image" src="{{url('public/backend/images/portfolio/'.$portfolio_details->image_3)}}">
							<img class="details-image" src="{{url('public/backend/images/portfolio/'.$portfolio_details->image_4)}}">
						</div>

						<div class="col-md-6">
							<h3>Features:</h3>
							<div class="feture-style">
								<p>{!! $portfolio_details->features !!}</p>
							</div>
							<h3>Overview:</h3>
							<div class="feture-style">
								<p>{!! $portfolio_details->overview !!}</p>
							</div>
							<h3>Technology Used:</h3>
							<div class="feture-style">
								<p>{!! $portfolio_details->technology_used !!}</p>
							</div>
							<h3>Site Link:</h3>
							<div class="feture-style">
								<a class="btn btn-primary" href="{{$portfolio_details->site_link}}" target="_blank">Live Site</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>


@endsection