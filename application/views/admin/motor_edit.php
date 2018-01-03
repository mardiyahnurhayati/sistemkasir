   

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
                <h1 class="page-header">Edit Data Motor</h1>
            </div>
        </div><!--/.row-->    


        <div class="container">
        <div class="panel panel-default">  
            <div class="panel panel-body">

            <form method="post" action="<?php echo base_url(). "Admin/update_motor"?>">

          <div class="form-group row">
            <label for="plat" class="col-sm-2 col-form-label">Plat Motor</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $platnomor;?>" class="form-control" id="platmotor" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="plat" class="col-sm-2 col-form-label">Merek Motor</label>
            <div class="col-sm-10">
              <input list="list_motor" type="text"  name="merek" class="form-control" id="merek" placeholder="" value="<?php echo $id_merk;?>">
              <datalist id="list_motor">
                <?php foreach ($data as $value) {?>
                  
                
                  <option value="<?=$value['id_merk']?>"><?=$value['merk_motor']?></option><?php } ?>
                </datalist>
            </div>
          </div>

          <div class="form-group row">
            <label for="warna" class="col-sm-2 col-form-label">Warna</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="warna" placeholder="" value="<?php echo $warna;?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="warna" class="col-sm-2 col-form-label">Tahun Terbit</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="tahunterbit" placeholder="" value="<?php echo $tahunterbit;?>">
            </div>
          </div>
          <button type="button" class="btn btn-primary pull-right">Save</button>
        </form>
        </div>                      
        </div>
        </div>
        </div>
        
</div>  <!--/.main-->