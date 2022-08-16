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

$sql1="SELECT * FROM yönetim";
$sorgu1=mysqli_query($baglanti,$sql1);
$yonetim=mysqli_fetch_assoc($sorgu1);

$sql2="SELECT * FROM üyeler";
$sorgu2=mysqli_query($baglanti,$sql2);
$uyeler=mysqli_fetch_assoc($sorgu2);

$sql4="SELECT * FROM aidatlar";
$sorgu4=mysqli_query($baglanti,$sql4);
$aidatlar=mysqli_fetch_assoc($sorgu4);
/* Kontrol
try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
} */
?>