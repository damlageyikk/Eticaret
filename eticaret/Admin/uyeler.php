<?php require_once 'header.php'; 
require_once 'sidebar.php' ?>
  <!-- Content Wrapper. Contains page content -->ß
    <!-- /.content-header -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Üyeler</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <a href="uyeler-ekle"><button style="float:right" class="btn btn-success" type="submit">Yeni kullanıcı ekle</button></a>
                
                  <thead>
                    <tr>
                      <th>Kullanıcı numara</th>
                      <th>Ad Soyad</th>
                      <th>Kullanıcı adı</th>
                      <th>Katıldığı tarih</th>
                      <th>Kullanıcı yetki</th>
                      <th>Adres</th>
                      <th>İl</th>
                      <th>İlçe</th>
                      <th>Telefon Numarası</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       $kullanici=$baglanti->prepare("SELECT * FROM kullanici order by kullanici_id ASC");
                        $kullanici->execute();
                        while($kullanicicek=$kullanici->fetch(PDO::FETCH_ASSOC)) {?>
                    <tr>
                      <td><?php echo $kullanicicek['kullanici_id'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_adsoyad'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_adi'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_zaman'] ?></td>
                      <td><span class="tag tag-success"><?php
                      if($kullanicicek['kullanici_yetki']=="2") {
                        echo "Admin";
                      }elseif($kullanicicek['kullanici_yetki']=="1"){
                        echo "Üye";
                       } ?></span></td>
                          <td><?php echo $kullanicicek['kullanici_adres'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_il'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_ilce'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_tel'] ?></td>
                      <td><a href="modals/islem.php?kullanicisil&id=<?php echo $kullanicicek['kullanici_id'] ?>">
                      <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button></a></td>
                    </tr> 
                <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->


    </div>
    </section>
    
      </div>

 <?php require_once 'footer.php' ?>