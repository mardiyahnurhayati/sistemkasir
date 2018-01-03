   

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Data Pelanggan</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Pelanggan</h1>
            </div>
        </div><!--/.row-->    <!-- / -->

        <div class="panel panel-default">

             <div class="panel-body">
            <div class="text-right"><a href="<?php echo base_url()."index.php/Admin/pelanggan_tambah";?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <br>
        <!-- / table -->
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
             <tr>
            <center>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Universitas</th>
                <th>Fakultas</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
                
            </center>
                </tr>

            </thead>
        <tbody>
        <?php
            $no = 1;
            foreach ($data as $value) {?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $value['id_pelanggan']; ?></td>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['univ']; ?></td>
            <td><?php echo $value['fakultas']; ?></td>
            <td><?php echo $value['alamat']; ?></td>
            <td><?php echo $value['nohp']; ?></td>
            <td style="text-align:center">
                <a href="<?php echo base_url()."index.php/Admin/delete_pelanggan/".$value['id_pelanggan']; ?>" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="<?php echo base_url()."index.php/Admin/edit_pelanggan/".$value['id_pelanggan']; ?>" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            </tr>
            <?php } ?> 
            </tbody>

        </table>
        <!-- /end table -->

    </div>

    </div>
        
    </div>  <!--/.main-->