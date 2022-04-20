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
                <h3 class="card-title">Genel Ayarlar</h3> </div> <?php 
                if(@$_GET['yuklenme']=="basarili") { ?>
              <h6 style="color:red;">(Yükleme işlemi başarısız)</h6> <?php  }
                 elseif(@$_GET['yuklenme']=="kullanicivar") { ?>
                  <h6 style="color:red;">(Kullanıcı kayıtlı)</h6>
                <?php } ?>
            
                <!-- /.card-header -->
              <!-- form start -->
              <form action="modals/islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
        
                <div class="form-group">
                    <label for="exampleInputPassword1">Resim</label>
                    <input  name="resim" type="file" class="form-control"  >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input name="kullaniciadi" type="text" class="form-control" placeholder="Kullanıcı adınızı giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Şifre</label>
                    <input name="sifre" type="text" class="form-control"  placeholder="Şifrenizi giriniz">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ad  Soyad </label>
                    <input name="adsoyad"  type="text" class="form-control" placeholder="Adınızı ve soyadınızı giriniz">
                  </div>
            
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="uyelerKaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      
  </div>

    </div>
    </section>
    
      </div>

 <?php require_once 'footer.php' ?>