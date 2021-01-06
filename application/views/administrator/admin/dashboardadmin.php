<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">FAYANBAY FUTSAL</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>administrator/admin/dashboardadmin">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- small box -->
            <div class="col-md-12">
            <div class="card">             
              <div class="card-body">

                    <!-- Post -->
                      <!-- /.user-block -->
                     


                        <div class="card card-primary card-outline">
                          <div class="card-body box-profile">
                            <div class="text-left">
                            <h2 style="font-family: inherit;" class="font-size-22 font-bold uc text-center">Data pemesanan</h2>

                            <table id="example2" class="table table-bordered table-striped table-hover">           
                <thead>
                <tr align="center">
                <th>NO</th>
                  <th>kode pemesanan</th>
                  <th>Nama pemesanan</th>
                  <th>Jam Pemesanan</th> 
                  <th>Nomer Telpon</th>     
                  <th>Tanggal pemesanan</th> 
                  <th>DP</th> 
                  <th>Lapangan</th> 
                
                  
                </tr>
                </thead>
                <tbody>               
                <?php
                $no = 1;
                foreach ($tb_pemesanan as $plg) : ?>
                 <tr>
             
                 <td width="20px"><?php echo $no++ ?></td>
                      <td><?php echo $plg->kode_pemesanan?></td>
                      <td><?php echo $plg->nama_pemesanan?></td> 
                      <td><?php echo $plg->jam_pemesanan?></td>
                      <td><?php echo $plg->no_telp?></td>
                      <td><?php echo $plg->tgl_pemesanan?></td>
                      <td><?php echo $plg->dp?></td>
                      <td><?php echo $plg->lapangan?></td>
                      
                      
                  </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
              </table>
                      </div>
              <!-- /.card-body -->
                    </div>

                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      
        <!-- /.row -->
        <!-- Main row -->
  
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

