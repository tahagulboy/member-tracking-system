<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include("statik/ayarlar.php"); 
    session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=yonlendirme/yasakli.php");
    }
    ?>
    <title><?php echo($yonetim["DernekAdı"] . " Yönetim Sistemi"); ?></title>
    <?php include("statik/head.php"); ?>
    <link rel="stylesheet" href="kaynaklar/panel.css">
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?php echo($yonetim["DernekAdı"]) ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="yonlendirme/cikis.php"><i class="fa-solid fa-right-from-bracket"></i> Çıkış Yap</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <?php include("statik/navbar.php"); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dernek Yönetim Sistemi</h1>
      </div>
      <div style="text-align: center;" class="row">
        <div class="col-md-3">
          <h4>Toplam Üye Sayısı</h4>
          <?php 
          $uyeSayisi="SELECT COUNT(ÜyeID) FROM Üyeler;";
          $sonucUyeSayisi=mysqli_query($baglanti,$uyeSayisi);
          $toplamUyeSayisi=mysqli_fetch_array($sonucUyeSayisi);
          echo '<h2>' .$toplamUyeSayisi[0]. '</h2>';
          ?>
          <br>
          <br>
        </div>
        <div class="col-md-3">
            <h4>Toplam Aidat Geliri</h4>
          <div class="text-success">
            <?php 
            $aidatGeliri="SELECT SUM(AidatMiktarı), ÖdenmeDurumu FROM Aidatlar WHERE ÖdenmeDurumu = 'Ödendi';";
            $sonucAidatGeliri=mysqli_query($baglanti,$aidatGeliri);
            $toplamAidatGeliri=mysqli_fetch_array($sonucAidatGeliri);
            echo '<h2>' .$toplamAidatGeliri[0]. ' TL </h2>';
            ?>
          </div>
          <br>
          <br>
          <h4>Ödenmeyen Aidatlar</h4>
          <div class="text-warning">
            <?php 
            $odenmeyenAidat="SELECT SUM(AidatMiktarı), ÖdenmeDurumu FROM Aidatlar WHERE ÖdenmeDurumu = 'Ödenmedi';";
            $sonucBeklenenAidat=mysqli_query($baglanti,$odenmeyenAidat);
            $odenmeyenAidatMiktari=mysqli_fetch_array($sonucBeklenenAidat);
            echo '<h2>' .$odenmeyenAidatMiktari[0]. ' TL </h2>';
            ?>
          </div>
        </div>
        <div class="col-md-3">
          <h4>Ödenen Borçlar</h4>
          <div class="text-danger">
            <?php 
            $borcMiktari="SELECT SUM(BorçMiktarı) FROM Borçlar WHERE ÖdenmeDurumu = 'Ödendi';";
            $sonucBorcSayisi=mysqli_query($baglanti,$borcMiktari);
            $odenenBorcMiktari=mysqli_fetch_array($sonucBorcSayisi);
            echo '<h2>' .$odenenBorcMiktari[0]. ' TL </h2>';
            ?>
          </div>
          <br>
          <br>
          <h4>Ödenmeyen Borçlar</h4>
          <div class="text-warning">
            <?php 
            $borcMiktari="SELECT SUM(BorçMiktarı) FROM Borçlar WHERE ÖdenmeDurumu = 'Ödenmedi';";
            $sonucBorcMiktari=mysqli_query($baglanti,$borcMiktari);
            $odenmeyenBorcMiktari=mysqli_fetch_array($sonucBorcMiktari);
            echo '<h2>' .$odenmeyenBorcMiktari[0]. ' TL </h2>';
            ?>
          </div>
        </div>
        <div class="col-md-3">
          <h4>Toplam Bağış Geliri</h4>
          <div class="text-success">
            <?php 
            $bagisMiktari="SELECT SUM(BağışMiktarı) FROM Bağışlar";
            $sonucBagisMiktari=mysqli_query($baglanti,$bagisMiktari);
            $toplamBagisGeliri=mysqli_fetch_array($sonucBagisMiktari);
            echo '<h2>' .$toplamBagisGeliri[0]. ' TL </h2>';
            ?>
          </div>
        </div>
        <hr>
      </div>
      <div style="text-align: center;" class="row">
        <div class="col-md-3">
            <h4>Toplam Gelirler</h4>
            <div class="text-success">
              <?php 
              $toplamGelirler = $toplamBagisGeliri[0] + $toplamAidatGeliri[0];
              echo '<h2>' .$toplamGelirler. ' TL </h2>';
              ?>
            </div>
          </div>
          <div class="col-md-3">
            <h4>Gelecek Gelirler</h4>
            <div class="text-warning">
              <?php 
              $beklenenGelirler = $odenmeyenAidatMiktari[0];
              echo '<h2>' .$beklenenGelirler. ' TL </h2>';
              ?>
            </div>
          </div>
          <div class="col-md-3">
            <h4>Toplam Giderler</h4>
            <div class="text-danger">
              <?php 
              $toplamGiderler = $odenenBorcMiktari[0];
              echo '<h2>' .$toplamGiderler. ' TL </h2>';
              ?>
            </div>
          </div>
          <div class="col-md-3">
            <h4>Gidecek Giderler</h4>
            <div class="text-warning">
              <?php 
              $beklenenGiderler = $odenmeyenBorcMiktari[0];
              echo '<h2>' .$beklenenGiderler. ' TL </h2>';
              ?>
            </div>
          </div>
      </div>
      <hr>
      <div style="text-align: center;" class="row">
        <div class="col-md-2">
          
        </div>
        <div class="col-md-4">
          <h4>Toplam Gelir/Gider Durumu</h4>
          <?php 
          if($toplamGelirler > $toplamGiderler){
            $kar = $toplamGelirler - $toplamGiderler;
            echo '<div class="text-success"> <h2>'
            .$kar. ' TL </h2></div>';
          }
          else{
            $zarar = $toplamGiderler - $toplamGelirler;
            echo '<div class="text-danger"> <h2>'
            .$zarar. ' TL </h2></div>';
          }
          ?>
        </div>
        <div class="col-md-4">
          <h4>Gelecek Gelir/Gider Durumu</h4>
          <?php 
          if($beklenenGelirler > $beklenenGiderler){
            $beklenenKar = $beklenenGelirler - $beklenenGiderler;
            echo '<div class="text-success"> <h2>'
            .$beklenenKar. ' TL </h2></div>';
          }
          else{
            $beklenenZarar = $beklenenGiderler - $beklenenGelirler;
            echo '<div class="text-danger"> <h2>'
            .$beklenenZarar. ' TL </h2></div>';
          }
          ?>
        </div>
      </div>
    </main>
  </div>
</div> 
    <script src="kaynaklar/bootstrap.bundle.js"></script>
</body>
</html>