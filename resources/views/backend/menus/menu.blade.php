 @extends('backend.layouts.master')

 @section('title')
 Menu
 @endsection
 @section('content')
<div class="content-wrapper">
	 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menus</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <section class="content">

<div class="row">
  <div class="card col-md-5 card-space">
              <div class="card-header">
                <h3 class="card-title">Menu List</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="portfolio_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Menu Title</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($menus as $menu)
                  	<tr>
                  		<td>{{$menu->name}}</td>
                         <td><form id="delete-form" action="{{ route('admin.menus.delete',$menu->id) }}" method="POST">
                          <button type="submit" class="btn btn-danger btn-xs"> <i class="fa fa-trash"> delete</i></button>
                                        @csrf
                                    </form></td>
                            
                  	</tr>
              		@endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Menu Title</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           	<!-- /.col -->
				<div class="col-md-5">
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Menu Add</h3>
						</div>
					
						<!-- /.card-header -->
						<!-- form start -->
						<form id="submit-form" action="{{route('admin.menus.store')}}" method="POST" enctype="multipart/form-data" role="form" id="quickForm">
							@csrf
                @include('backend.layouts.partials.messages')
							<div class="card-body row">
								<div class="col-md-12">
								<div class="form-group">
									<label for="name">Menu Title</label>
									<input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu Title" required="">
								</div>
							</div>
						</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<a class="btn btn-primary" href="{{ route('admin.menus.store') }}"
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

