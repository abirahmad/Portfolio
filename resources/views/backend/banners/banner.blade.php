 @extends('backend.layouts.master')

 @section('title')
 Banner
 @endsection
 @section('content')
<div class="content-wrapper">
	 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Banner Update</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <section class="content">

<div class="row">
           	<!-- /.col -->
				<div class="col-md-12">
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Banner Update</h3>
						</div>
					
						<!-- /.card-header -->
						<!-- form start -->
						<form action="{{route('admin.banners.update')}}" method="POST" enctype="multipart/form-data" role="form" id="submit-form">
							@csrf
                		@include('backend.layouts.partials.messages')
						<div class="card-body row">
							<div class="col-md-12">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" value="{{$banners->title}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" required="">
                </div>
								<div class="form-group">
									<label for="name">User Name <span style="color: blue">(Optional)</span> </label>
									<input type="text" name="name" value="{{$banners->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name" required="">
								</div>

                <div class="form-group">
                  <label for="image">Old Banner Image</label>
                  <img class="display-img " src="{{url('public/backend/images/banner/'.$banners->image)}}">
                </div>
                <div class="form-group">
                  <label for="image">Banner Image</label>
                  <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter Service Title" required="">
                </div>
                 <div class="form-group">
                  <label for="image">Old CV</label>
                  <a href="{{ url('/') }}/public/backend/images/cv/{{ $banners->cv_upload }}" target="_blank">Download CV</a>
                </div>
                 <div class="form-group">
                  <label for="cv_upload">CV Upload</label>
                  <input data-allowed-file-extensions="pdf doc docx pptx" data-max-file-size="5M" data-height="150"
                                type="file" class="form-control dropify" id="file" aria-describedby="emailHelp" name="cv_upload" required>
                </div>
								<div class="form-group">
                  <label for="theme">Description</label>
                  <textarea class="textarea" name="description" placeholder="Enter Description"
                                >{{$banners->description}}</textarea>
              </div>
							</div>
						</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<a class="btn btn-primary" href="{{ route('admin.banners.update') }}"
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

