


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
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
          <h3 class="card-title">View Users</h3>

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
                        Email
                      </th>
                      <th>
                        User Type
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <!-- <th style="width: 20%">
                      </th> -->
                  </tr>
              </thead>
              <tbody>
        @foreach ($users as $user) 
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                          {{$user->name}}
                              <!-- AdminLTE v3 -->
                          </a>
                          <br/>
                          <small>
                              <!-- Created 01.01.2019 -->
                              {{$user->created_at}}
                          </small>
                      </td>
                      <td>
                        <a>
                        {{$user->email}}
                        </a>
                
                      </td>
                      <td class="project_progress">
                              {{$user->user_type}}</>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Active</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="/admin/subcategory-details/{{$user->id}}">
                              <i class="fas fa-eye">
                              </i>
                              <!-- View -->
                          </a>
                          <!-- <a class="btn btn-info btn-sm" href="/admin/sub-category/{{$user->id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                             
                          </a> -->
                          <a class="btn btn-danger btn-sm" href="/admin/delete-users/{{$user->id}}">
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