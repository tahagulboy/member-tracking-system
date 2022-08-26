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
	<title>Aidat Arama Sonuçları</title>
    <?php include("../statik/head.php"); ?>
</head>
<body>
<?php
	$query = $_GET['query']; 	

        $aidatAra="SELECT * FROM Aidatlar WHERE (`AidatID` LIKE '%".$query."%') OR (`AidatMiktarı` LIKE '%".$query."%') OR
        (`ÖdemeTarihi` LIKE '%".$query."%') OR (`ÖdenmeDurumu` LIKE '%".$query."%') OR
        (`ÜyeID` LIKE '%".$query."%')";

        $sorguAidat=mysqli_query($baglanti,$aidatAra);

        echo "<center> <br> <br> <br> <br>
        <h2 style='display: inline;'> Arama Sonuçları </h2>
        <a style='text-decoration: none' class='text-danger' href='../aidatlar.php'>Geri Dön</a>
        <br> <br>
        <div class='table-responsive'>
        <table class='table table-striped table-sm'>
        <thead>
            <tr>
                <th scope='col'>Aidat ID</th>
                <th scope='col'>Aidat Miktarı</th>
                <th scope='col'>Ödeme Tarihi</th>
                <th scope='col'>Ödenme Durumu</th>
                <th scope='col'>Üye ID</th>
                <th scope='col'>Üye Adı</th>
                <th scope='col'>Üye Soyadı</th>
                <th scope='col'>Seçenekler</th>
            </tr>
          </thead>
          <tbody>
        ";
        while( $arananAidatlar=mysqli_fetch_array($sorguAidat)){
            $sqlAidatUye="SELECT * FROM Üyeler WHERE ÜyeID = $arananAidatlar[4]";
            $sorguAidatUye=mysqli_query($baglanti,$sqlAidatUye);
            $aidatUye=mysqli_fetch_assoc($sorguAidatUye);
		echo
            '<tr> <td> '
            .$arananAidatlar["AidatID"].
            '</td> <td>'
            .$arananAidatlar["AidatMiktarı"].
            '</td> <td>'
            .$arananAidatlar["ÖdemeTarihi"].
            '</td> <td>'
            .$arananAidatlar["ÖdenmeDurumu"].
            '</td> <td>'
            .$arananAidatlar["ÜyeID"].    
            '</td> <td>'
            .$aidatUye["ÜyeAdı"].     
            '</td> <td>'
            .$aidatUye["ÜyeSoyadı"].             
            '</td> <td>
            <button type="button" class="btn btn-primary btn-sm">
            <a style="text-decoration: none;" class="text-light" href="../islemler/aidat-duzenle.php?id='.$arananAidatlar['AidatID'].'">Düzenle</a>
            </button>
            <button type="button" class="btn btn-danger btn-sm">
            <a style="text-decoration: none;" class="text-light" href="../islemler/aidat-sil.php?id='.$arananAidatlar['AidatID'].'">Sil</a>
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