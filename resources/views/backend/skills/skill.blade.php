 @extends('backend.layouts.master')

 @section('title')
 Skill
 @endsection
 @section('content')
<div class="content-wrapper">
	 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Skills</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Skills</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <section class="content">

<div class="row">
  <div class="card col-md-5 card-space">
              <div class="card-header">
                <h3 class="card-title">Skill List</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="portfolio_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Skill Title</th>
                    <th>Skill Type</th>
                    <th>Skill Percentage</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($skills as $skill)
                  	<tr>
                  		<td>{{$skill->title}}</td>
                  		<td>{{$skill->skill_type}}</td>
                  		<td>{{$skill->percentage}}</td>
                         <td><form id="delete-form" action="{{ route('admin.skills.delete',$skill->id) }}" method="POST">
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
				<div class="col-md-5 card-space">
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Skill Add</h3>
						</div>
					
						<!-- /.card-header -->
						<!-- form start -->
						<form action="{{route('admin.skills.store')}}" method="POST" enctype="multipart/form-data" role="form" id="submit-form">
							@csrf
                		@include('backend.layouts.partials.messages')
						<div class="card-body row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="theme">Skill Type</label>
									<select class="form-control select2" name="skill_type">
										<option>Please select</option>	
										<option value="professional">Peofessional Skills</option>
										<option value="work">Working Skills</option>
									</select>
								</div>
								<div class="form-group">
									<label for="title">Skill Title</label>
									<input type="text" name="title" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter Skill Title" required="">
								</div>
								<div class="form-group">
									<label for="percentage">Skill Percentage</label>
									<input type="text" name="percentage" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter Percentage" required="">
								</div>
							</div>
						</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<a class="btn btn-primary" href="{{ route('admin.skills.store') }}"
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

