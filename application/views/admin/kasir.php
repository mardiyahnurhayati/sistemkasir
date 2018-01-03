   

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Data User</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data User</h1>
            </div>
        </div><!--/.row-->    

        <div class="panel panel-default">                        
            <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="text-right"><a href="<?php echo base_url()."index.php/Admin/kasir_tambah";?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
            <br>

        <table class="table table-bordered table-striped" id="mytable">
            <thead>
             <tr>
            <center>
                <th>No</th>
                <th>ID User</th>
                <th>Nama</th>
                <th>Hak Akses</th>
                <th>Password</th>
                <th>Aksi</th>
                
            </center>
                </tr>

            </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $user) {?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $user['id_user']; ?></td>
            <td><?php echo $user['nama_user']; ?></td>
            <td><?php echo $user['type']; ?></td>
            <td><?php echo $user['password']; ?></td>
            <td style="text-align:center">
                <a href="<?php echo base_url()."index.php/Admin/delete_kasir/".$user['id_user']; ?>" class="btn btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="<?php echo base_url()."index.php/Admin/edit_kasir/".$user['id_user']; ?>" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            </tr>
            <?php } ?>
            </tbody>

        </table>

    </div>

    </div>
        
    </div>  <!--/.main-->