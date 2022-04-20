<?php require_once 'header.php'; 
require_once 'sidebar.php'?>
    <!-- /.content-header -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

        <div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Sosyal Medya Ayarları</h3>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form action="modals/islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input value="<?php echo $ayarcek['facebook'] ?>" type="text" class="form-control" name="facebook" placeholder="Facebook hesabınızı giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input value="<?php echo $ayarcek['instagram'] ?>" type="text" class="form-control" name="instagram" placeholder="Instagram hesabınızı giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Youtube</label>
                    <input value="<?php echo $ayarcek['youtube'] ?>" type="text" class="form-control" name="youtube" placeholder="Yputube hesabınızı giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Twitter</label>
                    <input value="<?php echo $ayarcek['twitter'] ?>" type="text" class="form-control" name="twitter" placeholder="Twitter hesabınızı giriniz">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="sosyalKaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      
  </div>

    </div>
    </section>
    
      </div>

 <?php require_once 'footer.php' ?>