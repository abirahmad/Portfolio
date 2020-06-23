@extends('backend.layouts.master')
@section('title')
Profile
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Profile</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">User Profile</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="card card-primary card-outline">
						<div class="card-body box-profile">
							<div class="text-center">
								<img class="profile-user-img img-fluid img-circle"
								src="{{ url('public/backend/images/profile/'.$user->user_avatar) }}"
								alt="User profile picture">
							</div>

							<h3 class="profile-username text-center">{{$user->fullname}}</h3>

							<p class="text-muted text-center">{{$user->profession}}</p>

							<ul class="list-group list-group-unbordered mb-3">
								<li class="list-group-item">
									<b>Views</b> <a class="float-right">1,322</a>
								</li>
								<li class="list-group-item">
									<b>Projects</b> <a class="float-right">543</a>
								</li>
							</ul>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

					<!-- About Me Box -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">About Me</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<strong><i class="fas fa-book mr-1"></i> Education</strong>

							<p class="text-muted">
								{{$user->degree}} from the {{$user->institution}}
							</p>

							<hr>

							<strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

							<p class="text-muted">{{$user->address}}</p>

							<hr>

							<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

							<p class="text-muted">
								<span class="tag tag-danger">UI Design</span>
								<span class="tag tag-success">Coding</span>
								<span class="tag tag-info">Javascript</span>
								<span class="tag tag-warning">PHP</span>
								<span class="tag tag-primary">Node.js</span>
							</p>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>


				<!-- /.col -->
				<div class="col-md-9">
					<div class="card card-danger">
						<div class="card-header">
							<h3 class="card-title">Profile Info Update</h3>
						</div>
						<!-- @if (Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                            @endif -->
						@include('backend.layouts.partials.messages')
						<!-- /.card-header -->
						<!-- form start -->
						<form action="{{route('admin.users.update',$user->id)}}" method="POST" enctype="multipart/form-data" role="form" id="quickForm">
							@csrf

							<div class="card-body row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="fullname">Full Name</label>
									<input type="text" name="fullname" value="{{$user->fullname}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name" required="">
								</div>

								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" name="username" class="form-control" value="{{$user->username}}" placeholder="Enter Username" required="">
								</div>
								<div class="form-group">
									<label for="age">Age</label>
									<input type="text" name="age" class="form-control" value="{{$user->age}}" placeholder="Enter Age">
								</div>
								<div class="form-group">
									<label>Birthday</label>
				                    <div class="input-group date">
				                        <input type="date" name="birthday" value="{{$user->birthday}}" class="form-control datetimepicker-input"/>
				                    </div>
								</div>
								<div class="form-group">
									<label for="interests">Interests</label>
									<input type="text" name="interests" class="form-control" value="{{$user->interests}}" placeholder="Enter Interests">
								</div>
								<div class="form-group">
									<label for="city">City</label>
									<input type="text" name="city" class="form-control" value="{{$user->city}}" placeholder="Enter City">
								</div>
								<div class="form-group">
									<label for="profession">Profession</label>
									<input type="text" name="profession" class="form-control" value="{{$user->profession}}" placeholder="Enter Profession">
								</div>
								<div class="form-group">
									<label for="degree">Degree</label>
									<input type="text" name="degree" class="form-control" value="{{$user->degree}}" placeholder="Enter Degree">
								</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Enter email">
								</div>

								<div class="form-group">
									<label for="institution">Intitution</label>
									<input type="text" name="institution" class="form-control" value="{{$user->institution}}" placeholder="Enter Institution">
								</div>
								<div class="form-group">
									<label for="address">Address</label>
									<input type="text" name="address" class="form-control" value="{{$user->address}}" placeholder="Enter Address">
								</div>
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" name="website" class="form-control" value="{{$user->website}}" placeholder="Enter Website">
								</div>
								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" name="phone" class="form-control" value="{{$user->phone}}" placeholder="Enter Phone">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" id="txtPassword" name="password" class="form-control" placeholder="Password" minlength="6">
								</div>

								<div class="form-group">
									<label for="confirm_passwor">Confirm Password</label>
									<input type="password" id="txtConfirmPassword" class="form-control" name="confirm_passwor" placeholder="Confirm Password" onchange="checkpasswd()">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Profile Picture</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" name="user_avatar" class="custom-file-input">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="theme">Portfolio Theme</label>
									<select class="form-control" name="theme_id">
										<option value="{{$user->theme_id}}">{{$user->theme_id == 1 ? 'Light' :'Dark'}}</option>
										<option value="1">Light</option>
										<option value="2">Dark</option>
										
									</select>
								</div>
							</div>
							<div class="form-group">
									<label for="theme">Description</label>
									<textarea class="textarea" name="description" placeholder="Place some text here"
                          			>{{$user->description}}</textarea>
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
<script type="text/javascript">
  function checkpasswd(){
    var p1 = document.getElementById("txtPassword");
    var p2 = document.getElementById("txtConfirmPassword");
    if( p1.value != p2.value){
        p2.setCustomValidity("passwords don't match");
    }else{
        p2.setCustomValidity("");
    }
}
</script>