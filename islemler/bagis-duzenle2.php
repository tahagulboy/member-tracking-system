<?php

include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
$BagisID= $_GET['id'];

$BagisMiktari = $_POST['BagisMiktari'];
$BagisTarihi = $_POST['BagisTarihi'];
$UyeID = $_POST['UyeID'];

$bagisDuzenle = "UPDATE Bağışlar SET BağışMiktarı ='$BagisMiktari', BağışTarihi='$BagisTarihi', ÜyeID='$UyeID'
WHERE BağışID='$BagisID'";

$bagisDuzenleSonuc= mysqli_query($baglanti,$bagisDuzenle);
if($bagisDuzenleSonuc>0) 
{ 
    echo "<center> <br> <br> <br> <br>
    <h2> Bağış bilgileri düzenlendi! </h2>
    </center>"; 
    header("Refresh: 1; url=../bagislar.php");
}
else
echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=../bagislar.php"); 
?>