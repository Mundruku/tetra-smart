


<!-- content -->


@include('layouts.admin.dashbordHeader')


@include('layouts.admin.dashbordSideMenu')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
          <h3 class="card-title">Product</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          s_no
                      </th>
                      <th style="width: 20%">
                        Name
                      </th>
                      <th style="width: 30%">
                        Image
                      </th>
                      <th style="width: 30%">
                        Normal Price
                      </th>
                      <th style="width: 30%">
                        Purchase Price
                      </th>
                      <!-- <th>
                        Description
                      </th> -->
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
        @foreach ($products as $h=>$product) 
                  <tr>
                      <td>
                       {{$h+1}}
                      </td>
                      <td>
                          <a href="product-details/{{$product->id}}"> 
                          {{$product->product_name}}
                              <!-- AdminLTE v3 -->
                          </a>
                          <br/>
                          <small>
                              <!-- Created 01.01.2019 -->
                              {{$product->created_at}}
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="{{ $product->picture_url }}">
                              </li>
                          </ul>
                      </td>
                      <!-- <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td> -->
                      <td>
                          <a>
                          {{$product->price}}
                              <!-- AdminLTE v3 -->
                          </a>
     
                      </td>

                      <td>
                          <a>
                          {{$product->purchase_price}}
                              <!-- AdminLTE v3 -->
                          </a>
     
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Active</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="product-details/{{$product->id}}">
                              <i class="fas fa-eye">
                              </i>
                              <!-- View -->
                          </a>
                          <a class="btn btn-info btn-sm" title="edit product" href="{{ route('admin.product_edit', ['id'=>$product->id]) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              <!-- Edit -->
                          </a>
                          <a class="btn btn-danger btn-sm" onclick="confirm('Are sure you  want to delete the product')" href="{{ route('admin.product_delete', ['id'=>$product->id]) }}">
                              <i class="fas fa-trash">
                              </i>
                              <!-- Delete -->
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@include('layouts.admin.dashbordFooter')


<!-- /content -->