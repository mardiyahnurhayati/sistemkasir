   

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
        <div class="panel-body">

            <!-- / menu select -->
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
                <th>Plat</th>
                <th>Motor</th>
                <th>Jumlah Disewa (kali)</th>
                <th>TotalBiaya</th>
                
            </center>
                </tr>

            </thead>
        <tbody>
           <?php 
            $no = 1;
            $total_pemasukan=0;
            foreach($data as $value){?>
            <td><?php echo $no++ ?></td>
            <td><?php echo $value->PLATNOMOR; ?></td>
            <td><?php echo $value->MERK_MOTOR; ?></td>
            <td><?php echo $value->total_sewa; ?></td>
            <td><?php echo $value->TRANSAKSI_TOTAL; ?></td>
            </tr>
            <?php $total_pemasukan = $value->total; ?>
            <?php }?>
               
            </tbody>


            <td></td>
            <td></td>
            <td></td>
            <td><h1>JUMLAH</h1></td>
            <td><?php echo $total_pemasukan; ?></td>

        </table>
        <br>
          <button type="button" class="btn btn-primary pull-right">Print</button>

    </div>

    </div>
        
    </div>  <!--/.main-->