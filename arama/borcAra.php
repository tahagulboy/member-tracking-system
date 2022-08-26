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
	<title>Borç Arama Sonuçları</title>
    <?php include("../statik/head.php"); ?>
</head>
<body>
<?php
	$query = $_GET['query']; 	

        $borcAra="SELECT * FROM Borçlar WHERE (`BorçID` LIKE '%".$query."%') OR (`BorçMiktarı` LIKE '%".$query."%') OR
        (`ÖdemeTarihi` LIKE '%".$query."%') OR (`ÖdenmeDurumu` LIKE '%".$query."%') OR
        (`BorçVeren` LIKE '%".$query."%')";

        $sorguBorc=mysqli_query($baglanti,$borcAra);

        echo "<center> <br> <br> <br> <br>
        <h2 style='display: inline;'> Arama Sonuçları </h2>
        <a style='text-decoration: none' class='text-danger' href='../borclar.php'>Geri Dön</a>
        <br> <br>
        <div class='table-responsive'>
        <table class='table table-striped table-sm'>
        <thead>
            <tr>
                <th scope='col'>Borç ID</th>
                <th scope='col'>Borç Miktarı</th>
                <th scope='col'>Ödeme Tarihi</th>
                <th scope='col'>Ödenme Durumu</th>
                <th scope='col'>Borç Veren</th>
            </tr>
          </thead>
          <tbody>
        ";
        while( $arananBorclar=mysqli_fetch_assoc($sorguBorc)){
		echo
            '<tr> <td> '
            .$arananBorclar["BorçID"].
            '</td> <td>'
            .$arananBorclar["BorçMiktarı"].
            '</td> <td>'
            .$arananBorclar["ÖdemeTarihi"].
            '</td> <td>'
            .$arananBorclar["ÖdenmeDurumu"].
            '</td> <td>'
            .$arananBorclar["BorçVeren"].            
            '</td> <td>
            <button type="button" class="btn btn-primary btn-sm">
            <a style="text-decoration: none;" class="text-light" href="../islemler/borc-duzenle.php?id='.$arananBorclar['BorçID'].'">Düzenle</a>
            </button>
            <button type="button" class="btn btn-danger btn-sm">
            <a style="text-decoration: none;" class="text-light" href="../islemler/borc-sil.php?id='.$arananBorclar['BorçID'].'">Sil</a>
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