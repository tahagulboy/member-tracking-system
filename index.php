<!DOCTYPE html>
<html lang="tr">
<head>
    <?php include("statik/ayarlar.php"); ?>
    <title><?php echo($yonetim["DernekAdı"] . " Giriş Sistemi"); ?></title>
    <?php include("statik/head.php"); ?>
    <link rel="stylesheet" href="/../kaynaklar/giris.css">
</head>
<body class="text-center">
<main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal"><?php echo($yonetim["DernekAdı"] . " Giriş Sistemi") ?></h1>
    <form name="f1" action = "dogrulama.php" method = "POST">  
        <div class="form-floating">
            <label for="user">Kullanıcı Adı</label>
            <input type="text" class="form-control" id="user" name="user">
        </div>
        <div class="form-floating">
            <label for="user">Şifre</label>
            <input type="password" class="form-control" id="user" name="pass">
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Oturumu Açık Tut
            </label>
        </div>
            <input class="btn btn-lg btn-primary btn-block" type="submit" id="btn" value="Giriş Yap">
            <!-- <button class="w-100 btn btn-lg btn-primary" type="submit"> </button> -->
    </form> 
    <p class="mt-5 mb-3 text-muted">&copy; <?php echo($yonetim["DernekAdı"]); ?> 2022</p>
</main>
    <script src="kaynaklar/bootstrap.bundle.js"></script>
</body>
</html>