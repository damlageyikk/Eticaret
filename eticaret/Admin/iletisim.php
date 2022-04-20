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
                <h3 class="card-title">İletişim Ayarları</h3>
              </div> 
              <!-- /.card-header -->
              <!-- form start -->
              <form action="modals/islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon Numarası</label>
                    <input value="<?php echo $ayarcek['telefon'] ?>" type="text" class="form-control" name="telefon" placeholder="Telefon numaranızı giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mail</label>
                    <input value="<?php echo $ayarcek['email'] ?>" type="text" class="form-control" name="email" placeholder="Mail adresinizi giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Adres</label>
                    <input value="<?php echo $ayarcek['adres'] ?>" type="text" class="form-control" name="adres" placeholder="Adresinizi giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mesai</label>
                    <input value="<?php echo $ayarcek['mesai'] ?>" type="text" class="form-control" name="mesai" placeholder="Mesainizi giriniz">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="iletisimKaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      
  </div>

    </div>
    </section>
    
      </div>

 <?php require_once 'footer.php' ?>