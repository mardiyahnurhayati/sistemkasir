   

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Data Tarif</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Tarif</h1>
            </div>
        </div><!--/.row-->    

        <div class="panel panel-default">                        
            <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="text-right"><a href="<?php echo base_url()."index.php/Admin/tarif_tambah";?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <br>

        <table class="table table-bordered table-striped" id="mytable">
            <thead>
             <tr>
            <center>
                <th>No</th>
                <th>Merk Motor</th>
                <th>Jam</th>                
                <th>Harga</th>
                <th>Action</th>
                
            </center>
                </tr>

            </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $value) {?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $value->MERK_MOTOR; ?></td>
             <td><?php echo $value->JAM?></td>
            <td><?php echo $value->HARGA; ?></td>
            <td style="text-align:center">
                <a href="#" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            </tr>
            <?php } ?>
            </tbody>

        </table>

    </div>

    </div>
        
    </div>  <!--/.main-->