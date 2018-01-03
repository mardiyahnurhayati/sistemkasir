   

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Data Motor</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Motor</h1>
            </div>
        </div><!--/.row-->    

        <div class="panel panel-default">                        
            <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="text-right"><a  href="<?php echo base_url()."Admin/motor_tambah";?>"class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <br>

        <table class="table table-bordered table-striped" id="mytable">
            <thead>
             <tr>
            <center>
                <th>No</th>
                <th>PLAT NOMOR</th>
                <th>MERK</th>
                <th>Warna</th>
                <th>TAHUN TERBIT</th>
                <th>Action</th>
                
            </center>
                </tr>

            </thead>
        <tbody>
        <?php 
            $no = 1;
            foreach($motor as $value){?>
            <td><?php echo $no++ ?></td>
            <td><?php echo $value->PLATNOMOR; ?> </td>
            <td><?php echo $value->MERK_MOTOR; ?> </td>
            <td><?php echo $value->WARNA; ?> </td>
            <td><?php echo $value->TAHUNTERBIT; ?> </td>

            <td style="text-align:center">
                <a href="<?php echo base_url()."Admin/delete_motor/".$value->PLATNOMOR; ?>" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="<?php echo base_url()."Admin/edit/".$value->PLATNOMOR;;?>" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            </tr>
            <?php } ?>
            </tbody>

        </table>

    </div>

    </div>
        
    </div>  <!--/.main-->