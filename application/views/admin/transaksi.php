   

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div><!--/.row-->    

        <div class="panel panel-default">                        
            <!-- /.panel-heading -->

            <!-- /.panel-body -->
            <!-- / menu select -->
             
           
        <div class="panel-body">

            <form class="form-inline pull-left">
                 <div class="col-sm-5">
                    <select class="selectpicker">
                        <option></option>
                        <option>Minggu Ini</option>
                        <option>Bulan Ini</option>
                    </select>
                </div>
            </form>

            <form class="form-inline pull-right">
            

              <div class="form-group form-group-sm " >
                <label class="control-label col-md-3"> Tanggal</label>
               
                <div class="col-md-5">
                    <input type="text" class="form-control" id="tanggal">
                    
                </div>
                 </div>
              <button type="submit" class="btn btn-primary btn-sm">Cari</button>
            </form>
                
            <!-- /end menu select -->
            <br>
            <br>
            <br>

        <table class="table table-bordered table-striped" id="mytable">
            <thead>
             <tr>
            <center>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Pelanggan</th>
                <th>Plat Motor</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Biaya</th>
                <th>Status</th>
                
            </center>
                </tr>

            </thead>
        <tbody>
        <?php 
            $no = 1;
            foreach($data as $value){?>
            <td><?php echo $no++ ?></td>
            <td><?php echo $value->ID_TRANSAKSI; ?></td>
            <td><?php echo $value->NAMA; ?></td>
            <td><?php echo $value->PLATNOMOR; ?></td>
            <td><?php echo $value->TGL_TRANSAKSI; ?></td>
            <td><?php echo $value->TGL_KEMBALI; ?></td>
            <td><?php echo $value->TRANSAKSI_TOTAL; ?></td>
            <td><?php echo $value->TRANSAKSI_STATUS; ?></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
        <br>
          <button type="button" class="btn btn-primary pull-right">Print</button>

    </div>

    </div>
        
    </div>  <!--/.main-->