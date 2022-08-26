<?php
include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }

$BorcMiktari = $_POST['BorcMiktari'];
$OdemeTarihi = $_POST['OdemeTarihi'];
$OdenmeDurumu = $_POST['OdenmeDurumu'];
$BorcVeren = $_POST['BorcVeren'];

$borcEkle="INSERT INTO Borçlar(BorçMiktarı, ÖdemeTarihi, ÖdenmeDurumu, BorçVeren) 
VALUES ('$BorcMiktari','$OdemeTarihi','$OdenmeDurumu', '$BorcVeren')";
 
$borcSonuc=mysqli_query($baglanti,$borcEkle);
 
if ($borcSonuc==0) {
    echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=../borclar.php");
}
else {
    echo "<center> <br> <br> <br> <br>
    <h2> Yeni borç eklendi! </h2>
    </center>"; 
    header("Refresh: 1; url=../borclar.php");
};
 
?>