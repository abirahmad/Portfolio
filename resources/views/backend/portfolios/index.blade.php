 @extends('backend.layouts.master')

 @section('title')
 Projects List
 @endsection


 @section('content')
<div class="content-wrapper">
	 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projectss</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projectss</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <section class="content">
 	
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Projects List</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
              	<div class="text-right">
		            <a href="{{route('admin.portfolios.create')}}" class="btn btn-primary btn-sm-report"><i class="fa fa-plus"></i>Add New Projects</a>
		        </div>
                <table id="portfolio_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Project Title</th>
                    <th>Thumbnail</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tfoot>
                  <tr>
                    <th>Project Title</th>
                    <th>Thumbnail</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           </div>
       </section>
 @endsection

@section('scripts')
<!--  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script> -->

@section('scripts')
<script>
    portfolio_table = $('table#portfolio_table').DataTable({
        dom: 'Blfrtip',
        processing: true,
        serverSide: true,
        searchable: true,
        aaSorting: [
            // [3, 'desc']
        ],
        // ajax:"admin/pages",
        "ajax": {
            "url": "portfolios",
        },

        columnDefs: [{
            //     "targets": [7, 8],
            //     // "orderable": false,
            //     // "searchable": false
        }],

        aLengthMenu: [
            [25, 50, 100, 1000, -1],
            [25, 50, 100, 1000, "All"]
        ],


         buttons: [
            'excel', 'pdf', 'print'
        ],

        columns: [{
                data: 'project_title',
                name: 'project_title'
            },
            {
                data: 'thumbnail',
                name: 'thumbnail'
            },

            {
                data: 'action',
                name: 'action'
            }
        ],

    });
</script>

@endsection