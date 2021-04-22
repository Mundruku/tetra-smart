

@include('layouts.user.dashbordHeader')


@include('layouts.user.dashbordSideMenu')




 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Category Detail</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        @foreach ($subCategory as $subCategory) 
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">

              <div class="row">
                <div class="col-12">
                  <h4>{{$subCategory->name}}</h4>
                    <div class="post">
                      <div class="user-block">
                        <!-- <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image"> -->
                        <span class="username">
                          <a >{{$subCategory->category}}</a>
                        </span>
                        <span class="description">{{$subCategory->created_at}}</span>
                      </div>
                      <!-- /.user-block -->
             
                    </div>

         

            
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <!-- <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Category Image</h3>  -->

              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="{{asset('images/sub_category/'.$subCategory->image) }}" >
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <!-- <h5 class="card-title text-primary text-white">Card Title</h5> -->
                    <!-- <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p> -->
                    <!-- <a href="#" class="text-white">Last update 2 mins ago</a> -->
                  </div>
                </div>
              </div>
     
              <div class="text-center mt-5 mb-3">
                <a href="/sub-category/{{$subCategory->id}}" class="btn btn-sm btn-primary">Edit</a>
                <a href="/delete-subcategory/{{$subCategory->id}}" class="btn btn-sm btn-danger">Delete</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      @endforeach
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.user.dashbordFooter')
