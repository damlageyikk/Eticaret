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
                <?php 
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
                    <label for="exampleInputPassword1">Slider resim</label>
                    <input  name="slider_resim" type="file" class="form-control"  >
                  </div>
        
                <div class="form-group">
                    <label for="exampleInputPassword1">Slider başlık</label>
                    <input  name="slider_baslik" type="text" class="form-control"  placeholder="Başlık giriniz" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider açıklama</label>
                    <input name="slider_aciklama" type="text" class="form-control" placeholder="Açıklama giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider sıra</label>
                    <input name="slider_sira" type="text" class="form-control" placeholder="Sıra numarasını giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider link</label>
                    <input name="slider_link" type="text" class="form-control" placeholder="Link giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider buton</label>
                    <input name="slider_button" type="text" class="form-control" placeholder="Buton adını giriniz">
                  </div>
    
                  <div class="form-group">
                  <label>Slider durum</label>
                  <select name="slider_durum" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Aktif</option>
                    <option value="0" >Pasif</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Slider banner</label>
                  <select name="slider_banner" class="form-control select2" style="width: 100%;">
                    <option value="1" selected="selected">Slider yap</option>
                    <option value="0" >Banner Yap</option>
                  </select>
                </div>
            
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="sliderKaydet" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      
  </div>

    </div>
    </section>
    
      </div>

 <?php require_once 'footer.php' ?>