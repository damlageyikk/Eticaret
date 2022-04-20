<?php require_once 'header.php'; 
require_once 'sidebar.php' ?>
    <!-- /.content-header -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

        <div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Genel Ayarlar</h3> </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="modals/islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input value="<?php echo $ayarcek['baslik'] ?>" type="text" class="form-control" name="baslik" placeholder="Sitenizin başlığını giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Site Açıklaması</label>
                    <input value="<?php echo $ayarcek['aciklama'] ?>" type="text" class="form-control" name="aciklama" placeholder="Site açıklamanızı giriniz">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Anahtar Kelime</label>
                    <input value="<?php echo $ayarcek['anahtarkelime'] ?>" type="text" class="form-control" name="anahtarkelime" placeholder="Anahtar Kelimenizi giriniz">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="ayarKaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!--Logo Card-->
            <div class="card card-primary col-md-12">
              <form action="modals/islem.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="eskilogo" value="<?php echo $ayarcek['logo'] ?>" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <img style="width:250px;" src="resimler/logo/<?php echo $ayarcek['logo'] ?>">
                    <input name="logo" type="file" class="form-control">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="logoKaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
      
  </div>

    </div>
    </section>
    
      </div>

 <?php require_once 'footer.php' ?>