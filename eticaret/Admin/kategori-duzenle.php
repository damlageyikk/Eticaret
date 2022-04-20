<?php require_once 'header.php'; 
require_once 'sidebar.php';

$kategori=$baglanti->prepare("SELECT * FROM kategori WHERE kategori_id=:kategori_id");
$kategori->execute(array(
    'kategori_id'=>$_GET['id']
));
$kategoricek=$kategori->fetch(PDO::FETCH_ASSOC);

?>
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
                    <label for="exampleInputPassword1">Kategori Adı</label>
                    <input value="<?php echo $kategoricek['kategori_adi'] ?>"  name="kategori_adi" type="text" class="form-control"  >
                  </div>
                  <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id'] ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Sıra</label>
                    <input value="<?php echo $kategoricek['kategori_sira'] ?>" name="kategori_sira" type="text" class="form-control" placeholder="Kullanıcı adınızı giriniz">
                  </div>
              
                  <div class="form-group">
                  <label>Kategori durum</label>
                  <select name="kategori_durum" class="form-control select2" style="width: 100%;">
                   
                   <option value="1" <?php if($kategoricek['kategori_durum']=="1"){ echo 'selected';
                    } ?>>Aktif</option>

                    <option value="0" <?php if($kategoricek['kategori_durum']=="0"){ echo 'selected';
                    } ?>>Pasif</option>
                  </select>
                </div>
            
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="kategoriDuzenle" type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      
  </div>

    </div>
    </section>
    
      </div>

 <?php require_once 'footer.php' ?>