<?php      
    include('statik/ayarlar.php');  

    session_start();
    ob_start();

    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($baglanti, $username);  
        $password = mysqli_real_escape_string($baglanti, $password);  
      
        $sql3 = "SELECT * FROM Yönetim WHERE KullanıcıAdı = '$username' and Şifre = '$password'";  
        $result = mysqli_query($baglanti, $sql3);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION["login"] = "true";
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;
            
            header("Location: panel.php");

        }  
        else{  
            echo "<center> <br> <br> <br> <br>
            <h2> Kullanıcı adın veya şifren yanlış! </h2>
            </center>";
            header("Refresh: 2; url=index.php");
        }     

    ob_end_flush();
?>  