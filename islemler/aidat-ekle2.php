<?php
include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }

$AidatMiktari = $_POST['AidatMiktari'];
$OdemeTarihi = $_POST['OdemeTarihi'];
$OdenmeDurumu = $_POST['OdenmeDurumu'];
$BagisID = $_POST['UyeID'];
$BagisEkle="INSERT INTO Aidatlar(AidatMiktarı, ÖdemeTarihi, ÖdenmeDurumu, ÜyeID) 
VALUES ('$AidatMiktari','$OdemeTarihi','$OdenmeDurumu', '$BagisID')";
 
$BagisSonuc=mysqli_query($baglanti,$BagisEkle);
 
if ($BagisSonuc==0) {
    echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=../aidatlar.php");
}
else {
    echo "<center> <br> <br> <br> <br>
    <h2> Yeni aidat eklendi! </h2>
    </center>"; 
    header("Refresh: 1; url=../aidatlar.php");
};
 
?>