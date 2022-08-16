<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include("statik/ayarlar.php");
    session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=yasakli.php");
    }
    ?>
    <title><?php echo($yonetim["DernekAdı"] . " : Burslar"); ?></title>
    <?php include("statik/head.php"); ?>
    <link rel="stylesheet" href="kaynaklar/panel.css">
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?php echo($yonetim["DernekAdı"]) ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  -->
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="index.php">Çıkış Yap</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <?php include("statik/navbar.php"); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Burslar</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">test</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">test</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            test
          </button>
        </div>
      </div>
      
    </main>
  </div>
</div> 
    <script src="kaynaklar/bootstrap.bundle.js"></script>
</body>
</html>