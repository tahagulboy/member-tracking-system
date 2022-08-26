<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borç Ekle</title>
    <?php include("../statik/head.php"); ?>
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <br>
    <br>
    <br>
    <h1 class="h3 mb-3 fw-normal">Borç Ekle</h1>
    <form method="POST" action="borc-ekle2.php">
            <input type="text" placeholder="Borç Miktarı*" name="BorcMiktari">     
            <br>
            <br>  
            <input type="text" placeholder="Ödeme Tarihi*" name="OdemeTarihi">
            <br>
            <br>
            <input type="text" placeholder="Ödenme Durumu*" name="OdenmeDurumu">        
            <br>
            <br>
            <input type="text" placeholder="Borç Veren" name="BorcVeren">
            <br>
            <br>    
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Ekle">
            <button class="btn"><a href="../borclar.php">Geri Dön</a></button>
    </form> 
</main>
</body>
</html>