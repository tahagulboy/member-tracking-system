<?php
include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }

$UyeTC = $_POST['UyeTC'];
$UyeAdı = $_POST['UyeAdi'];
$UyeSoyadı = $_POST['UyeSoyadi'];
$BabaAdi = $_POST['BabaAdi'];
$AnneAdi = $_POST['AnneAdi'];
$SeriNo = $_POST['SeriNo'];
$Eposta = $_POST['Eposta'];
$Telno = $_POST['Telno'];
$Adres = $_POST['Adres'];
$WebAdresi = $_POST['WebAdresi'];
$Il = $_POST['Il'];
$Ilce = $_POST['Ilce'];
$DogumTarihi = $_POST['DogumTarihi'];
$DogumYeri = $_POST['DogumYeri'];
$KanGrubu = $_POST['KanGrubu'];
$Grubu = $_POST['Grubu'];
$Gorevi = $_POST['Gorevi'];
$Meslek = $_POST['Meslek'];
$CalistigiYer = $_POST['CalistigiYer'];
$OgrenimDurumu = $_POST['OgrenimDurumu'];
$Cinsiyet = $_POST['Cinsiyet'];
$Boy = $_POST['Boy'];
$Kilo = $_POST['Kilo'];
$MedeniHali = $_POST['MedeniHali'];
$AskerlikDurumu = $_POST['AskerlikDurumu'];
$UyeSifresi = $_POST['UyeSifresi'];
$UyeKayitTarihi = $_POST['KayitTarihi'];
//$UyeKayitTarihi = $_POST['UyeKayitTarihi'];

$uyeEkle="INSERT INTO Üyeler(ÜyeTC, ÜyeAdı, ÜyeSoyadı, BabaAdı, AnneAdı, SeriNo, Eposta, TelNo, Adres, WebAdresi, İl, İlçe, DoğumTarihi, DoğumYeri, KanGrubu, Grubu, Görevi, Meslek, ÇalıştığıYer, ÖğrenimDurumu, Cinsiyet, Boy, Kilo, MedeniHali, AskerlikDurumu, ÜyeŞifresi, ÜyeKayıtTarihi) 
VALUES ('$UyeTC','$UyeAdı','$UyeSoyadı', '$BabaAdi', '$AnneAdi', '$SeriNo', '$Eposta', '$Telno', '$Adres', '$WebAdresi', '$Il', '$Ilce', '$DogumTarihi', '$DogumYeri', '$KanGrubu', '$Grubu', '$Gorevi', '$Meslek', '$CalistigiYer', '$OgrenimDurumu', '$Cinsiyet', '$Boy', '$Kilo', '$MedeniHali', '$AskerlikDurumu', '$UyeSifresi', '$UyeKayitTarihi')";
 
$uyeSonuc=mysqli_query($baglanti,$uyeEkle);
 
if ($uyeSonuc==0) {
    echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=../uyeler.php");
}
else {
    echo "<center> <br> <br> <br> <br>
    <h2> Yeni üye eklendi! </h2>
    </center>"; 
    header("Refresh: 1; url=../uyeler.php");
};
 
?>