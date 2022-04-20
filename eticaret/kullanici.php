<?php require_once 'header.php'; 

if($var == 0) {
    Header("Location:giris?durum=girisyap");
}

?>
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="Admin/modals/islem.php" method="post" >
                                <div class="login-form">
                                     <h4 class="login-title">Kullanıcı bilgileri <?php if (@$_GET['durum']=="hata") { ?>
                                 <i style="color:red; font-size: 12px;">  <br>  Kullanıcı adı ya da şifre hatalı</i> 
                               <?php     } ?>
                           </h4>
                           <input type="hidden" name="kullaniciid" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Kullanıcı ad soyad*</label>
                                            <input value="<?php echo $kullanicicek['kullanici_adsoyad']?>" name="adsoyad"  required="" class="mb-0" type="text" placeholder="Ad ve soyad giriniz.">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Email</label>
                                            <input name="email" value="<?php echo $kullanicicek['kullanici_mail']?>" required="" class="mb-0" type="text" placeholder="Email giriniz.">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Adres</label>
                                            <input name="adres" value="<?php echo $kullanicicek['kullanici_adres']?>" required="" class="mb-0" type="text" placeholder="Adres giriniz.">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Şehir</label>
                                            <input name="sehir" value="<?php echo $kullanicicek['kullanici_il']?>" required="" class="mb-0" type="text" placeholder="Şehir giriniz.">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>İlçe</label>
                                            <input name="ilce" value="<?php echo $kullanicicek['kullanici_ilce']?>" required="" class="mb-0" type="text" placeholder="İlçe giriniz.">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Telefon</label>
                                            <input name="telefon" value="<?php echo $kullanicicek['kullanici_tel']?>" required="" class="mb-0" type="text" placeholder="Telefon numarası giriniz.">
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <button name="kullaniciduzenle" class="register-button mt-0">Kaydet</button>
                                        </div>

                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="islem.php" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">Kayıt
                                     <?php if (@$_GET['durum']=="kullanicivar") { ?>
                                      <br>  <i style="color:red; font-size:14px;">Bu kullanıcı sistemde kayıtlı</i>
                                  <?php    }  elseif(@$_GET['durum']=="sifrehata"){ ?> 

                                    <br> <i style="color:red; font-size:14px;">Şifreniz uyuşmuyor lütfen iki şifreyi de aynı girin</i>
                                    <?php } elseif (@$_GET['durum']=="sifreeksik") { ?>
                                        <br>  <i style="color:red; font-size:14px;">Lütfen minimum 8 karakter olacak şekilde şifre girin</i>
               <?php } elseif (@$_GET['durum']=="basarisiz") { ?>
                <br>  <i style="color:red; font-size:14px;">İşlem başarısız</i>
              <?php } ?>

                                 </h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Kullanıcı adı </label>
                                            <input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı adınızı giriniz.">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Ad soyad</label>
                                            <input name="adsoyad" required="" class="mb-0" type="text" placeholder="Ad soyadınızı giriniz.">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email adresi </label>
                                            <input name="email" required="" class="mb-0" type="email" placeholder="Email adresinizi giriniz.">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre</label>
                                            <input name="sifre" required="" class="mb-0" type="password" placeholder="Şifrenizi giriniz.">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre tekrar</label>
                                            <input name="sifretekrar" required="" class="mb-0" type="password" placeholder="Şifrenizi tekrar giriniz.">
                                        </div>
                                        <div class="col-12">
                                            <button name="register" class="register-button mt-0">Kayıt ol</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          <?php require_once 'footer.php'; ?>