<?php
include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
    
$DernekAdi = $_POST['DernekAdi'];
$KullaniciAdi = $_POST['KullaniciAdi'];
$Sifre = $_POST['Sifre'];

$yonetimGuncelle = "UPDATE Yönetim SET DernekAdı ='$DernekAdi', KullanıcıAdı='$KullaniciAdi', Şifre='$Sifre'";

$yonetimGuncelleSonuc= mysqli_query($baglanti,$yonetimGuncelle);
if($yonetimGuncelleSonuc>0) 
{ 
    echo "<center> <br> <br> <br> <br>
    <h2> Yönetim bilgileri düzenlendi! </h2>
    </center>"; 
    header("Refresh: 1; url=../yonetim.php");
}
else
echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=../yonetim.php"); 
?>