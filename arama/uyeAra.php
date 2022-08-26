<?php include("../statik/ayarlar.php");
    session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
        header("Refresh: 0.0000000000000001; url=../yonlendirme/yasakli.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Üye Arama Sonuçları</title>
    <?php include("../statik/head.php"); ?>
</head>
<body>
<?php
	$query = $_GET['query']; 	

        $uyeAra="SELECT * FROM Üyeler WHERE (`ÜyeID` LIKE '%".$query."%') OR (`ÜyeAdı` LIKE '%".$query."%') OR
        (`ÜyeSoyadı` LIKE '%".$query."%') OR (`BabaAdı` LIKE '%".$query."%') OR
        (`AnneAdı` LIKE '%".$query."%') OR (`Eposta` LIKE '%".$query."%') OR
        (`TelNo` LIKE '%".$query."%') OR (`Adres` LIKE '%".$query."%') OR
        (`WebAdresi` LIKE '%".$query."%') OR (`İl` LIKE '%".$query."%') OR
        (`İlçe` LIKE '%".$query."%') OR (`DoğumTarihi` LIKE '%".$query."%') OR
        (`DoğumYeri` LIKE '%".$query."%') OR (`KanGrubu` LIKE '%".$query."%') OR
        (`Grubu` LIKE '%".$query."%') OR (`Görevi` LIKE '%".$query."%') OR
        (`Meslek` LIKE '%".$query."%') OR (`ÇalıştığıYer` LIKE '%".$query."%') OR
        (`ÖğrenimDurumu` LIKE '%".$query."%') OR (`Cinsiyet` LIKE '%".$query."%') OR
        (`Boy` LIKE '%".$query."%') OR (`Kilo` LIKE '%".$query."%') OR
        (`MedeniHali` LIKE '%".$query."%') OR (`AskerlikDurumu` LIKE '%".$query."%')";

        $sorguUye=mysqli_query($baglanti,$uyeAra);

        echo "<center> <br> <br> <br> <br>
        <h2 style='display: inline;'> Arama Sonuçları </h2>
        <a style='text-decoration: none' class='text-danger' href='../uyeler.php'>Geri Dön</a>
        <br> <br>
        <div class='table-responsive'>
        <table class='table table-striped table-sm'>
        <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>TC</th>
                <th scope='col'>Seri No</th>
                <th scope='col'>Ad</th>
                <th scope='col'>Soyad</th>
                <th scope='col'>Baba Adı</th>
                <th scope='col'>Anne Adı</th>
                <th scope='col'>E-Posta</th>
                <th scope='col'>Telefon Numarası</th>
                <th scope='col'>Adres</th>
                <th scope='col'>Web Adresi</th>
                <th scope='col'>İl</th>
                <th scope='col'>İlçe</th>
                <th scope='col'>Doğum Tarihi</th>
                <th scope='col'>Doğum Yeri</th>
                <th scope='col'>Kan Grubu</th>
                <th scope='col'>Grubu</th>
                <th scope='col'>Görevi</th>
                <th scope='col'>Mesleği</th>
                <th scope='col'>Çalıştığı Yer</th>
                <th scope='col'>Öğrenim Durumu</th>
                <th scope='col'>Cinsiyet</th>
                <th scope='col'>Boy</th>
                <th scope='col'>Kilo</th>
                <th scope='col'>Medeni Hali</th>
                <th scope='col'>Askerlik Durumu</th>
                <th scope='col'>Şifre</th>
                <th scope='col'>Seçenekler</th>
            </tr>
          </thead>
          <tbody>
        ";
        while( $arananUyeler=mysqli_fetch_assoc($sorguUye)){
		echo
            '<tr> <td> '
            .$arananUyeler["ÜyeID"].
            '</td> <td>'
            .$arananUyeler["ÜyeTC"].
            '</td> <td>'
            .$arananUyeler["SeriNo"].
            '</td> <td>'
            .$arananUyeler["ÜyeAdı"].
            '</td> <td>'
            .$arananUyeler["ÜyeSoyadı"].
            '</td> <td>'
            .$arananUyeler["BabaAdı"].
            '</td> <td> '
            .$arananUyeler["AnneAdı"].
            '</td> <td> '
            .$arananUyeler["Eposta"].
            '</td> <td> '
            .$arananUyeler["TelNo"].
            '</td> <td> '
            .$arananUyeler["Adres"].
            '</td> <td> '
            .$arananUyeler["WebAdresi"].
            '</td> <td> '
            .$arananUyeler["İl"].
            '</td> <td> '
            .$arananUyeler["İlçe"].
            '</td> <td> '
            .$arananUyeler["DoğumTarihi"].
            '</td> <td> '
            .$arananUyeler["DoğumYeri"].
            '</td> <td> '
            .$arananUyeler["KanGrubu"].
            '</td> <td> '
            .$arananUyeler["Grubu"].
            '</td> <td> '
            .$arananUyeler["Görevi"].
            '</td> <td> '
            .$arananUyeler["Meslek"].
            '</td> <td> '
            .$arananUyeler["ÇalıştığıYer"].
            '</td> <td> '
            .$arananUyeler["ÖğrenimDurumu"].
            '</td> <td> '
            .$arananUyeler["Cinsiyet"].
            '</td> <td> '
            .$arananUyeler["Boy"].
            '</td> <td> '
            .$arananUyeler["Kilo"].
            '</td> <td> '
            .$arananUyeler["MedeniHali"].
            '</td> <td> '
            .$arananUyeler["AskerlikDurumu"].
            '</td> <td> '
            .$arananUyeler["ÜyeŞifresi"].
            '</td> <td>
            <button type="button" class="btn btn-primary btn-sm">
            <a style="text-decoration: none;" class="text-light" href="../islemler/uye-duzenle.php?id='.$arananUyeler['ÜyeID'].'">Düzenle</a>
            </button>
            <button type="button" class="btn btn-danger btn-sm">
            <a style="text-decoration: none;" class="text-light" href="../islemler/uye-sil.php?id='.$arananUyeler['ÜyeID'].'">Sil</a>
            </button>
            </td>
            </tr>';
        }
        echo "
            </body>
            </table>
        </div>
        <br>
        </center>";

?>
</body>
</html>