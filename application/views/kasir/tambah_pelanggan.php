        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-header text-center">Tambah Data Pelanggan</h3>
            </div>
        </div><!--/.row-->    
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">
              <div class="panel panel-body">
            <form method="post" action="<?php echo base_url()."Kasir/insert_pelanggan"; ?>">
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="nama" name="nama" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="alamat" name="alamat" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="univ" class="col-sm-2 col-form-label">Universitas</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="univ" name="univ" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="fakultas" name="fakultas" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="hp" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="hp" name="hp" placeholder="">
            </div>
          </div>
          
          
          <button type="submit" name="submit" class="btn btn-primary pull-right">Tambah</button>
        </form>
        </div>                      
        </div>
        </div>
      </div>  
<div class="col-sm-2"></div>
