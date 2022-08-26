<?php
 
session_start();
 
ob_start();
 
session_destroy();

echo "<center> <br> <br>
<h2> Çıkış Yaptın. <br> <br> Ana Sayfaya Yönlendiriliyorsun </h2>
</center>";
 
header("Refresh: 2; url=../index.php");
 
?>