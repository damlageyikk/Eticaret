<?php 
error_reporting(0);
session_start();
ob_start();
require_once 'Admin/modals/baglanti.php';
require_once 'function.php';


$ayar=$baglanti->prepare("SELECT * FROM ayarlar WHERE id=?");
$ayar->execute(array(1));
$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);

$hakkimizda=$baglanti->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=?");
$hakkimizda->execute(array(1));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);

$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi ");
 $kullanicisor->execute(array(
'kullanici_adi'=>$_SESSION['normalgiris']
 ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$var=$kullanicisor->rowCount();


?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ne Ararsan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index">
                                        <img src="images/menu/logo/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                    <?php  
                  $kategori=$baglanti->prepare("SELECT * FROM  kategori  order by kategori_sira ASC");
                  $kategori->execute();
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <option value="<?php echo $kategoricek['kategori_id'] ?>" ><?php echo $kategoricek['kategori_adi'] ?></option>                          
                                   <?php  } ?>                  
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->


                                
                                <div class="header-middle-right">
                                   
                                <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                    <div class="btn-group">
                                    <button style="font-size: 20px; color:red;" type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user"></i></button>
                                    <div class="dropdown-menu">
                                    <a  class="dropdown-item" href="sepet"><i class="fas fa-shopping-basket"></i> Sepetim </a>
                                        <a class="dropdown-item" href="siparisler"><i class="fas fa-box-open"></i> Siparişlerim </a>
                                    <a  class="dropdown-item" href="kullanici"><i class="fas fa-user"></i> Hesabım </a>
                                    <a  class="dropdown-item" href="sifremidegistir"><i class="fas fa-key"></i> Şifremi değiştir </a>
                                        <a class="dropdown-item" href="cikis"><i class="fas fa-sign-out-alt"></i> Çıkış</a>
                                    </div>
                                    </div>
                                    
                                   
                                        </li>
                                    
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">Sepetim
                                                
                                                </span>
                                            </div>
                                        
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                <?php 
                        foreach ($_COOKIE['sepet'] as $key => $value) {
                            $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id  order by urun_sira ASC");
                            $urunler->execute(array(
                              'urun_id'=>$key
                          ));
                            $urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);
                            $sepettoplam+=$value * $urunlercek['urun_fiyat']; 

                            ?>
                                                   
                                                <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html"><?php echo $urunlercek['urun_baslik'] ?></a></h6>
                                                            <span><?php echo $urunlercek['urun_fiyat'] ?>₺</span>
                                                        </div>
                                                        <a href="islem?sepetsil&id=<?php echo  $key ?>">
                                                        <button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    
                                                    </a>
                                                        
                                                    </li>
                                                
<?php } ?>
                                                    
                                                </ul>
                                                
                                                <p class="minicart-total">Toplam: <span><?php 
                                                echo $sepettoplam; ?></span></p>
                                                <div class="minicart-button">
                                                    <a href="sepet" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>Sepeti görüntüle</span>
                                                    </a>
                                                    <a href="alisveris" class="li-button li-button-fullwidth">
                                                        <span>Alışverişi tamamla</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                    
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="navbar navbar-expand-lg navbar-light bg-light mb-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                               <div class="hb-menu">
                                    <nav>
                                       <ul>
                                        <li><a href="index">Anasayfa</a></li>
                                        <li class="megamenu-holder"><a href="">Kategorİler</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li>
                                                        <ul>
                                                             <?php  
                  $kategori=$baglanti->prepare("SELECT * FROM  kategori  where kategori_durum=:kategori_durum and  kategori_sira  between 1 and 10 limit 8 ");
                  $kategori->execute(array(

                   'kategori_durum'=>1

                  ));
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo  $kategoricek['kategori_adi'] ?></a></li>
                                                        <?php } ?>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                               <?php  
                  $kategori=$baglanti->prepare("SELECT * FROM  kategori   where  kategori_durum=:kategori_durum and kategori_sira  between 10 and 20 limit 8 ");
                  $kategori->execute(
array(

                   'kategori_durum'=>1

                  )


                  );
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo  $kategoricek['kategori_adi'] ?></a></li>
                                                        <?php } ?>

                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                               <?php  
                  $kategori=$baglanti->prepare("SELECT * FROM  kategori  where  kategori_durum=:kategori_durum and  kategori_sira  between 20 and 30 limit 8 ");
                  $kategori->execute(array(

                   'kategori_durum'=>1

                  )
);
                  while ($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li><a href="urunler-<?=seolink($kategoricek['kategori_adi']).'-'.$kategoricek['kategori_id'] ?>"><?php echo  $kategoricek['kategori_adi'] ?></a></li>
                                                        <?php } ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="hakkimizda">HAKKIMIZDA</a></li>
                                            <li><a href="bilgi">SIKÇA SORULAN SORULAR</a></li>
                                            <li><a href="iletisim">İLETİŞİM</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>