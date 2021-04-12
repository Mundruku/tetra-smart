

<!-- content -->


@include('layouts.user.dashbordHeader')


@include('layouts.user.dashbordSideMenu')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- SELECT2 EXAMPLE -->
        <form action="/store" method="POST" >
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Create Category</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control" name="name" type="text" placeholder="Name">
                  
                </div>


              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image" placeholder="Image">
                </div>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- <h5>Custom Color Variants</h5> -->
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <!-- <label>Minimal (.select2-danger)</label> -->

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <!-- <label>Multiple (.select2-purple)</label> -->

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin. -->
            <button type="submit" class="btn btn-success float-right">Submit</button>

            <!-- @foreach ($category as $cat)
              <p>{{$cat->name}}</p>
            @endforeach -->
            
          </div>
        </div>
        </form>
        <!-- /.card -->

       
   
    
  

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




@include('layouts.user.dashbordFooter')


<!-- /content -->

 