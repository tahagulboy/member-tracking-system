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
	<title>Bağış Arama Sonuçları</title>
    <?php include("../statik/head.php"); ?>
</head>
<body>
<?php
	$query = $_GET['query']; 	

        $bagisAra="SELECT * FROM Bağışlar WHERE (`BağışID` LIKE '%".$query."%') OR (`BağışMiktarı` LIKE '%".$query."%') OR
        (`BağışTarihi` LIKE '%".$query."%') OR (`ÜyeID` LIKE '%".$query."%')";

        $sorguBagis=mysqli_query($baglanti,$bagisAra);

        echo "<center> <br> <br> <br> <br>
        <h2 style='display: inline;'> Arama Sonuçları </h2>
        <a style='text-decoration: none' class='text-danger' href='../bagislar.php'>Geri Dön</a>
        <br> <br>
        <div class='table-responsive'>
        <table class='table table-striped table-sm'>
        <thead>
            <tr>
                <th scope='col'>Bağış ID</th>
                <th scope='col'>Bağış Miktarı</th>
                <th scope='col'>Bağış Tarihi</th>
                <th scope='col'>Üye ID</th>
                <th scope='col'>Üye Adı</th>
                <th scope='col'>Üye Soyadı</th>
                <th scope='col'>Seçenekler</th>
            </tr>
          </thead>
          <tbody>
        ";
        while( $arananBagislar=mysqli_fetch_array($sorguBagis)){
            $sqlBagisUye="SELECT * FROM Üyeler WHERE ÜyeID = $arananBagislar[3]";
            $sorguBagisUye=mysqli_query($baglanti,$sqlBagisUye);
            $bagisUye=mysqli_fetch_assoc($sorguBagisUye);
		echo
            '<tr> <td> '
            .$arananBagislar["BağışID"].
            '</td> <td>'
            .$arananBagislar["BağışMiktarı"].
            '</td> <td>'
            .$arananBagislar["BağışTarihi"].
            '</td> <td>'
            .$arananBagislar["ÜyeID"].    
            '</td> <td>'
            .$bagisUye["ÜyeAdı"].     
            '</td> <td>'
            .$bagisUye["ÜyeSoyadı"].             
            '</td> <td>
            <button type="button" class="btn btn-primary btn-sm">
            <a style="text-decoration: none;" class="text-light" href="../islemler/bagis-duzenle.php?id='.$arananBagislar['BağışID'].'">Düzenle</a>
            </button>
            <button type="button" class="btn btn-danger btn-sm">
            <a style="text-decoration: none;" class="text-light" href="../islemler/bagis-sil.php?id='.$arananBagislar['BağışID'].'">Sil</a>
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