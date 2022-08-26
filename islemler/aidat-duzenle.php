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
    <title>Aidat Düzenle</title>
    <?php include("../statik/head.php"); 
          include("../statik/ayarlar.php"); ?>
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <br>
    <br>
    <br>
    <h1 class="h3 mb-3 fw-normal">Aidat Düzenle</h1>
    <?php 
        $gID=$_GET['id'];
        $sqlG="SELECT * FROM Aidatlar WHERE AidatID=".$gID;
        $sorguG=mysqli_query($baglanti,$sqlG);
        $aidatG = mysqli_fetch_array($sorguG);
        echo' 
        <form method="POST" action="aidat-duzenle2.php?id='.$aidatG[0].'">
            <span>Aidat Miktarı : </span>
            <input type="text"name="AidatMiktari" value="'.$aidatG[1].'">     
            <br>
            <br>  
            <span>Ödeme Tarihi : </span>
            <input type="text" name="OdemeTarihi" value="'.$aidatG[2].'">
            <br>
            <br>
            <span>Ödenme Durumu : </span>
            <input type="text" name="OdenmeDurumu" value="'.$aidatG[3].'">
            <br>
            <br>
            <span>Uye ID : </span>
            <input type="text" name="UyeID" value="'.$aidatG[4].'">   
            <br>
            <br>     
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Düzenle">
            <button class="btn"><a href="../aidatlar.php">Geri Dön</a></button>
        </form> 
        ';
    ?>

    
</main>
</body>
</html>