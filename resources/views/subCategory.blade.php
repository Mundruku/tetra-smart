


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
            <h1>Sub Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sub Category</li>
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
          <h3 class="card-title">Sub Category</h3>

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
                          #
                      </th>
                      <th style="width: 20%">
                        Name
                      </th>
                      <th style="width: 30%">
                        Image
                      </th>
                      <th>
                        Category
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
        @foreach ($subCategory as $sub_cat) 
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                          {{$sub_cat->name}}
                              <!-- AdminLTE v3 -->
                          </a>
                          <br/>
                          <small>
                              <!-- Created 01.01.2019 -->
                              {{$sub_cat->created_at}}
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="{{ asset('images/sub_category/'.$sub_cat->image) }}">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                              {{$sub_cat->category}}</>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Active</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="/subcategory-details/{{$sub_cat->id}}">
                              <i class="fas fa-eye">
                              </i>
                              <!-- View -->
                          </a>
                          <a class="btn btn-info btn-sm" href="/sub-category/{{$sub_cat->id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              <!-- Edit -->
                          </a>
                          <a class="btn btn-danger btn-sm" href="/delete-subcategory/{{$sub_cat->id}}">
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



@include('layouts.user.dashbordFooter')


<!-- /content -->