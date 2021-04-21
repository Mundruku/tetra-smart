<form action="{{ route('admin.product.save') }}" method="POST" enctype="multipart/form-data">
<!-- Main content -->
  @csrf
<section class="content">
      <div class="container-fluid">

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add phone product</h3>

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
                  <label>Phone Name</label>
                  <input class="form-control" type="text" placeholder="Name">
                  
                </div>

              </div>
              <!-- /.col -->
                <div class="col-md-6">
               <div class="form-group">
                  <label>Category</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                  </div>

                <div class="col-md-6">
               <div class="form-group">
                  <label>Sub Category</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                  </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>phone Image</label>
                  <input type="file" class="form-control" placeholder="Image">
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

          </div>
        </div>
        <!-- /.card -->

        </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </form>