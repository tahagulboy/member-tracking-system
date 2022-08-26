<?php

include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
$AidatID= $_GET['id'];

$AidatMiktari = $_POST['AidatMiktari'];
$OdemeTarihi = $_POST['OdemeTarihi'];
$OdenmeDurumu = $_POST['OdenmeDurumu'];
$UyeID = $_POST['UyeID'];

$aidatDuzenle = "UPDATE Aidatlar SET AidatMiktarı ='$AidatMiktari', ÖdemeTarihi='$OdemeTarihi', ÖdenmeDurumu='$OdenmeDurumu', ÜyeID='$UyeID' 
WHERE AidatID='$AidatID'";

$aidatDuzenleSonuc= mysqli_query($baglanti,$aidatDuzenle);
if($aidatDuzenleSonuc>0) 
{ 
    echo "<center> <br> <br> <br> <br>
    <h2> Aidat bilgileri düzenlendi! </h2>
    </center>"; 
    header("Refresh: 1; url=../aidatlar.php");
}
else
echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=../aidatlar.php"); 
?>