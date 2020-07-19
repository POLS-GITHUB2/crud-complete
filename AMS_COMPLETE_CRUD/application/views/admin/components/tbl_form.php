<div class="wrapper">
  <!-- Navbar -->
 <?php include('tbl_navbar.php');?>
  <!-- /.navbar -->

  <?php include('tbl_sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->

          <div class="card">
            <div class="card-header">

              <h3 class="card-title">DataTable with default features</h3>
            </div>

           

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  //print_r($data);exit;
                    if( is_array($data))
                    {
                      $count  =  $this->uri->segment(3 , 0);
                       foreach ($data as $row)
                       {

                         ?>

                          <tr>
                                 <td><?= ++$count ?></td>
                                 <td><?= $row->category_name ?></td>
                                 <td>
                                  <div class="row">
                                    <div class="col-lg-2">
  <?= anchor("Category/EditCategory/{$row->id}",'Edit',['class'=>'btn btn-warning btn-sm',]); ?>

                                      </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                      <div class="col-lg-2">

      <?=
          form_open('Category/DeleteCategory'),
          form_hidden('id',$row->id),
          form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger btn-sm']),
          form_close();
      ?>
                                    </div>
                                  </div>
                         </td>
                              </tr>
                         <?php
                      }
                     }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th bgcolor="#DEE2E6"><a class="btn btn-info btn-sm" href="<?= base_url('ADDCATEGORY')?>"
                              <i class="fas fa-folder">
                              </i>
                              Add
                          </a></th>
                  <th bgcolor="#DEE2E6"><input type="hidden"/></th>
				  <th bgcolor="#DEE2E6"><input type="hidden"/></th>
				  <th bgcolor="#DEE2E6"><input type="hidden"/></th>
				  <th bgcolor="#DEE2E6"><input type="hidden"/></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php include('tbl_footer.php');?>
</div>