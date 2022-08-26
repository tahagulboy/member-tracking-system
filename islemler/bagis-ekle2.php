<?php
include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }

$BagisMiktari = $_POST['BagisMiktari'];
$BagisTarihi = $_POST['BagisTarihi'];
$UyeID = $_POST['UyeID'];
$bagisEkle="INSERT INTO Bağışlar(BağışMiktarı, BağışTarihi, ÜyeID) 
VALUES ('$BagisMiktari','$BagisTarihi','$UyeID')";
 
$bagisSonuc=mysqli_query($baglanti,$bagisEkle);
 
if ($bagisSonuc==0) {
    echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=../bagislar.php");
}
else {
    echo "<center> <br> <br> <br> <br>
    <h2> Yeni bağış eklendi! </h2>
    </center>"; 
    header("Refresh: 1; url=../bagislar.php");
};
 
?>