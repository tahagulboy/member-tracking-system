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
    <title>Bağış Düzenle</title>
    <?php include("../statik/head.php"); 
          include("../statik/ayarlar.php"); ?>
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <br>
    <br>
    <br>
    <h1 class="h3 mb-3 fw-normal">Bağış Düzenle</h1>
    <?php 
        $gID=$_GET['id'];
        $sqlG="SELECT * FROM Bağışlar WHERE BağışID=".$gID;
        $sorguG=mysqli_query($baglanti,$sqlG);
        $bagisG = mysqli_fetch_array($sorguG);
        echo' 
        <form method="POST" action="bagis-duzenle2.php?id='.$bagisG[0].'">
            <input type="text"name="BagisMiktari" value="'.$bagisG[1].'">     
            <br>
            <br>  
            <input type="text" name="BagisTarihi" value="'.$bagisG[2].'">
            <br>
            <br>
            <input type="text" name="UyeID" value="'.$bagisG[3].'">
            <br>
            <br>    
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Düzenle">
            <button class="btn"><a href="../bagislar.php">Geri Dön</a></button>
        </form> 
        ';
    ?>

    
</main>
</body>
</html>