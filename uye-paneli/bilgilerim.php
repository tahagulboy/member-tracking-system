<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["userLogin"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
?>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Bilgilerim</title>
    <?php include("../statik/head.php"); 
    include("../statik/ayarlar.php"); ?>
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <br>
    <br>
    <br>
    <h1 class="h3 mb-3 fw-normal">Bilgilerim</h1>
    <?php 
        $gID=$_GET['id'];
        $sqlG="SELECT * FROM Üyeler WHERE ÜyeID=".$gID;
        $sorguG=mysqli_query($baglanti,$sqlG);
        $uyeG = mysqli_fetch_assoc($sorguG);
        echo' 
        <form method="POST" action="duzenle.php?id='.$uyeG['ÜyeID'].'">
            <input type="text" placeholder="TC*" name="UyeTC" value="'.$uyeG['ÜyeTC'].'">     
            <input type="text" placeholder="Ad*" name="UyeAdi" value="'.$uyeG['ÜyeAdı'].'">
            <input type="text" placeholder="Soyad*" name="UyeSoyadi" value="'.$uyeG['ÜyeSoyadı'].'">
            <input type="text" placeholder="Baba Adı" name="BabaAdi" value="'.$uyeG['BabaAdı'].'">
            <input type="text" placeholder="Anne Adı" name="AnneAdi" value="'.$uyeG['AnneAdı'].'">

            <br>
            <br>
            <input type="text" placeholder="Seri No" name="SeriNo" value="'.$uyeG['SeriNo'].'">
            <input type="text" placeholder="E-Posta" name="Eposta" value="'.$uyeG['Eposta'].'">        
            <input type="text" placeholder="Tel No" name="Telno" value="'.$uyeG['TelNo'].'">
            <input type="text" placeholder="Adres" name="Adres" value="'.$uyeG['Adres'].'">
            <input type="text" placeholder="Web Adresi" name="WebAdresi" value="'.$uyeG['WebAdresi'].'">

            <br>
            <br>
            <input type="text" placeholder="İl" name="Il" value="'.$uyeG['İl'].'">
            <input type="text" placeholder="İlçe" name="Ilce" value="'.$uyeG['İlçe'].'">
            <input type="text" placeholder="Doğum Tarihi" name="DogumTarihi" value="'.$uyeG['DoğumTarihi'].'">
            <input type="text" placeholder="Doğum Yeri" name="DogumYeri" value="'.$uyeG['DoğumYeri'].'">
            <input type="text" placeholder="Kan Grubu" name="KanGrubu" value="'.$uyeG['KanGrubu'].'">
            <br>
            <br>    
            <input type="text" placeholder="Grubu" name="Grubu" value="'.$uyeG['Grubu'].'">
            <input type="text" placeholder="Görevi" name="Gorevi" value="'.$uyeG['Görevi'].'">
            <input type="text" placeholder="Meslek" name="Meslek" value="'.$uyeG['Meslek'].'">
            <input type="text" placeholder="Çalıştığı Yer" name="CalistigiYer" value="'.$uyeG['ÇalıştığıYer'].'">
            <input type="text" placeholder="Öğrenim Durumu" name="OgrenimDurumu" value="'.$uyeG['ÖğrenimDurumu'].'">
            <br>
            <br>
            <input type="text" placeholder="Cinsiyet" name="Cinsiyet" value="'.$uyeG['Cinsiyet'].'">
            <input type="text" placeholder="Boy" name="Boy" value="'.$uyeG['Boy'].' CM">
            <input type="text" placeholder="Kilo" name="Kilo" value="'.$uyeG['Kilo'].' KG">
            <input type="text" placeholder="Medeni Hali" name="MedeniHali" value="'.$uyeG['MedeniHali'].'">
            <input type="text" placeholder="Askerlik Durumu" name="AskerlikDurumu" value="'.$uyeG['AskerlikDurumu'].'">
            <br>
            <br>
            <input type="text" placeholder="Üye Şifresi" name="UyeSifresi" value="'.$uyeG['ÜyeŞifresi'].'">
            <br>
            <br>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Düzenle">
            <button class="btn"><a href="panel.php">Geri Dön</a></button>
        </form> 
        ';
    ?>

</main>
</body>
</html>