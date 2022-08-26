<?php

include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
$BorcID= $_GET['id'];

$BorcMiktari = $_POST['BorcMiktari'];
$OdemeTarihi = $_POST['OdemeTarihi'];
$OdenmeDurumu = $_POST['OdenmeDurumu'];
$BorcVeren = $_POST['BorcVeren'];

$borcDuzenle = "UPDATE Borçlar SET BorçMiktarı ='$BorcMiktari', ÖdemeTarihi='$OdemeTarihi', ÖdenmeDurumu='$OdenmeDurumu', BorçVeren='$BorcVeren' 
WHERE BorçID='$BorcID'";

$borcDuzenleSonuc= mysqli_query($baglanti,$borcDuzenle);
if($borcDuzenleSonuc>0) 
{ 
    echo "<center> <br> <br> <br> <br>
    <h2> Borç bilgileri düzenlendi! </h2>
    </center>"; 
    header("Refresh: 1; url=../borclar.php");
}
else
echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=../borclar.php"); 
?>