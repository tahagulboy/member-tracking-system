<?php      
    include('../statik/ayarlar.php');  

    session_start();
    ob_start();

    $tc = $_POST['tc'];  
    $password = $_POST['pass'];  
      
    $tc = stripcslashes($tc);  
    $password = stripcslashes($password);  
    $tc = mysqli_real_escape_string($baglanti, $tc);  
    $password = mysqli_real_escape_string($baglanti, $password);  
    
    $sql3 = "SELECT * FROM Üyeler WHERE ÜyeTC = '$tc' and ÜyeŞifresi = '$password'";  
    $result = mysqli_query($baglanti, $sql3);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        $_SESSION["userLogin"] = "true";
        $_SESSION["tc"] = $tc;
        $_SESSION["pass"] = $pass;
        
        header("location: panel.php");

    }  
    else{  
        echo "<center> <br> <br> <br> <br>
        <h2> Kullanıcı adın veya şifren yanlış! </h2>
        </center>";
        header("Refresh: 2; url=index.php");
    }     

    ob_end_flush();
?>  