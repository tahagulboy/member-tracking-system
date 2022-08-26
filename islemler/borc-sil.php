<?php
 
$silinecekID= $_GET['id'];
 
include("../statik/ayarlar.php");
session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
 
$sonuc=mysqli_query($baglanti,"DELETE FROM Borçlar WHERE BorçID=".$silinecekID);
 
if($sonuc>0){
    echo "<center> <br> <br> <br> <br>
    <h2> Borç Silindi! </h2>
    </center>"; 
    header("Refresh: 2; url=../borclar.php");
}
else{
echo "<center> <br> <br> <br> <br>
    <h2> Bir şeyler test gitti! </h2>
    </center>"; 
    header("Refresh: 2; url=../borclar.php");
} 
?>