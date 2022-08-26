<?php
// Veritabanı
$hostadresi        =	"localhost";
$kullaniciadi      =	"root";
$sifre             =	"";
$veritabani        =	"dernek";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
    echo "Veritabanına Bağlanılamadı: " . mysqli_connect_error();
}

// Veri Çekme
$sql1="SELECT * FROM yönetim";
$sorgu1=mysqli_query($baglanti,$sql1);
$yonetim=mysqli_fetch_assoc($sorgu1);

$sql2="SELECT * FROM üyeler";
$sorgu2=mysqli_query($baglanti,$sql2);
//$uyeler=mysqli_fetch_assoc($sorgu2);

$sql3="SELECT * FROM aidatlar ORDER BY AidatID DESC";
$sorgu3=mysqli_query($baglanti,$sql3);
//$aidatlar=mysqli_fetch_assoc($sorgu3);

$sql4="SELECT * FROM borçlar ORDER BY BorçID DESC";
$sorgu4=mysqli_query($baglanti,$sql4);
//$borclar=mysqli_fetch_assoc($sorgu4);

$sql5="SELECT * FROM bağışlar ORDER BY BağışID DESC";
$sorgu5=mysqli_query($baglanti,$sql5);
//$aidatlar=mysqli_fetch_assoc($sorgu3);

?>