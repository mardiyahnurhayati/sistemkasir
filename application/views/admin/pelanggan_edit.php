   

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
                <h1 class="page-header">Edit Data Kasir</h1>
            </div>
        </div><!--/.row-->    

        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">
            
              <form method="post" action="<?php echo base_url(). "index.php/Admin/update_pelanggan"?>">


          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
              <input type="text"  readonly="readonly" class="form-control" name="id_pelanggan" id="nama" placeholder="" value="<?php echo $id_pelanggan?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" name="nama" id="nama" placeholder="" value="<?php echo $nama?>">
            </div>
          </div>


          <div class="form-group row">
            <label for="univ" class="col-sm-2 col-form-label">Universitas</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="univ" name="univ" placeholder="" value="<?php echo $univ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="fakultas" name="fakultas" placeholder="" value="<?php echo $fakultas?>">
            </div>
          </div>

            <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="alamat" name="alamat" placeholder="" value="<?php echo $alamat?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="hp" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="hp" name="nohp" placeholder="" value="<?php echo $nohp?>">
            </div>
          </div>
          
          <button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
        </div>
        </div>
        
</div>  <!--/.main-->