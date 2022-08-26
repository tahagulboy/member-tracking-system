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
    <title><?php echo($yonetim["DernekAdı"] . " : Borçlar"); ?></title>
    <?php include("statik/head.php"); ?>
    <link rel="stylesheet" href="kaynaklar/panel.css">
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?php echo($yonetim["DernekAdı"]) ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <form action="arama/borcAra.php" method="GET">
    <input name="query" class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Borç Ara... " aria-label="Search">
	</form>
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
        <h1 class="h2">Borçlar</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-success btn-sm"><a style="text-decoration: none;" class="text-light" href="islemler/borc-ekle.php"><i class="fa-solid fa-plus"></i> Borç Ekle</a></button>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Borç ID</th>
              <th scope="col">Borç Miktarı</th>
              <th scope="col">Ödeme Tarihi</th>
              <th scope="col">Ödenme Durumu</th>
              <th scope="col">Borç Veren</th>
              <th scope="col">Seçenekler</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while( $borclar=mysqli_fetch_array($sorgu4,MYSQLI_NUM) ){
                echo '<tr> <td> '
                .$borclar[0].
                '</td> <td> '
                .$borclar[1].
                ' TL </td><td> '
                .$borclar[2].
                '</td> <td> '
                .$borclar[3].
                '</td> <td> '
                .$borclar[4].
                '</td> 
                <td> 
                <button type="button" class="btn btn-primary btn-sm">
                <a style="text-decoration: none;" class="text-light" href="islemler/borc-duzenle.php?id='.$borclar[0].'"><i class="fa-solid fa-pencil"></i> Düzenle</a>
                </button>
                <button type="button" class="btn btn-danger btn-sm">
                <a style="text-decoration: none;" class="text-light" href="islemler/borc-sil.php?id='.$borclar[0].'"><i class="fa-solid fa-trash-can"></i> Sil</a>
                </button>
                </tr> 
                <br>'; 
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div> 
    <script src="kaynaklar/bootstrap.bundle.js"></script>
</body>
</html>