<?php

include("../statik/ayarlar.php");

session_start();
    if(!isset($_SESSION["userLogin"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
    
$UyeID= $_GET['id'];

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

$uyeDuzenle = "UPDATE Üyeler SET ÜyeTC ='$UyeTC', ÜyeAdı='$UyeAdı', ÜyeSoyadı='$UyeSoyadı', BabaAdı='$BabaAdi', AnneAdı='$AnneAdi',
SeriNo='$SeriNo', Eposta='$Eposta', Telno='$Telno', Adres='$Adres', WebAdresi='$WebAdresi', 
İl='$Il', İlçe='$Ilce', DoğumTarihi='$DogumTarihi', DoğumYeri='$DogumYeri', KanGrubu='$KanGrubu', 
Grubu='$Grubu', Görevi='$Gorevi', Meslek='$Meslek', ÇalıştığıYer='$CalistigiYer', ÖğrenimDurumu='$OgrenimDurumu',
Cinsiyet='$Cinsiyet', Boy='$Boy', Kilo='$Kilo', MedeniHali='$MedeniHali', AskerlikDurumu='$AskerlikDurumu', ÜyeŞifresi='$UyeSifresi'
WHERE ÜyeID='$UyeID'";

$uyeDuzenleSonuc= mysqli_query($baglanti,$uyeDuzenle);
if($uyeDuzenleSonuc>0) 
{ 
    echo "<center> <br> <br> <br> <br>
    <h2> Bilgilerin düzenlendi! </h2>
    </center>"; 
    header("Refresh: 1; url=panel.php");
}
else
echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 1; url=panel.php"); 
?>