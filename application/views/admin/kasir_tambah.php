   

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
                <h1 class="page-header">Tambah Data User</h1>
            </div>
        </div><!--/.row-->    

        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">

            <form method="post" action="<?php echo base_url()."index.php/Admin/insert_kasir"; ?>">

          
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text"  name="nama" class="form-control" id="nama" placeholder="" required="">
            </div>
          </div>

          <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
              <select class="form-control" name="type">
                <option value="admin">Admin</option>
                <option value="kasir">Kasir</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="inputPassword" placeholder="" required="">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <input type="text" name="status" class="form-control" id="inputPassword" placeholder="" required="">
            </div>
          </div>

          <br>
          <button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
        </div>
        </div>
        
</div>  <!--/.main-->