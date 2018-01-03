   

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
                <h1 class="page-header">Tambah Data Tarif</h1>
            </div>
        </div><!--/.row-->    

        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">
            
        <form method="post" action="<?php echo base_url()."index.php/Admin/insert_tarif"; ?>">
          <div class="form-group row">
            <label for="merek" class="col-sm-2 col-form-label">ID Tarif</label>
            <div class="col-sm-10">
              <input type="text"  name="id_tarif" class="form-control" id="id_tarif" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="plat" class="col-sm-2 col-form-label">Merek Motor</label>
            <div class="col-sm-10">
              <input list="list_motor" type="text"  name="merek" class="form-control" id="merek" placeholder="">
              <datalist id="list_motor">
                <?php foreach ($data as $value) {?>
                  
                
                  <option value="<?=$value['id_merk']?>"><?=$value['merk_motor']?></option><?php } ?>
                </datalist>
            </div>
          </div>

          <div class="form-group row">
            <label for="plat" class="col-sm-2 col-form-label">Lama Pinjam</label>
            <div class="col-sm-10">
              <input list="list_jam" type="text"  name="jam" class="form-control" id="jam" placeholder="">
              <datalist id="list_jam">
                <?php foreach ($jam as $value) {?>
                  
                
                  <option value="<?=$value['id_jam']?>"><?=$value['jam']?></option><?php } ?>
                </datalist>
            </div>
          </div>

          <div class="form-group row">
            <label for="merek" class="col-sm-2 col-form-label">Tarif</label>
            <div class="col-sm-10">
              <input type="text"  name="harga" class="form-control" id="harga" placeholder="">
            </div>
          </div>

          <button type="submit" name="submit" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
        </div>
        </div>
        
</div>  <!--/.main-->