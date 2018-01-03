   

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
                <h1 class="page-header">Tambah Data Pelanggan</h1>
            </div>
        </div><!--/.row-->    

        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">

             <form method="post" action="<?php echo base_url()."index.php/Admin/insert_pelanggan"; ?>">

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text"  name="nama" class="form-control" id="nama" placeholder="" required="">
            </div>
          </div>


          <div class="form-group row">
            <label for="univ" class="col-sm-2 col-form-label">Universitas</label>
            <div class="col-sm-10">
              <input type="text"  name="univ" class="form-control" id="univ" placeholder="" required="">
            </div>
          </div>

          <div class="form-group row">
            <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
            <div class="col-sm-10">
              <input type="text"  name="fakultas" class="form-control" id="fakultas" placeholder="" required="">
            </div>
          </div>

          <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text"  name="alamat" class="form-control" id="alamat" placeholder="" required="">
            </div>
          </div>

          <div class="form-group row">
            <label for="hp" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-10">
              <input type="text" name="nohp"  class="form-control" id="hp" placeholder="" required="">
            </div>
          </div>
          
          <button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
        </div>
        </div>
        
</div>  <!--/.main-->